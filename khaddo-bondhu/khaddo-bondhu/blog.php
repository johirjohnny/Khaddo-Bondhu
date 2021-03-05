<?php
	session_start();
	if(file_exists(dirname(__FILE__)."/functions.php")){
		require_once(dirname(__FILE__)."/functions.php");
	}

	if(!user_loggedin()){
		header('location: user-login.php');
		die();
	}



?>  


<!DOCTYPE html>  
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Blog</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<!---Header Area starts here---->
	<header class="header-area">
		<div class="container">
			<div class="logo-area">
				<!--<img src="images/logo.png" alt="Khaddho Bondhu">--->
				<h3>Khaddho Bondhu</h3>
				<p><span>an initiative to</span> <b>SAVE good FOOD</b></p>
			</div>
			<div class="menu-area">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="team.php">Team</a></li>
					<li><a href="gallery.php">Gallery</a></li>
					<li><a href="blog.php">Blog</a></li>
					<li><a href="contact.php">Contact</a></li>
				</ul>
			</div>
			<div class="signup-login">
				<ul>
					<li><a href="index.php">SignUp</a></li>
					<li><a href="index.php">LogIn</a></li>
				</ul>
			</div>
		</div>
	</header>
	<!----Main body area starts here----->
	<div class="main-body">
		<div class="container">
			<div class="blog-item">
				<div class="container">
					<a href="#"><img src="images/restaurant-1.jpg" alt=""></a>
					<h3><a href="#">Blog header goes here</a></h3>
					<p>Lorem ipsam dolor tepsima porihat ipsam dolor tepsima porihatipsam dolor tepsima porihatipsam dolor tepsima porihatipsam dolor tepsima porihatipsam dolor tepsima porihat. </p>
					<div class="post-metas">
						<span>Category</span>
						<span>By Author</span>
						<span>Comments</span>
						<span>Mar 15, 2018</span>
					</div>
				</div>
			</div>
			<div class="blog-item">
				<div class="container">
					<a href="#"><img src="images/restaurant-2.jpg" alt=""></a>
					<h3><a href="#">Blog header goes here</a></h3>
					<p>Lorem ipsam dolor tepsima porihat ipsam dolor tepsima porihatipsam dolor tepsima porihatipsam dolor tepsima porihatipsam dolor tepsima porihatipsam dolor tepsima porihat. </p>
					<div class="post-metas">
						<span>Category</span>
						<span>By Author</span>
						<span>Comments</span>
						<span>Mar 15, 2018</span>
					</div>
				</div>
			</div>
			<div class="blog-item">
				<div class="container">
					<a href="#"><img src="images/restaurant-3.jpg" alt=""></a>
					<h3><a href="#">Blog header goes here</a></h3>
					<p>Lorem ipsam dolor tepsima porihat ipsam dolor tepsima porihatipsam dolor tepsima porihatipsam dolor tepsima porihatipsam dolor tepsima porihatipsam dolor tepsima porihat. </p>
					<div class="post-metas">
						<span>Category</span>
						<span>By Author</span>
						<span>Comments</span>
						<span>Mar 15, 2018</span>
					</div>
				</div>
			</div>
			<div class="blog-item">
				<div class="container">
					<a href="#"><img src="images/restaurant-4.jpg" alt=""></a>
					<h3><a href="#">Blog header goes here</a></h3>
					<p>Lorem ipsam dolor tepsima porihat ipsam dolor tepsima porihatipsam dolor tepsima porihatipsam dolor tepsima porihatipsam dolor tepsima porihatipsam dolor tepsima porihat. </p>
					<div class="post-metas">
						<span>Category</span>
						<span>By Author</span>
						<span>Comments</span>
						<span>Mar 15, 2018</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-----Right sidebar area starts here-------->
	<div class="right-sidebar">
		<div class="container">
			<div class="search-bar ">
				<input id="search-bar" type="text" placeholder="search here...">
			</div>
			<div class="popular-posts sidebar-item">
				<h2 class="sidebar-item-title" >Popular Posts</h2>
				<hr class="sdbar-title-hr">
				<ul>
					<li>
						<figure><a href="#"><img src="images/blog-icon-1.png" alt=""></a></figure>
						<div class="item-post-content">
							<h3><a href="#">post title goes here</a></h3>
							<div class="item-post-date">
								<p>oct 16, 2018</p>
							</div>
						</div>
					</li>
					<li>
						<figure><a href="#"><img src="images/blog-icon-1.png" alt=""></a></figure>
						<div class="item-post-content">
							<h3><a href="#">post title goes here</a></h3>
							<div class="item-post-date">
								<p>oct 16, 2018</p>
							</div>
						</div>
					</li>
					<li>
						<figure><a href="#"><img src="images/blog-icon-1.png" alt=""></a></figure>
						<div class="item-post-content">
							<h3><a href="#">post title goes here</a></h3>
							<div class="item-post-date">
								<p>oct 16, 2018</p>
							</div>
						</div>
					</li>
					<li>
						<figure><a href="#"><img src="images/blog-icon-1.png" alt=""></a></figure>
						<div class="item-post-content">
							<h3><a href="#">post title goes here</a></h3>
							<div class="item-post-date">
								<p>oct 16, 2018</p>
							</div>
						</div>
					</li>
					<li>
						<figure><a href="#"><img src="images/blog-icon-1.png" alt=""></a></figure>
						<div class="item-post-content">
							<h3><a href="#">post title goes here</a></h3>
							<div class="item-post-date">
								<p>oct 16, 2018</p>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="recent-posts sidebar-item">
				<h2 class="sidebar-item-title">Recent Posts</h2>
				<hr class="sdbar-title-hr">
				<ul>
					<li>
						<figure><a href="#"><img src="images/blog-icon-1.png" alt=""></a></figure>
						<div class="item-post-content">
							<h3><a href="#">post title goes here</a></h3>
							<div class="item-post-date">
								<p>oct 16, 2018</p>
							</div>
						</div>
					</li>
					<li>
						<figure><a href="#"><img src="images/blog-icon-1.png" alt=""></a></figure>
						<div class="item-post-content">
							<h3><a href="#">post title goes here</a></h3>
							<div class="item-post-date">
								<p>oct 16, 2018</p>
							</div>
						</div>
					</li>
					<li>
						<figure><a href="#"><img src="images/blog-icon-1.png" alt=""></a></figure>
						<div class="item-post-content">
							<h3><a href="#">post title goes here</a></h3>
							<div class="item-post-date">
								<p>oct 16, 2018</p>
							</div>
						</div>
					</li>
					<li>
						<figure><a href="#"><img src="images/blog-icon-1.png" alt=""></a></figure>
						<div class="item-post-content">
							<h3><a href="#">post title goes here</a></h3>
							<div class="item-post-date">
								<p>oct 16, 2018</p>
							</div>
						</div>
					</li>
					<li>
						<figure><a href="#"><img src="images/blog-icon-1.png" alt=""></a></figure>
						<div class="item-post-content">
							<h3><a href="#">post title goes here</a></h3>
							<div class="item-post-date">
								<p>oct 16, 2018</p>
							</div>
						</div>
					</li>
					
				</ul>
			</div>
			<div class="social-links sidebar-item">
				<ul>
					<li><a href="#"></a></li>
				</ul>
			</div>
		</div>
	</div>
	<footer class="footer-area">
		<div class="container">
			<div class="footer-top">
				<div class="container">
					<div class="footer-item">
						<h3>Khaddho Bondhu</h3>
						<p>Lorem ipsem dolar imetipsem dolar ipsem doral imet.</p>
						<div class="social-links">
							<ul>
								<li><a href="facebook.com">ifb</a></li>
								<li><a href="tweeter.com">itw</a></li>
							</ul>
						</div>
					</div>
					<div class="footer-item">
						<h3>Information</h3>
						<ul>
							<li><a href="about.php">Services</a></li>
							<li><a href="about.php">Team Members</a></li>
							<li><a href="index.php">Become a Member</a></li>
							<li><a href="tweeter.com">Privacy and Policy</a></li>
						</ul>
					</div>
					<div class="footer-item">
						<h3>Importent Links</h3>
						<ul>
							<li><a href="facebook.com">Post title</a></li>
							<li><a href="tweeter.com">Post title goes </a></li>
							<li><a href="tweeter.com">Post title goes here</a></li>
						</ul>
					</div>
					<div class="footer-item">
						<h3>Have a quiestions?</h3>
						<ul>
							<li>
								<span class="icon">i</span>
								<span class="info">203 Fake St. Mountain View, San Francisco, California, USA</span>
							</li>
							<li>
								<span class="icon">i</span>
								<span class="info">+2 392 3929 210</span>
							</li>
							<li>
								<span class="icon">i</span>
								<span class="info">info@ourdomain.com</span>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="footer-copyright">
				<p>Copyright &copy; 2018 | All Rights Reserved By <a href="#">Khaddho Bondhu</a> </p>
			</div>
			
			<div class="menu-area footer-menu">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="gallery.php">Gallery</a></li>
					<li><a href="contact.php">Contact</a></li>
				</ul>
			</div>
		</div>
	</footer>
	
</body>
</html>