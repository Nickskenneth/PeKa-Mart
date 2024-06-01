<?php

$db_name = "mysql:host=localhost;dbname=shop_db";
$username = "root";
$password = "";

try {
    $conn = new PDO($db_name, $username, $password);
    // Other PDO settings and configurations
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    die(); // Stop execution if the connection fails
}

?>