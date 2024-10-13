<?php
$servername = "localhost";
$username = "root"; 
$password = "";     
$dbname = "prakweb_2024_x_223040157";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
