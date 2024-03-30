<?php
// Database configuration
$serverName = "localhost";
$dBUsername= "root";
$dBPassword = "";
$dBName = "user";

// create connection
$conn =mysqli_connect($serverName ,$dBUsername, $dBPassword, $dBPassword);

// Check connection
if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}
