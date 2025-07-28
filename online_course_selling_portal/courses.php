<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Courses</title>

	<!-- font Awesome CDN link -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

	<!-- External CSS -->
	<link rel="stylesheet" href="styl.css">
	<link rel="stylesheet" href="about.css">

	<!-- JQuery CDN link -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>
	<!-- Navigation start -->
	<nav>
		<img src="img/" class="logo" alt="">

		<div class="navigation">
			<ul>
			<li><a href="index.php" class="active">Home</a></li>
				<li><a href="courses.php">Courses</a></li>
				<li><a href="login.php">User Login</a></li>
				<li><a href="./admin/login.php">Admin Login</a></li>
				<li><a href="about.html">About Us</a></li>
				<li><a href="contact.html">Contact</a></li>
				
			</ul>

			<img src="img/menu.png" id="menu-btn" alt="">
		</div>
	</nav>
	<!-- Navigation ends -->


	<!-- Hero section starts from here -->
	<section id="about-home">
		<h2>
			Courses
		</h2>
	</section>
	<!-- Hero section ends from here -->

		<!-- Courses section starts from here -->
	<section id="course">
		<h1>Our Popular Courses</h1>
		<p>We help you to Design the World</p>


		<div class="course-box">

		<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "courses";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM courses";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $courseID = $row["CourseID"];
        $courseName = $row["CourseName"];
		$imageURL = $row["CourseImage"];
        $price = $row["Price"];

	?>

<div class="courses" onclick="window.location.href='<?php echo 'course-inner.php?course_id=' . $courseID; ?>'">
    
        <img src="<?php echo 'http://localhost/Online Course Selling Portal/admin/'.$imageURL?>" width="250">
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
        </div>
  <?php  }
} else {
    echo "0 results";
}

$conn->close();
?>
	
</div>
	</section>
			<!--<div onclick="window.location.href='course-inner.php?course_id=2'" class="courses">
		
				<img src="img/c1.jpg" alt="">
				<div class="details">
				
					<h6>Back End Development</h6>

					<div class="star">
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>

						<span>(239)</span>
					</div>
				</div>
				<div class="cost">Rs. 3,499</div>
			</div>

			<div onclick="window.location.href='course-inner.php?course_id=3'" class="courses">
				<img src="img/c5.jpg" alt="">
				<div class="details">
				
					<h6>Full Stack Development</h6>

					<div class="star">
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>

						<span>(239)</span>
					</div>
				</div>
				<div class="cost">Rs. 3,499</div>
			</div>

			<div onclick="window.location.href='course-inner.php?course_id=4'" class="courses">
				<img src="img/c15.jpg" alt="">
				<div class="details">
				
					<h6>Adobe Photoshop</h6>

					<div class="star">
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>

						<span>(239)</span>
					</div>
				</div>
				<div class="cost">Rs. 4,499</div>
			</div>

			<div onclick="window.location.href='course-inner.php?course_id=5'" class="courses">
				<img src="img/c14.jpg" alt="">
				<div class="details">
				
					<h6>UI/UX Designing</h6>

					<div class="star">
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>

						<span>(239)</span>
					</div>
				</div>
				<div class="cost">Rs. 4,499</div>
			</div>

			<div onclick="window.location.href='course-inner.php?course_id=6'" class="courses">
				<img src="img/c16.jpg" alt="">
				<div class="details">
				
					<h6>Logo Designing</h6>

					<div class="star">
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>

						<span>(239)</span>
					</div>
				</div>
				<div class="cost">Rs. 4,499</div>
			</div>

			<div onclick="window.location.href='course-inner.php?course_id=9'" class="courses">
				<img src="img/c3.jpg" alt="">
				<div class="details">
				
					<h6>Python Programming</h6>

					<div class="star">
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>

						<span>(239)</span>
					</div>
				</div>
				<div class="cost">Rs. 5,499</div>
			</div>

			<div onclick="window.location.href='Angular/angular.php'" class="courses">
				<img src="img/c6.jpg" alt="">
				<div class="details">
				
					<h6>Angular Freamework</h6>

					<div class="star">
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>

						<span>(239)</span>
					</div>
				</div>
				<div class="cost">Rs.5,499</div>
			</div>

		</div>
	</section>-->
	<!-- Courses section ends from here -->

	<script>
		// Show menu links on burger click
		$('#menu-btn').click(function(){
			$('nav .navigation ul').addClass('active')
		});

		// Hide navbar on click function
		$('#menu-close').click(function(){
			$('nav .navigation ul').removeClass('active')
		});
	</script>
</body>
</html>