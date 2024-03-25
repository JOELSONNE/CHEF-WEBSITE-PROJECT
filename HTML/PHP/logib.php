<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"]== "POST") {
    //Get input data
    $email = $_POST['email'];
    $password = $_POST ['password'];
    
    //check user credentials in the database
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = $conn ->query($sql);

    if($result -> num_row>0) {
        header("Location: dashboard.php");
    } else {
        echo "Invalid email or password";
    }
}
?>