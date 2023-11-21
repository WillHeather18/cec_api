<?php
// FILEPATH: /c:/xampp/htdocs/cec_api/connection.php

// Database configuration
$serverHost = "localhost";
$username = "root";
$password = "";
$database = "cec";

// Create a connection to the database
$conn = new mysqli($serverHost, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Perform database operations here



?>
