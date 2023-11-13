<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "resturent";

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//echo "Connected successfully";

// Perform database operations here

// Close the connection when you are done
$conn->close();







?>
