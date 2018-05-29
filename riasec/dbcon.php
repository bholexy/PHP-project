<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "riasec";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
$con_error = $conn->connect_error;

if ($con_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>
