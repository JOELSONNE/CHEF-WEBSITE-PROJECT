<?php
// Database configuration
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$database = "your_database";

// create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error){
    die("Connection failed:". $conn->connect_error);
}

?>