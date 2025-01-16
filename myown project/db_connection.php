<?php
$host = 'localhost'; // Database host
$user = 'root';      // Database username
$password = '';      // Database password
$database = 'task_manager'; // Database name

// Establishing a connection
$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
?>
