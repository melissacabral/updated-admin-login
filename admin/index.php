<?php 
session_start();
require('../db-connect.php');

//run the security check - if it fails, send them back to login
check_login_key( '../login.php');
 ?>
<!doctype html>
<html>
<head>
	<title>Admin Panel</title>
	<link rel="stylesheet" type="text/css" href="css/admin-style.css">
</head>
<body>
	<header>
		<h1>Blog Admin Panel</h1>
		<nav>
			<ul>
				<li><a href="#">Dashboard</a></li>
				<li><a href="#">Write Post</a></li>
				<li><a href="#">Manage Posts</a></li>
				<li><a href="#">Manage Comments</a></li>
				<li><a href="#">Edit Profile</a></li>
			</ul>
		</nav>
		<ul class="utilities">
			<li><a href="../login.php?logout=true" class="warn">Log Out!</a></li>
		</ul>
	</header>

	<main>
		<h2>USERNAME's Dashboard</h2>
		<section class="onehalf panel">
			<h2>Your Content:</h2>
			<ul>
				<li>You have written XX published posts</li>
				<li>You have written XX Post Drafts</li>
				<li>Latest Draft: POST TITLE</li>
			</ul>
			
		</section>
		<section class="onehalf panel">
			<h2>Most Popular:</h2>
			<ul>
				<li>POST TITLE with XX comments</li>
				<li>POST TITLE with XX comments</li>
				<li>POST TITLE with XX comments</li>
			</ul>
		</section>

	</main>

	<footer>
		&copy; 2015 Your Name Here!
	</footer>
</body>
</html>