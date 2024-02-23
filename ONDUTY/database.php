<?php
$server = "localhost";      // MySQL server (usually "localhost")
$username = "root";         // MySQL username
$password = "2208Jsmj1223"; // MySQL password (set during installation)
$database = "onduty"; // Name of your MySQL database

// Create a connection
$conn = new mysqli($server, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



?>
