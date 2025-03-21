<?php

global $firstname;
global $lastname;
global $email;
global $password;

$conn = new mysqli("localhost", "root", "root", "user_database");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];



$sql = "INSERT INTO users (firstname, lastname, email, password) VALUES ('$firstname','$lastname', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>