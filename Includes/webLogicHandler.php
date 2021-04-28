<?php
    // This file handles logic for most website functionality

    // dbConfig include
    require_once 'Includes/dbConfig.php';

    echo "<p>webLogicHandler successfully linked</p>"; // Debug string
    
    

    // ----------- Functions -----------
    
    // Basic Login Check
    function loginCheckBasic() {
        // Initialize the session
        session_start();
 
        // Check to see if the user is logged in
        if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){}
    }

    // Regular Login Check
    function loginCheck() {
        // Initialize the session
        session_start();
        
        // Check to see if the user is logged in, if not then redirect to the login page
        if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
            header("location: login.php");
            exit;
        }
    }

    // Admin Login Check
    function loginCheckAdmin() {
        // Initialize the session
        session_start();
        
        // Check to see if the user is an admin, if not then redirect to the login page
        if(!isset($_SESSION["employee"]) || $_SESSION["employee"] !== true){
            header("location: login.php"); 
            exit;
        }
    }


    // Process Login Form
    function loginHandler() {
        // Start the user session
        session_start();

        // Checks to see if user is already logged in
        loginCheck();

        // Define variables and initialize with empty values
        $username = $password = "";
        $username_err = $password_err = $login_err = "";

        // Processing form data when form is submitted
        if($_SERVER["REQUEST_METHOD"] == "POST"){

            // Check if username is empty
            if(empty(trim($_POST["username"]))){
                $username_err = "Please enter username.";
            } else{
                $username = trim($_POST["username"]);
            }

            // Check if password is empty
            if(empty(trim($_POST["password"]))){
                $password_err = "Please enter your password.";
            } else{
                $password = trim($_POST["password"]);
            }

            // Validate credentials
            if(empty($username_err) && empty($password_err)) {
                // Prepare a select statement
                $sql = "SELECT ACCOUNT_ID, USERNAME, PASSWORD FROM accounts WHERE USERNAME = ?";

                if($stmt = mysqli_prepare($connection, $sql)) {
                    // Bind variables to the prepared statement as parameters
                    mysqli_stmt_bind_param($stmt, "s", $param_username);

                    // Set parameters
                    $param_username = $username;

                    // Attempt to execute the prepared statement
                    if(mysqli_stmt_execute($stmt)){
                        // Store result
                        mysqli_stmt_store_result($stmt);

                        // Check if username exists, if yes then verify password
                        if(mysqli_stmt_num_rows($stmt) == 1){                    
                            // Bind result variables
                            mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);


                            if(mysqli_stmt_fetch($stmt)){
                                if(password_verify($password, $hashed_password)){
                                    // Password is correct, so start a new session
                                    session_start();

                                    // Store data in session variables
                                    $_SESSION["loggedin"] = true;
                                    $_SESSION["id"] = $id;
                                    $_SESSION["username"] = $username;

                                    // Employee Check
                                    $empCheck = "SELECT * FROM employees WHERE ACCOUNT_ID=$id and WHEN_TERMINATED IS NULL";
                                    $checkEmployee = $connection-> query($empCheck);

                                    $loginAttemptStatement = "INSERT INTO login_attempts (`TIME`, `SUCCESS`, `ACCOUNT_ID`) VALUES(NOW(), 1 ,$id)";
                                    if($stmt = mysqli_prepare($connection, $loginAttemptStatement)) {
                                        mysqli_stmt_execute($stmt);
                                    }

                                    if ($checkEmployee-> num_rows > 0) {
                                        $_SESSION["employee"] = true;
                                        // Redirect user to accounts page
                                        header("location: accounts.php");
                                    }
                                    else {
                                        $_SESSION["employee"] = false;
                                        // Redirect user to accounts page
                                        header("location: accounts.php");
                                    }

                                } else{

                                    $loginAttemptStatement = "INSERT INTO login_attempts (`TIME`, `SUCCESS`, `ACCOUNT_ID`) VALUES(NOW(), 0 ,$id)";
                                    if($stmt = mysqli_prepare($connection, $loginAttemptStatement)) {
                                        mysqli_stmt_execute($stmt);
                                    }

                                    // Password is not valid, display a generic error message
                                    $login_err = "Invalid username or password.";

                                }
                            }
                        } else{
                            // Username doesn't exist, display a generic error message
                            $login_err = "Invalid username or password.";
                        }
                    } else {
                        echo "Oops! Something went wrong. Please try again later.";
                    }

                    // Close statement
                    mysqli_stmt_close($stmt);
                }
            }

            // Close connection
            mysqli_close($connection);
        }
    }

    // Process Signup Form
    function signupHandler() {
        // Define/Initialize variables
        $firstName = "";
        $lastName = "";
        $phoneNumber = "";
        $homeAddress = "";
        $email = "";
        $preferredStore = "";
        $username = "";
        $usernameError = "";
        $password1 = "";
        $password2 = "";
        $passwordError = "";
        $confirmPasswordError = "";

        // Processing form data when form is submitted
        if($_SERVER["REQUEST_METHOD"] == "POST"){
        
            $firstName = trim($_POST["firstName"]);
            $lastName = trim($_POST["lastName"]);
            $phoneNumber = trim($_POST["phoneNumber"]);
            $homeAddress = trim($_POST["homeAddress"]);
            $email = trim($_POST["email"]);


            // Validate username
            if(empty(trim($_POST["username"]))){
                $usernameError = "Please enter a username.";
            } else{
                //$username = trim($_POST["username"]);
                $usernameCheck = "SELECT ACCOUNT_ID FROM accounts WHERE username = ?";

                if($stmt = mysqli_prepare($connection, $usernameCheck)){
                    // Bind variables to the prepared statement as parameters
                    mysqli_stmt_bind_param($stmt, "s", $param_username);

                    // Set parameters
                    $param_username = trim($_POST["username"]);

                    // Attempt to execute the prepared statement
                    if(mysqli_stmt_execute($stmt)){
                        /* store result */
                        mysqli_stmt_store_result($stmt);

                        if(mysqli_stmt_num_rows($stmt) == 1){
                            $usernameError = "This username is already taken.";
                        } else{
                            $username = trim($_POST["username"]);
                        }
                    } else{
                        echo "Oops! Something went wrong. Please try again later.";
                    }

                    // Close statement
                    mysqli_stmt_close($stmt);
                }
            }

            
            // Validate password
            if(empty(trim($_POST["password1"]))){
                $passwordError = "Please enter a password.";     
            } elseif(strlen(trim($_POST["password1"])) < 6){
                $passwordError = "Password must have atleast 6 characters.";
            } else{
                $password1 = trim($_POST["password1"]);
            }
            
            // Validate confirm password
            if(empty(trim($_POST["password2"]))){
                $confirmPasswordError = "Please confirm password.";     
            } else{
                $password2 = trim($_POST["password2"]);
                if(empty($passwordError) && ($password1 != $password2)){
                    $confirmPasswordError = "Password did not match.";
                }
            }
            
            // Check input errors before inserting in database
            if(empty($usernameError) && empty($passwordError) && empty($confirmPasswordError)){
                
                // Prepare an insert statement
                $sql = "INSERT INTO accounts (first_name, last_name, preferred_store, phone, address, email, username, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                
                if($stmt = mysqli_prepare($connection, $sql)){
                    // Bind variables to the prepared statement as parameters
                    mysqli_stmt_bind_param($stmt, "ssssssss", $firstName, $lastName, $preferredStore , $phoneNumber, $homeAddress, $email, $param_username, $param_password);
                    
                    // Set parameters
                    $param_username = $username;
                    $param_password = password_hash($password1, PASSWORD_DEFAULT); // Creates a password hash


                    // Attempt to execute the prepared statement
                    if(mysqli_stmt_execute($stmt)){
                        // Redirect to login page
                        header("location: login.php");
                    } else{
                        echo "Something went wrong. Please try again later.";
                    }

                    // Close statement
                    mysqli_stmt_close($stmt);
                }
            }
            
            // Close connection
            mysqli_close($connection);
        }


    }


?>