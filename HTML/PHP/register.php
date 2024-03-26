<?php
include 'conncection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST['email'];
    $username = $_POST['Username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (email, username, password) VALUES ('$email', '$username', '$password')";

    if ($conn->quenry($sql) ===TRUE){

        header("Location: login.php");
    } else {
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
    
}