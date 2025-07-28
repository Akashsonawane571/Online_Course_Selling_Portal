<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
       body {
    font-family: Arial, sans-serif;
    background-image: url("img/coursebg.jpg"); /* Update the path to your image */
    background-size: cover;
    background-position: center;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}



        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 40px;
            max-width: 400px;
            width: 100%;
        }

        .container h2 {
            font-size: 24px;
            margin-bottom: 20px;
            text-align: center;
        }

        .container form label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        .container form input[type="text"],
        .container form input[type="number"],
        .container form textarea,
        .container form input[type="file"] {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-bottom: 15px;
        }

        .container form input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 12px 20px;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .container form input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .logout-form {
            text-align: center;
            margin-top: 20px;
        }

        .logout-btn {
            background-color: #f44336;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .logout-btn:hover {
            background-color: #d32f2f;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Add Course Information</h2>
        <form action="add_course.php" method="POST" enctype="multipart/form-data">
            <label for="course_name">Course Name:</label>
            <input type="text" name="course_name" id="course_name" required>
            <label for="what_will_learn">What Will You Learn:</label>
            <textarea name="what_will_learn" id="what_will_learn" rows="4" required></textarea>
            <label for="price">Price:</label>
            <input type="number" name="price" id="price" step="0.01" required>
            <label for="duration">Duration:</label>
            <input type="text" name="duration" id="duration" required>
            <label for="course_image">Course Image:</label>
            <input type="file" name="course_image" id="course_image" accept="image/*" required>
            <label for="video_link">YouTube Video Link:</label>
            <input type="text" name="video_link" id="video_link" required>
            <input type="submit" value="Add Course">
        </form>
        <div class="logout-form">
            <form action="logout.php" method="POST">
                <input type="submit" class="logout-btn" value="Back">
            </form>
        </div>
    </div>
</body>
</html>
