<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>AdenFlorian's Blog</title>
		<link rel="icon" type="image/png" href="img/favicon_panda.png">
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,900,500,300' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=VT323' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.1.0.min.js"></script>
		<script src="js/jquery.ba-hashchange.min.js"></script>
		<script src="js/adenflorian.js"></script>
	</head>
	<body>
		<div id="left">
			<div style="float: right;">
				<div id="header">AdenFlorian</div>
				<nav>
					<p><a href="#home">Portfolio</a></p>
					<p><a href="#contact">Contact</a></p>
				</nav>
			</div>
		</div>
		<div id="page">
			<?php
			require 'home.php';
			require 'contact.php';
			?>
		</div>
	</body>
</html>
