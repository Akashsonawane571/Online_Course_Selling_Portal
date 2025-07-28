<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "courses";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];


$sql = "SELECT * FROM admins WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
  
    session_start();
    $_SESSION['username'] = $username;
  
    header("Location: index.html");
} else {
    header("Location: login.php");
}

$conn->close();
?>
