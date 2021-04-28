<?php
    /* This script destroys the session, logging the user out and returning them to the homepage */
    session_start();          // Initialize the session
    $_SESSION = array();      // Clear all session variables
    session_destroy();        // Destroy the current session

    // Returns to the homepage
    header("location: ../index.php");
    exit;
?>