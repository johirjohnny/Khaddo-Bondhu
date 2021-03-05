<?php
	session_start();
	if(file_exists(dirname(__FILE__)."/functions.php")){
		require_once(dirname(__FILE__)."/functions.php");
	}
	if(user_loggedin()){ 
		header('location: blog.php');
		die();
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="body-main">
		<div class="container">
			<div class="middle-pos">
				<!---<div id="save-food-image">
					<div class="container">
						<img src="images/save-food.png" alt="Save Food">
					</div>
				</div>--->
				<div id="heading-area">
					<div class="container">
						<h2>Khaddho Bondhu</h2>
						<h1><span id="make-sml">an initiative to</span> <br><b>SAVE good FOOD</b></h1>
						<div id="heading-area-bottom">
							<h3>BE A PART OF OUR MISSION:</h3>
							<button id="signUp">SignUp</button>
							<p>already have an account? Please <a href="user-login.php" id="user-login">Login!</a></p>
						</div>
					</div>
				</div>
			</div>
			<div class="signUp-opt">
				<b>SignUp as a</b>
				<ul>
					<li><a href="volunteerSignUp.php">Volunteer</a></li>
					<li><a href="foodAgentSignUp.php">Food Agent</a></li>
					<li><a href="donorSignUp.php">Donor</a></li>
				</ul>
			</div>
			<footer class="footer-tag">
				<p>Human for Humanity</p>
			</footer>
		</div>
	</div>
	<script src="js/script.js"></script>
</body>
</html>