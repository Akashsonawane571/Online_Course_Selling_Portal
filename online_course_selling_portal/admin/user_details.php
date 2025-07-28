<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Courses</title>
    <style>
       body {
            font-family: Arial, sans-serif;
            background-image: url("img/coursebg.jpg"); /* Update the path to your image */
            background-size: cover;
            background-position: center;
            background-color: #f4f4f4; /* Fallback color */
            padding: 20px; /* Added padding */
            margin: 0;
            display: flex;
            flex-direction: column; /* Added */
            align-items: center;
            min-height: 100vh;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
        }
        table th, table td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
        table th {
            background-color: #f2f2f2;
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
    <h1>Admin Panel - Users</h1>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Date</th>
            
        </tr>
        <?php
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

        $sql = "SELECT id,fullname,email,registration_date FROM registrations";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['fullname']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['registration_date']}</td>
                    </tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No User</td></tr>";
        }
        $conn->close();
        ?>
    </table>
    <div class="logout-form">
            <form action="logout.php" method="POST">
                <input type="submit" class="logout-btn" value="back">
            </form>
        </div>
</body>
</html>
