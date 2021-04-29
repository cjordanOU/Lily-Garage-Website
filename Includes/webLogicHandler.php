<?php
    // This file handles logic for most website functionality

    // dbConfig include
    require_once 'Includes/dbConfig.php';

    // ----------- Functions -----------
    
    // Basic Login Check
    function loginCheckBasic() {
        // Initialize the session
        //session_start();
 
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
    
    function displayHeader() {
        echo '<header><nav class="container"><div class="nav-left"><a href="index.php" class="logo" title="Return to the homepage">Lily&#39;s Lil Garage</a><a href="locations.php" title="View our store locations">Locations</a><a href="menu.php" title="Browse our menu">Menu</a><a href="contact.php" title="View our contact information">Contact</a><a href="about.php" title="View information about our organization">About</a></div>';
        echo '<div class="nav-right">';
        // If user isn't logged in, will show login page
        loginCheckBasic();
        if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
            echo "<a href='login.php' title='Click here to login'>Login</a> <a href='signup.php' title='Click here to sign up'>Sign Up</a>";
        }
        else {
            echo "<a href='account.php' title='View your account'>View Account</a> <a href='Includes/logout.php' title='Click here to log out'>Log Out</a>";
        }
        echo '</div></nav></header>';
    }
?>