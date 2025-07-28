<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Details</title>
    <!-- Include CSS stylesheets and other necessary resources here -->
    <link rel="stylesheet" href="styl.css">
    <link rel="stylesheet" href="about.css">
    <link rel="stylesheet" href="course-inner.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>
    <!-- Navigation start -->
    <nav>
        <img src="img/" class="logo" alt="">
        <div class="navigation">
            <ul>
            <i id="menu-close" class="fas fa-times"></i>
				<li><a href="index.php" class="active">Home</a></li>
				<li><a href="courses.php">Courses</a></li>
				
				<li><a href="about.html">About Us</a></li>
				<li><a href="login.php">user login</a></li>
                
				<li><a href="contact.html">Contact</a></li>
				<li><a href="./admin/login.php">Admin Login</a></li>
            </ul>
            <img src="img/menu.png" id="menu-btn" alt="">
        </div>
    </nav>
    <!-- Navigation ends -->

    <!-- Course details section starts -->
    <section id="course-inner">
        <div class="overview">
            <?php
            // Connect to the database
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "courses";

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            if (isset($_GET['course_id'])) {
                $courseID = $_GET['course_id'];
                $sql = "SELECT * FROM courses WHERE CourseID = $courseID";
                $result = $conn->query($sql);
            }
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $courseID = $row["CourseID"];
                        $courseName = $row["CourseName"];
                        $imageURL = $row["CourseImage"];
                        $price = $row["Price"];
                        $detail = $row["WhatWillLearn"];
                
                    ?>
        
        <img src="<?php echo 'http://localhost/CourseManagment/admin/'.$imageURL?>" width="600">
        <div class="details">
        <h6><?php echo $courseName ?></h6>
        <div class="star">
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
      <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <span>(239)</span>
        </div>
        </div>
        <div class="cost"><?php echo $price ?></div>
        <div class="detail"><?php echo $detail ?></div>
        </div>
  <?php  }
} else {
    echo "0 results";
}

$conn->close();
?>
            
        </div>
            <div class="enroll" style="max-width: 400px; background-color: rgba(255, 255, 255, 0.9); padding: 30px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); text-align: center;">
                <!-- Enrollment form -->
                <form action="registration.php" method="POST">
                    <input type="hidden" name="course_id" value="<?php echo $courseID; ?>">
                    
                    <label for="fullname" style="font-weight: bold; margin-bottom: 8px;">Full Name</label>
                    <input type="text" id="fullname" name="fullname" required style="margin-bottom: 20px; padding: 12px; border: 1px solid #ddd; border-radius: 6px; transition: border-color 0.3s ease; width: 100%; box-sizing: border-box;">
                    
                    <label for="email" style="font-weight: bold; margin-bottom: 8px;">Email</label>
                    <input type="email" id="email" name="email" required style="margin-bottom: 20px; padding: 12px; border: 1px solid #ddd; border-radius: 6px; transition: border-color 0.3s ease; width: 100%; box-sizing: border-box;">
                    <label for="phone" style="font-weight: bold; margin-bottom: 8px;">Phone Number</label>
                    <input type="text" id="phone" name="phone_number" required style="margin-bottom: 20px; padding: 12px; border: 1px solid #ddd; border-radius: 6px; transition: border-color 0.3s ease; width: 100%; box-sizing: border-box;">
                    

                    <label for="password" style="font-weight: bold; margin-bottom: 8px;">Password</label>
                    <input type="password" id="password" name="password" required style="margin-bottom: 20px; padding: 12px; border: 1px solid #ddd; border-radius: 6px; transition: border-color 0.3s ease; width: 100%; box-sizing: border-box;">
                    
                    
                    <button type="submit" style="background-color: #007bff; color: #fff; border: none; padding: 12px 24px; border-radius: 6px; cursor: pointer; transition: background-color 0.3s ease; width: 100%; box-sizing: border-box;">Enroll Course</button>
                </form>
            </div>
    </section>
    <!-- Course details section ends -->

    <!-- Footer section starts -->
    <footer>
        <div class="footer-col">
            <h3>Top Products</h3>
            <ul>
                <li>Manage Reputation</li>
                <li>Power Tools</li>
                <li>Managed Website</li>
                <li>Marketing Service</li>
            </ul>
        </div>

        <div class="footer-col">
            <h3>Power Tools</h3>
            <ul>
                <li>Jobs</li>
                <li>Marketing Service</li>
                <li>Top Products</li>
                <li>Manage Reputation</li>
            </ul>
        </div>

        <div class="footer-col">
            <h3>Guides</h3>
            <ul>
                <li>Research</li>
                <li>Experts</li>
                <li>Managed Website</li>
                <li>Marketing Service</li>
            </ul>
        </div>

        <div class="footer-col">
            <h3>Newsletter</h3>
            <p>You can trust us. We only send promo offers.</p>
            <div class="subscribe">
                <input type="email" placeholder="Your email Address">
                <a href="#" class="yellow">SUBSCRIBE</a>
            </div>
        </div>

        <div class="copyright">
            <p>
                Copyright @ 2024 All rights reserved | This template is made by <a href="https://atulcodex.com" target="_blank">atulcodex</a>
            </p>
            <div class="pro-links">
                <i class="fab fa-facebook"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-linkedin-in"></i>
            </div>
        </div>
    </footer>
    <!-- Footer section ends -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $('#menu-btn').click(function(){
            $('nav .navigation ul').addClass('active');
        });

        $('#menu-close').click(function(){
            $('nav .navigation ul').removeClass('active');
        });
    </script>
</body>
</html>
