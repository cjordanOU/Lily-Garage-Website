<?php
// Created by Cameron Jordan 2020

// Specifies location of database and database name
// The location needs to be changed when hosted online
$dbLocation = 'localhost:3306';
$dbName = 'llg';

// Database username and password
// This needs to be changed when hosted online
$dbUsername = 'root';
$dbPassword = '';

// Database connection
$conn = mysqli_connect("$dbLocation", "$dbUsername", "$dbPassword", "$dbName");
if ($conn-> connect_error) {
    die("Connection failed: ". $conn-> connect_error);
}

?>