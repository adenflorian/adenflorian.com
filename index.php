<!DOCTYPE html>
<html>
	<head>
		<!-- Google tag (gtag.js) -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-3ND8M5FEY8"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'G-3ND8M5FEY8');

			gtag('event', 'page_view', {
				'page_path': window.location.pathname + window.location.search + window.location.hash
			})
		</script>
		<meta charset="UTF-8">
		<title>David Valachovic | Portfolio</title>
		<link href="img/favicon_panda.png" rel="icon" type="image/png">
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,900,500,300' rel='stylesheet'>
		<link href='https://fonts.googleapis.com/css?family=VT323' rel='stylesheet'>
		<link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
		<link href="style/style.css" rel="stylesheet">
		<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-2.1.0.min.js"></script>
		<script src="js/jquery.ba-hashchange.min.js"></script>
		<script src="js/adenflorian.js"></script>
	</head>
	<body>
		<div id="left-outer">
			<div id="left-inner" class="vertcenter">
				<div id="header">David Valachovic</div>
				<nav>
					<p><a href="#games" id="nav-games">Games</a></p>
					<p><a href="#websites" id="nav-websites">Websites</a></p>
					<p><a href="#contact" id="nav-contact">Contact</a></p>
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
