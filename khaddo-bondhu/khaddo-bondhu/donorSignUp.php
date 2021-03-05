<?php
	session_start();
	if(file_exists(dirname(__FILE__)."/config.php")){
		require_once(dirname(__FILE__)."/config.php");
	}
	if(file_exists(dirname(__FILE__)."/functions.php")){
		require_once(dirname(__FILE__)."/functions.php");
	}
	if(user_loggedin()){
		header('location: blog.php');
		die();
	}
	

	if (isset($_POST['dsubmit'])){

		$dName = $_POST['dname'];
		$dEmail = $_POST['demail'];
		$dPassword = $_POST['dpassword'];
		$dPhone = $_POST['dphone'];
		$dAddress = $_POST['daddress'];

		$rgd_email = $connection->query(" SELECT * FROM donor_info WHERE email ='$dEmail' ");
		
		if (mysqli_num_rows($rgd_email) == 1){
			$email_exists = "email already exists";
		}else{
			$connection->query("INSERT INTO donor_info (name, email, password, phone, address) VALUES('$dName', '$dEmail', '$dPassword', '$dPhone', '$dAddress')");
			header('location: user-login.php');
		}

		

		
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
			<div class="middle-pos sign-up-area">
				<div class="login-header">
					<h2>Khadho Bondhu</h2>
					<h1><span id="make-sml">an initiative to</span> <br><b>SAVE good FOOD</b></h1>
				</div>
				<h4 id="login-title">please signup...</h4>
			<div class="signup-form login-form">

				<form action=""  method="POST">
					<input name="dname" type="text" placeholder="Your Name" id="dName" required="required">
					<input name="demail" type="email" placeholder="Email Address" id="dEmail" required="required">
					<input name="dpassword" type="password" placeholder="Password" id="dPassword" required="required">
					<input name="dphone" type="tel" placeholder="Phone" id="dPhone" required="required">
					<textarea name="daddress" placeholder="type your address...." id="dAddress" cols="30" rows="10" required="required"></textarea>
					<input  name="dsubmit" type="submit" value="Sign Up" class="signup" id="dSubmit">
				</form>
				<p class="error"><?php if(isset($email_exists)){echo $email_exists;} ?></p>

			</div>
	<footer class="footer-tag">
		<p>Human for Humanity</p>
	</footer>
	<script src="js/script.js"></script>
</body>
</html>