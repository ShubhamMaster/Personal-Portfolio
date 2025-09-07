<?php
$servername = "localhost";  // Change if using a remote server
$username = "root";  // Update with your database username
$password = "";  // Update with your database password
$database = "";  // Replace with your actual database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
