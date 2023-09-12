<?php
$servername = "localhost";  // Replace with your server name
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "blog";   // Replace with your database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//mysqli_connect($servername, $username, $password, $dbname);
// echo "Connected successfully";
?>