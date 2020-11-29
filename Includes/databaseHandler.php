<?php

// Specifies location of database and database name
// This name needs to be changed when hosted online
$dbLocation = 'localhost:3306';
$dbName = 'llg';

// Database username and password
$dbUsername = 'root';
$dbPassword = '';


// Database connection
$conn = mysqli_connect("$dbLocation", "$dbUsername", "$dbPassword", "$dbName");
if ($conn-> connect_error) {
    die("Connection failed: ". $conn-> connect_error);
}



// Count menu items
/*
function countMenuItems() {
    global $db;
    $query = 'SELECT COUNT(*) FROM menu_items';
    $statement = $db->prepare($query);
    $statement->execute();
    $result = $statement->fetch();
    $count = $result[0];
    return count;
}*/

?>