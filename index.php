<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>AdenFlorian's Blog</title>
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,900,500,300' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.1.0.min.js"></script>
		<script src="js/jquery.ba-hashchange.min.js"></script>
		<script src="js/adenflorian.js"></script>
	</head>
	<body>
		<div id="header">AdenFlorian</div>
		<nav>
			<a href="#home">Portfolio</a>
			<a href="#contact">Contact</a>
		</nav>
		<div id="page">
			<?php
			require 'home.php';
			require 'contact.php';
			?>
		</div>
	</body>
</html>
