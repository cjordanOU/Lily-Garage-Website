<?php

// Specifies location of database and database name
// This name needs to be changed when hosted online
$dbServerName = 'mysql:host=localhost:3306;dbname=llg';

// Database username and password
$dbUsername = 'root';
$dbPassword = '';


// Database login
try {
    $db = new PDO($dbServerName, $dbUsername, $dbPassword);
}
catch (PDOexception $e) {
    $error_message = $e->getMessage();
    header('Location: index.php?action=error&message=$error_message');
}

// Count menu items
function countMenuItems() {
    global $db;
    $query = 'SELECT COUNT(*) FROM users';
    $statement = $db->prepare($query);
    $statement->execute();
    $result = $statement->fetch();
    $count = $result[0];
    return count;
}

?>