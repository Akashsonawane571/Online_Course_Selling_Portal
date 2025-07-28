<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone_number = $_POST['phone_number'];
    $course_id = $_POST['course_id'];

    // Validate form data
    if (empty($fullname) || empty($email) || empty($password) || empty($phone_number) || empty($course_id)) {
        die("Please fill all the fields.");
    }

    // Connect to the database
    $conn = new mysqli("localhost", "root", "", "courses");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert user data into 'registrations' table
    $sql = "INSERT INTO registrations (fullname, email, password, phone_number, course_id) 
            VALUES ('$fullname', '$email', '$password', '$phone_number', '$course_id')";

    if ($conn->query($sql) === TRUE) {
        // Redirect after successful registration
        header("Location: courses.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close(); // Close database connection
} else {
    die("Invalid request."); // Handle invalid form submission
}
