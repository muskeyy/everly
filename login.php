<?php
$conn = new mysqli("localhost", "root", "root", "user_database");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['email'];
$password = $_POST['password'];

// Retrieve user from database
$sql = "SELECT * FROM users WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = mysqli_fetch_array($result);

    // Verify password
    if ($password==$row['password']) {
        echo "Login successful";
    } 
    else {
        echo "Invalid password";
    }
} 
else {
    echo "User not found";
}

$conn->close();
?>
