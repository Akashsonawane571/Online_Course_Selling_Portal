<?php
// Include your database connection here
$db = new mysqli('localhost', 'root', '', 'courses');
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

// Retrieve form data
$course_name = $_POST['course_name'];
$what_will_learn = $_POST['what_will_learn'];
$price = $_POST['price'];
$duration = $_POST['duration'];
$video_link = $_POST['video_link']; // Retrieve YouTube video link

// File upload handling
if (isset($_FILES['course_image']) && $_FILES['course_image']['error'] === UPLOAD_ERR_OK) {
    $file_name = $_FILES['course_image']['name'];  // Original file name
    $file_tmp = $_FILES['course_image']['tmp_name']; // Temporary file path

    // Specify your upload directory
    $upload_dir = 'uploads/';

    // Generate a unique file name to prevent overwriting existing files
    $file_destination = $upload_dir . uniqid() . '_' . $file_name;

    // Move the temporary uploaded file to the specified directory with the unique file name
    if (move_uploaded_file($file_tmp, $file_destination)) {
        // File upload successful, proceed with database insertion
        $query = "INSERT INTO courses (CourseName, WhatWillLearn, Price, Duration, CourseImage, VideoLink) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $db->prepare($query);

        // Bind parameters and specify types (s for string for all parameters)
        $stmt->bind_param("ssdsss", $course_name, $what_will_learn, $price, $duration, $file_destination, $video_link);

        if ($stmt->execute()) {
            // Course added successfully, redirect to index.html with success message
            $stmt->close();
            $db->close();
            header("Location: index.html?status=success&message=Course%20added%20successfully");
            exit;
        } else {
            echo "Error inserting course data into the database: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Error moving uploaded file to destination.";
    }
} else {
    echo "Error uploading file.";
}

$db->close();
?>
