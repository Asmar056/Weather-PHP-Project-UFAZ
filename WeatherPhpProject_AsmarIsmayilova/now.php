<?php
include 'DataSource.php';
$db = new DataSource();
$conn = $db->getConnection();

if(isset($_GET['keywords'])){
	$keywords = $conn->escape_string($_GET['keywords']);
	$query = $conn->query("
	SELECT city.city_title, dateMeasurement,DAYNAME(dateMeasurement)as DAYNAME,
	DAYOFMONTH(dateMeasurement) as DAYOFMONTH, MONTHNAME(dateMeasurement) as MONTHNAME, 
	timeMeasurement, temperature, airPressure,
	precipitation, solarRadiance, windSpeed, windDirection, humidity, UVindex,
	cloudiness.cloudinessDescription, weather_overall.weatherDescription
	FROM weather JOIN city ON city.cityId = weather.cityID
	JOIN cloudiness ON cloudiness.cloudinessID = weather.cloudinessID 
	JOIN weather_overall ON weather_overall.weatherOverallID = weather.weatherOverallID
	WHERE city.city_title = '{$keywords}' AND dateMeasurement = CURRENT_DATE;
	");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

	<title>NOW</title>

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
						<li class="menu-item current-menu-item"><a href="now.php?keywords=">Now</a></li>
						<li class="menu-item"><a href="week.php?keywords=">Week</a></li>
						<li class="menu-item"><a href="month.php?keywords=">Month</a></li>
						<li class="menu-item"><a href="contact.php">Contact</a></li>
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
				<div class="forecast-container">
					<div class="today forecast">
						<div class="forecast-header">

						<?php 
						if($query->num_rows){	
							while($r = $query->fetch_object()){
						 ?>
							<div class="day"><?php echo $r->DAYNAME?></div>
							<div class="date"><?php echo $r->DAYOFMONTH, " &nbsp", $r->MONTHNAME?></div>
						</div> <!-- .forecast-header -->
						<div class="forecast-content">
							<div class="location"><?php echo $r->city_title?></div>
							<div class="degree">
								<div class="num"><?php echo $r->temperature?><sup>o</sup>C</div>
								<div class="forecast-icon">
									<img src="images/icons/icon-1.svg" alt="" width=90>
								</div>
							</div>
							<div class="current-weather">
								<div class="left">
									<span>Precipitation: <?php echo $r->precipitation?> mm</span>
									<span>Wind speed: <?php echo $r->windSpeed?>km/h</span>
									<span>Air Pressure: <?php echo $r->airPressure?></span>
								</div>
								<div class="right">
									<span>Solar Radiance: <?php echo $r->solarRadiance?> kWh/ m<sup>2</sup></span>
									<span>Wind Gusts: <?php echo $r->windDirection?> km/h</span>
									<span>UV Index: <?php echo $r->UVindex?></span>
								</div>
							</div>
							
							
							
						</div>
						
						<?php }}?>
					</div>
				</div>
			</div>
		</div>
		<main class="main-content">

		</main> <!-- .main-content -->

		<?php include 'footer.php'?>
	</div>

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/app.js"></script>

</body>

</html>