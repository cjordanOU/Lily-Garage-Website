<?php
// Specifies location of database and database name
// The location needs to be changed when hosted online
$dbLocation = 'localhost:3306';
$dbName = 'resolution-holdings';

// Database username and password
// This needs to be changed when hosted online
$dbUsername = 'root';
$dbPassword = '';

// Database credentials submitted
$connection = mysqli_connect("$dbLocation", "$dbUsername", "$dbPassword", "$dbName");

// Connection Check
if ($connection-> connect_error) {
    die("ERROR: Connection to database failed. ". $connection-> connect_error);
}

?>