<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Online Education Platform</title>

	<!-- font Awesome CDN link -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

	<!-- External CSS -->
	<link rel="stylesheet" href="styl.css">

	<!-- JQuery CDN link -->
	
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
	<section id="home">
		<h2>
			Enhance Your Future With Miraculous Galaxy
		</h2>
		<p>
			All the skills you need in one place
From critical workplace skills to technical topics, our catalog supports well-rounded professional development.

		</p>
		<div class="btn">
			<a href="about.html" class="blue">Learn More</a>
			<a href="courses.php" class="yellow">Visit Courses</a>
		</div>
	</section>
	<!-- Hero section ends from here -->


	<!-- Features section starts from here -->
	<section id="features">
		<h1>Awesome Features</h1>
		<p>Enhace Your Skills With Us, We Are Ready to Help You 24*7</p>

		<div class="fea-base">
			<div class="fea-box">
				<i class="fas fa-graduation-cap"></i>
				<h3>Scholorship Facility</h3>
				<p>
					One make creepeth, man bearing theira firmament won't great heaven
				</p>
			</div>

			<div class="fea-box">
				<i class="fa-solid fa-book-bookmark"></i>
				<h3>Dell Online Course</h3>
				<p>
					One make creepeth, man bearing theira firmament won't great heaven
				</p>
			</div>

			<div class="fea-box">
				<i class="fas fa-award"></i>
				<h3>Global Certification</h3>
				<p>
					One make creepeth, man bearing theira firmament won't great heaven
				</p>
			</div>
		</div>
	</section>
	<!-- Features section ends from here -->


	<!-- Courses section starts from here -->
	<section id="course">
		<h1>Our Popular Courses</h1>
		<p></p>

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
		
			<!-- <div onclick="window.location.href='BACK END/details.php'" class="courses">

				<img src="img/c1.jpg" alt="">
				<div class="details">
			
					<h6>Back End Developmenmt Course</h6>

					<div class="star">
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>

						<span>(239)</span>
					</div>
				</div>
				<div class="cost">Rs.3499</div>
			</div>

			<div onclick="window.location.href='DEVELOPMENT/details.php'" class="courses">
				<img src="img/c5.jpg" alt="">
				<div class="details">
					
					<h6>Full Stack Development Course</h6>

					<div class="star">
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>

						<span>(239)</span>
					</div>
				</div>
				<div class="cost">Rs.3499</div>
			</div>

			<div onclick="window.location.href='Adobe/adobeinfo.php'" class="courses">
				<img src="img/c15.jpg" alt="">
				<div class="details">
					<h6>Adobe Photoshop Course</h6>

					<div class="star">
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>

						<span>(239)</span>
					</div>
				</div>
				<div class="cost">Rs.4499</div>
			</div>

			<div onclick="window.location.href='UI_UX/adobeinfo.php'" class="courses">
				<img src="img/c14.jpg" alt="">
				<div class="details">
					<h6>UI/UX Designing Course</h6>

					<div class="star">
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>

						<span>(239)</span>
					</div>
				</div>
				<div class="cost">Rs4499</div>
			</div>

			<div onclick="window.location.href='logo designing/adobeinfo.php'" class="courses">
				<img src="img/c16.jpg" alt="">
				<div class="details">
				
					<h6>Logo Designing Course</h6>

					<div class="star">
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>
						<i class="fa-solid fa-star"></i>

						<span>(239)</span>
					</div>
				</div>
				<div class="cost">Rs.4499</div>
			</div> -->
		</div>
	</section>
	<!-- Courses section ends from here -->

<!-- Registration section starts from here 
<section id="registration">
	<div class="reminder">
		<p>Get 100 Online Courses for Free</p>
		<h1>Registration To Get It</h1>

		<div class="time">
			<div class="date">18 <br> Days</div>
			<div class="date">23 <br> Hours</div>
			<div class="date">06 <br> Minutes</div>
			<div class="date">58 <br> Seconds</div>
		</div>
	</div>

	<div class="form">
		<h3>Create Free Account NOW!</h3>

		<input type="text" placeholder="Name" name="" id="">
		<input type="email" placeholder="Email ID" name="" id="">
		<input type="text" placeholder="Contact Number" name="" id="">

		<div class="btn">
			<a href="#" class="yellow">Submit Form</a>
		</div>
	</div>
</section>-->
<!-- Registration section ends from here -->


	
	<!-- Experts section starts from here -->
	<section id="experts">
		<h1>Community Experts</h1>
		<p></p>
		<div class="expert-box">
			<div class="profile">
				<img src="img/pro1.jpg" alt="">
				<h6>Chetan Suryawanshi</h6>
				<p>Full Stack Developer</p>
				<div class="pro-links">
					<i class="fab fa-whatsapp"></i>
					<i class="fab fa-instagram"></i>
					<i class="fab fa-linkedin"></i>
				</div>
			</div>

			<div class="profile">
				<img src="img/pro2.jpg" alt="">
				<h6>Akash Sonawane</h6>
				<p>UI Design Expert</p>
				<div class="pro-links">
					<i class="fab fa-whatsapp"></i>
					<i class="fab fa-instagram"></i>
					<i class="fab fa-linkedin-in"></i>
				</div>
			</div>

			<div class="profile">
				<img src="img/pro3.jpg" alt="">
				<h6>Vivek Borse</h6>
				<p>Marketing Expert</p>
				<div class="pro-links">
					<i class="fab fa-whatsapp"></i>
					<i class="fab fa-instagram"></i>
					<i class="fab fa-linkedin-in"></i>
				</div>
			</div>

			<div class="profile">
				<img src="img/pro4.jpg" alt="">
				<h6>Vishal Shirsath</h6>
				<p>Logo Design Expert</p>
				<div class="pro-links">
					<i class="fab fa-whatsapp"></i>
					<i class="fab fa-instagram"></i>
					<i class="fab fa-linkedin-in"></i>
				</div>
			</div>
		</div>
	</section>
	<!-- Experts section ends from here -->

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