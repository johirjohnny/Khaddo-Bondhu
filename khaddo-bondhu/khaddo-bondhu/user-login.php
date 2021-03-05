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
	if(isset($_POST['login'])){
		$email = $_POST['email'];
		$pass  = $_POST['password'];

		$select_email = $connection->query("SELECT * FROM donor_info WHERE email = '$email'");

		if(mysqli_num_rows($select_email) == 1){

			 $select_pass= $connection->query("SELECT password  FROM donor_info WHERE email = '$email'  ");

			 $row = mysqli_fetch_assoc($select_pass);

			 if ($pass == $row['password']){
			 	$_SESSION['success'] = 'loggedin';
			 	header('location: blog.php');
			 }else{
			 	$pass_dnt_match = "Password does not match. Please try again.";
			 }
		}else{
			$email_dnt_match = "Email does not exist. Please try again.";
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
			<div class="middle-pos">
				<div class="login-header">
					<h2>Khaddho Bondhu</h2>
					<h1><span id="make-sml">an initiative to</span> <br><b>SAVE good FOOD</b></h1>
				</div>
				<h4 id="login-title">please login...</h4>
				<div class="login-form">
					<form action="" method="POST">
						<input name="email" type="email" placeholder="Email address" id="name">
						<input name="password" type="password" placeholder="Password" id="password">
						<input class="login-btn" type="submit" name="login" value="Login">
					</form>
					<p class="error"><?php if(isset($pass_dnt_match)) echo $pass_dnt_match; ?></p>
					<p class="error"><?php if(isset($email_dnt_match)) echo $email_dnt_match; ?></p>
				</div>
			</div>
			<footer class="footer-tag">
				<p>Human for Humanity</p>
			</footer>
		</div>
	</div>
	<script src="js/script.js"></script>
</body>
</html>