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
            echo "<a href='login.php' title='Click here to login'>Login</a> <a href='signup.php' title='Click here to sign up'>Sign Up</a>";
        }
        else {
            echo "<a href='account.php' title='View your account'>Account</a> <a href='Includes/logout.php' title='Click here to log out'>Log Out</a>";
        }
        echo '</div><div class="headOrder"><a href="#" title="Click here to make an online order" class="headButton">Order Online</a>';
        echo '</div></nav></header>';
    }

    function displayFooter(){
        echo '<footer><div><p class="logoSmall">Lily&#39;s Lil Garage</p>';
        echo '<nav><a href="index.php" title="Return to the homepage">Home</a><a href="locations.php" title="View our store locations">Locations</a>';
        echo '<a href="menu.php" title="Browse our menu">Menu</a><a href="contact.php" title="View our contact information">Contact</a></nav><p id="footCopy">Copyright &copy; 2021</p></div>';
        echo '<div><address><a class="noFloat" href="tel:555-555-5555" title="Call our phone number">555-555-5555</a><a class="noFloat" href="mailto:contact@llg.com" title="Send us an email">Contact@llg.com</a><p class="noMargin">2200 N Squirrel Rd Rochester MI</p></address></div>';
        echo '<div><p class="noMargin">Our Motto</p><p class="noMargin"><i>A great place to get great food!</i></p></div></footer>';
    }
?>