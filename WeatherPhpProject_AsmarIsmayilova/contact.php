<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

	<title>Compass Starter by Ariona, Rian</title>

	<!-- Loading third party fonts -->
	<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
	<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

	<!-- Loading main css file -->
	<link rel="stylesheet" href="style.css">

	<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

</head>


<body>

	<div class="site-content">
		<div class="site-header">
			<div class="container">
				<a href="now.php" class="branding">
					<img src="images/logo.png" alt="" class="logo">
					<div class="logo-type">
						<h1 class="site-title">Weather Forecast</h1>
					</div>
				</a>

				<!-- Default snippet for navigation -->
				<div class="main-navigation">
					<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
					<ul class="menu">
						<li class="menu-item"><a href="index.php">Search</a></li>
						<li class="menu-item"><a href="now.php">Now</a></li>
						<li class="menu-item"><a href="week.php">Week</a></li>
						<li class="menu-item"><a href="month.php">Month</a></li>
						<li class="menu-item current-menu-item"><a href="contact.php">Contact</a></li>
					</ul> <!-- .menu -->
				</div> <!-- .main-navigation -->

				<div class="mobile-navigation"></div>

			</div>
		</div>
		 <!-- .site-header -->

		<div class="hero">
			<div class="container">

			</div>
		</div>
		<div class="forecast-table">
			<div class="container">
				<div class="forecast-container"></div>
			</div>
		</div>
		<main class="main-content">

		</main> <!-- .main-content -->

		<?php include 'footer.php';?>
	</div>

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/app.js"></script>

</body>

</html>