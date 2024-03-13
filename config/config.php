<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "telecome(2)"; // Updated database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>