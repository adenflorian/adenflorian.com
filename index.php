<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>AdenFlorian | Portfolio</title>
		<link rel="icon" type="image/png" href="img/favicon_panda.png">
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,900,500,300' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=VT323' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.1.0.min.js"></script>
		<script src="js/jquery.ba-hashchange.min.js"></script>
		<script src="js/adenflorian.js"></script>
	</head>
	<body>
		<div id="left-outer">
			<div id="left-inner" class="vertcenter">
				<div id="header">AdenFlorian</div>
				<nav>
					<p><a href="#games">Games</a></p>
					<p><a href="#websites">Websites</a></p>
					<p><a href="#contact">Contact</a></p>
				</nav>
			</div>
		</div>
		<div id="right-outer">
			<div id="right-inner" class="vertcenter">
				<?php
				require 'games.php';
				require 'websites.php';
				require 'contact.php';
				?>
			</div>
		</div>
	</body>
</html>
