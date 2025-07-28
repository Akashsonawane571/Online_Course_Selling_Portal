<?php
session_start();

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "courses";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process login form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate email and password
    $sql = "SELECT r.*, c.CourseName, c.WhatWillLearn FROM registrations r INNER JOIN courses c ON r.course_id = c.CourseID WHERE r.email = ?";


    // Prepare the SQL statement
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // User found, verify password (you can remove password verification if not needed here)
        $row = $result->fetch_assoc();

        // Assuming password verification is removed for this part
        // Set session variables
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['fullname'] = $row['fullname'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['phone_number'] = $row['phone_number'];
        
        // Fetch all courses associated with the user's email
        $courses = [];
        while ($row = $result->fetch_assoc()) {
            $courses[] = [
                'course_id' => $row['course_id'],
                'course_name' => $row['course_name'],
                'course_description' => $row['course_description']
            ];
        }

        $_SESSION['courses'] = $courses;

        // Redirect to dashboard or course listing page
        header("Location: dashboard.php");
        exit();
    } else {
        // User not found
        echo "User not found.";
    }

    // Close statement and connection
    $stmt->close();
}

$conn->close();
?>
