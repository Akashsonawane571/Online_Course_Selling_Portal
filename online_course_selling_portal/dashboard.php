<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

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

// Get user's email
$user_email = $_SESSION['email'];

// Prepare SQL statement to fetch user's enrolled courses by email
$sql = "SELECT courses.CourseID, courses.CourseName, courses.WhatWillLearn, courses.VideoLink 
        FROM courses 
        INNER JOIN registrations ON courses.CourseID = registrations.course_id 
        WHERE registrations.email = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $user_email);
$stmt->execute();
$result = $stmt->get_result();

// Close the prepared statement
$stmt->close();

// Close connection
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f7f7f7;
            padding: 20px;
        }
        .welcome-msg {
            margin-bottom: 20px;
            padding: 10px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .courses-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }
        .course {
            width: 300px;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .course h4 {
            color: #333;
        }
        .course p {
            color: #666;
        }
        .logout-link {
            margin-top: 20px;
            display: block;
            text-decoration: none;
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }
        .logout-link:hover {
            background-color: #45a049;
        }
        .start-video-btn {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    </style>
</head>
<body>
    <div class="welcome-msg">
        <h2>Welcome, <?php echo htmlspecialchars($_SESSION['fullname']); ?>!</h2>
    </div>

    <div class="courses-container">
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<div class="course">';
                echo '<h4>' . htmlspecialchars($row['CourseName']) . '</h4>';
                echo '<p>' . htmlspecialchars($row['WhatWillLearn']) . '</p>';
                echo '<button class="start-video-btn" onclick="playVideo(\'' . htmlspecialchars($row['VideoLink']) . '\')">Start Video</button>';
                echo '</div>';
            }
        } else {
            echo '<p>No courses enrolled.</p>';
        }
        ?>
    </div>

    <a href="index.php" class="logout-link">Logout</a>

    <script>
        function playVideo(videoLink) {
            var videoId = videoLink.split('v=')[1];
            var embedUrl = 'https://www.youtube.com/embed/' + videoId;
            window.open(embedUrl);
        }
    </script></body>
</html>
