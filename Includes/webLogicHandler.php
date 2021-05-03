<?php
    // This file handles logic for most website functionality

    // dbConfig include
    require_once 'Includes/dbConfig.php';

    // Initialize the session
    session_start();

    // ----------- Functions -----------
    
    // Basic Login Check
    function loginCheckBasic() {
        // Check to see if the user is logged in
        if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        }
    }

    // Regular Login Check
    function loginCheck() {
        // Check to see if the user is logged in, if not then redirect to the login page
        if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
            header("location: login.php");
            exit;
        }
    }

    // Admin Login Check
    function loginCheckAdmin() {
        
        // Check to see if the user is an admin, if not then redirect to the login page
        if(!isset($_SESSION["employee"]) || $_SESSION["employee"] !== true){
            header("location: login.php"); 
            exit;
        }
    }
    
    function displayHeader() {
        loginCheckBasic();
        echo '<header id="header"><nav class="headContainer"><div id="headLogo"><a href="index.php" class="logo" title="Return to the homepage">Lily&#39;s Lil Garage</a></div><div id="headLinks"><a href="locations.php" title="View our store locations">Locations</a><a href="menu.php" title="Browse our menu">Menu</a><a href="contact.php" title="View our contact information">Contact</a><a href="about.php" title="View information about our organization">About</a>';
        
        // If user isn't logged in, will show login page
        if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
            echo "<a href='signup.php' title='Click here to sign up'>Sign Up</a> <a href='login.php' title='Click here to login'>Login</a>";
        }
        else {
            echo "<a href='account.php' title='View your account'>Account</a> <a href='Includes/logout.php' title='Click here to log out'>Log Out</a>";
        }
        echo '</div><div class="headOrder"><a href="order.php" title="Click here to make an online order" class="headButton">Order Online</a>';
        echo '</div></nav></header>';
    }

    function displayHeaderOrder() {
        loginCheckBasic();
        echo '<header id="headerOrder"><nav class="headContainer"><div id="headLogo"><a href="index.php" class="logo" title="Return to the homepage">Lily&#39;s Lil Garage</a></div>';
        
        if(isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] == true){
            echo "<div class='headerOrderLinks'><a href='account.php' title='View your account'>Account</a> <a href='Includes/logout.php' title='Click here to log out'>Log Out</a></div>";
        }
        echo '</nav></header>';
    }

    function displayFooter(){
        echo '<footer><div><p class="logoSmall">Lily&#39;s Lil Garage</p>';
        echo '<nav><a href="index.php" title="Return to the homepage">Home</a><a href="locations.php" title="View our store locations">Locations</a>';
        echo '<a href="menu.php" title="Browse our menu">Menu</a><a href="contact.php" title="View our contact information">Contact</a></nav><p id="footCopy">Copyright &copy; 2021</p></div>';
        echo '<div><address><a class="noFloat" href="tel:555-555-5555" title="Call our phone number">555-555-5555</a><a class="noFloat" href="mailto:contact@llg.com" title="Send us an email">Contact@llg.com</a><p class="noMargin">2200 N Squirrel Rd Rochester MI</p></address></div>';
        echo '<div><p class="noMargin">Our Motto:</p><p class="noMargin"><i>Taking that home-made taste across the state!</i></p></div></footer>';
    }

    function accountView(){
        echo '<p>Under Construction</p>';
    }

    function displayContact() {
        if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
            echo '<div class="widePad form-area"><form action="';
            echo htmlspecialchars($_SERVER["PHP_SELF"]);
            echo '" method="post">';
            echo '<h4>Personal Information<hr></h4><label>First Name:</label><input type="text" name="firstName" size="40" title="Enter your first name" autocomplete="given-name" required>';
            echo '<br><label>Last Name:</label><input type="text" name="lastName" size="40" title="Enter your last name" autocomplete="family-name" required>';
            echo '<h4>Contact Information<hr></h4><label>Email Address:</label><input type="text" name="email" size="40" title="Enter your email address" autocomplete="email" required>';
            echo '<br><label>Phone Number:</label><input type="text" name="phoneNumber" size="40" title="Enter your phone number. Hint: 012-345-6789" pattern="^(\d{3}-)?\d{3}-\d{4}$" autocomplete="tel" required>';
            echo '<h4>Contact<hr></h4><label>Reason:</label><select name="contactReason" title="Select a contact reason"><optgroup label="Inquiries"><option>Inquiry</option><option>Large Party Inquiry</option><option>Job Opportunites</option><option>Marketing Opportunites</option></optgroup>';
            echo '<optgroup label="Messages"><option>Complaint</option><option>Feedback</option><option>Other</option></optgroup></select>';
            echo '<br><label>Store Location:</label><select name="storeLocation" title="Select your preferred store location" required><option value="N/A">N/A</option><option value="Mount Pleasant">Mount Pleasant</option><option value="Ann Arbor">Ann Arbor</option><option value="Pickney">Pickney</option><option value="Flushing">Flushing</option><option value="Colon">Colon</option><option value="Climax">Climax</option><option value="Setagaya-Ku">Setagaya-Ku</option></select>';
            echo '<br><label>Message:</label><br><textarea name="message" rows="6" cols="38"></textarea><br><input type="submit" name="sub" value="Submit"></form>';
        }
        else {
            $connection = $GLOBALS['connection'];
            $sql = ("SELECT * FROM accounts WHERE ACCOUNT_ID = {$_SESSION['id']}");
            $result = $connection-> query($sql);
            if ($result-> num_rows > 0) {
                while ($row = $result-> fetch_assoc()) {
                    echo '<div class="widePad form-area"><form action="';
                    echo htmlspecialchars($_SERVER["PHP_SELF"]);
                    echo '" method="POST">';
                    echo '<h4>Personal Information<hr></h4><label>First Name:</label><input type="text" name="firstName" size="40" title="Enter your first name" autocomplete="given-name" value="'. $row["FIRST_NAME"] .'" required>';
                    echo '<br><label>Last Name:</label><input type="text" name="lastName" size="40" title="Enter your last name" autocomplete="family-name" value="'. $row["LAST_NAME"] .'" required>';
                    echo '<h4>Contact Information<hr></h4><label>Email Address:</label><input type="text" name="email" size="40" title="Enter your email address" autocomplete="email" value="'. $row["EMAIL"] .'" required>';
                    echo '<br><label>Phone Number:</label><input type="text" name="phoneNumber" size="40" title="Enter your phone number. Hint: 012-345-6789" pattern="^(\d{3}-)?\d{3}-\d{4}$" autocomplete="tel" value="'. $row["PHONE"] .'" required>';
                    echo '<h4>Contact<hr></h4><label>Reason:</label><select name="contactReason" title="Select a contact reason"><optgroup label="Inquiries"><option>Inquiry</option><option>Large Party Inquiry</option><option>Job Opportunites</option><option>Marketing Opportunites</option></optgroup>';
                    echo '<optgroup label="Messages"><option>Complaint</option><option>Feedback</option><option>Other</option></optgroup></select>';
                    echo '<br><label>Store Location:</label><select name="storeLocation" title="Select your preferred store location" required><option value="N/A">N/A</option><option value="Mount Pleasant">Mount Pleasant</option><option value="Ann Arbor">Ann Arbor</option><option value="Pickney">Pickney</option><option value="Flushing">Flushing</option><option value="Colon">Colon</option><option value="Climax">Climax</option><option value="Setagaya-Ku">Setagaya-Ku</option></select>';
                    echo '<br><label>Message:</label><br><textarea name="message" rows="6" cols="38"></textarea><br><input type="submit" name="sub" value="Submit"></form>';
                }
            }
        }
    }

    function processContact() {
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            // Define/Initialize variables
            $firstName = "";
            $lastName = "";
            $email = "";
            $phoneNumber = "";
            $phoneType = "";
            $store = "";
            $reason = "";
            $sentMessage = "";

            // Prepare an insert statement
            $connection = $GLOBALS['connection'];
            $sql = "INSERT INTO contact_messages ('fname', 'lname', 'email', 'ptype', 'pnum', 'reason', 'location', 'message') VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
            
            if($stmt = mysqli_prepare($connection, $sql)){
                mysqli_stmt_bind_param($stmt, "ssssssss", $firstName, $lastName, $email, $phoneNumber, $phoneType, $reason, $store, $sentMessage);
                
                // Attempt to execute the prepared statement
                if(mysqli_stmt_execute($stmt)){
                    // Redirect to login page
                    header("location: contactResponse.php");
                } else{
                    echo "Something went wrong. Please try again later.";
                }

                // Close statement
                mysqli_stmt_close($stmt);
            }

            // Close connection
            mysqli_close($GLOBALS['connection']);

            // Email
            $headers = "From: Lily's Lil Garage <lilyslilgarage@gmail.com> \r\n";
            $to = "E-mail address: $email\r\n";
            $subject = "Subject: $reason received\r\n";
            $message = "Dear $firstName $lastName:\n. Thank you for reaching out to us! Here's the message you sent us:\n\n$sentMessage\n\n We will be reaching back out to you shortly";
        
            if ( mail($to, $subject, $message, $headers) ) {
                echo 'Your contact information has been successfully uploaded!';
            }
            else {
                echo 'We aplogize, but your contact information could not be sent.';
            }

        }
    }
?>