<?php
    // This file handles logic for most website functionality

    // dbConfig include
    require_once 'Includes/dbConfig.php';

    function orderInfoPrompt() {
        if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
            echo "<p>enter your info</p>";
        }
        else {
            echo "<h3>Would you like to use the information linked with your account to place an order at your preferred location? <i>(". htmlspecialchars($_SESSION["storeLocation"]) .")</i></h3>";
            echo "<form action='". htmlspecialchars($_SERVER['PHP_SELF']) ."' method='post'>";
            echo "<input type='hidden' name='useStore' value='yes'><input type='submit' name='Submit' value='Yes, use the same information' title='Click here if you would like to use your stored information' class='fancyButton-1'></form>";
            echo "<form action='". htmlspecialchars($_SERVER['PHP_SELF']) ."' method='post'>";
            echo "<input type='hidden' name='useStore' value='no'><input type='submit' name='Submit' value='No, use different information' title='Click here if you would like to use differing information from that stored on your account' class='fancyButton-1'></form>";
        }
    }

    function orderInfoConfirm() {
        if($_SERVER["REQUEST_METHOD"] == "POST") {
    }

?>