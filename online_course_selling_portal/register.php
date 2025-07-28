<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Registration</title>
    <style>
    body {
        font-family: 'Arial', sans-serif;
        background-image: url('img/background-image.jpg');
        background-size: cover;
        background-position: center;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        color: #333;
    }

    .registration-form {
        max-width: 400px;
        background-color: rgba(255, 255, 255, 0.9);
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    h2 {
        margin-bottom: 20px;
        font-size: 24px;
    }

    form {
        display: flex;
        flex-direction: column;
    }

    label {
        font-weight: bold;
        margin-bottom: 8px;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
        margin-bottom: 20px;
        padding: 12px;
        border: 1px solid #ddd;
        border-radius: 6px;
        transition: border-color 0.3s ease;
    }

    input[type="text"]:focus,
    input[type="email"]:focus,
    input[type="password"]:focus {
        outline: none;
        border-color: #007bff;
    }

    button[type="submit"] {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 12px 24px;
        border-radius: 6px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    button[type="submit"]:hover {
        background-color: #0056b3;
    }
</style>

</head>
<body>
    <div class="registration-form">
        <h2>Course Registration</h2>
        <form action="registration.php" method="POST">
            <label for="fullname">Full Name</label>
            <input type="text" id="fullname" name="fullname" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
            <label for="phone">Phone Number</label>
            <input type="text" id="phone" name="phone" required>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <?php
            if (isset($_GET['course_id'])) {
                $course_id = $_GET['course_id'];
                // Hidden input field to store the course ID
                echo "<input type='hidden' name='course_id' value='$course_id'>";
            }
            ?>

            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>
