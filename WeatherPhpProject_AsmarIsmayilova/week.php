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
    WHERE city.city_title = '{$keywords}' AND YEARWEEK(dateMeasurement, 1) = YEARWEEK(CURDATE(), 1)
    ORDER BY dateMeasurement ASC;
    ");
}
?>

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
    <div>Found <?php echo $query->num_rows;?></div>
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
						<li class="menu-item"><a href="now.php?keywords=">Now</a></li>
						<li class="menu-item current-menu-item"><a href="week.php?keywords=">Week</a></li>
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
                <?php
                if($query->num_rows){	
							$r = $query->fetch_object();
                ?>
                    <div class="forecast">
                            <div class="forecast-header">
                                <div class="day">Monday<br><?php echo $r->DAYOFMONTH, " &nbsp", $r->MONTHNAME?></div>
                            </div> <!-- .forecast-header -->
                            <div class="forecast-content">
                                <div class="forecast-icon">
                                    <img src="images/icons/icon-5.svg" alt="" width=48>
                                </div>
                                <div class="degree"><?php echo $r->temperature?><sup>o</sup>C</div>
                            </div>
                    </div>
                    <div class="forecast">
                        <div class="forecast-header">
                            <div class="day">Tuesday <br><?php echo $r->DAYOFMONTH+1, " &nbsp", $r->MONTHNAME?></div>
                        </div> <!-- .forecast-header -->
                        <div class="forecast-content">
                            <div class="forecast-icon">
                                <img src="images/icons/icon-3.svg" alt="" width=48>
                            </div>
                            <div class="degree"><?php echo $r->temperature?><sup>o</sup>C</div>
                        </div>
                    </div>
                    <div class="forecast">
                        <div class="forecast-header">
                            <div class="day">Wednesday<br><?php echo $r->DAYOFMONTH+2, " &nbsp", $r->MONTHNAME?></div>
                        </div> <!-- .forecast-header -->
                        <div class="forecast-content">
                            <div class="forecast-icon">
                                <img src="images/icons/icon-5.svg" alt="" width=48>
                            </div>
                            <div class="degree"><?php echo $r->temperature?><sup>o</sup>C</div>
                        </div>
                    </div>
                    <div class="forecast">
                        <div class="forecast-header">
                            <div class="day">Thursday<br><?php echo $r->DAYOFMONTH+3, " &nbsp", $r->MONTHNAME?></div>
                        </div> <!-- .forecast-header -->
                        <div class="forecast-content">
                            <div class="forecast-icon">
                                <img src="images/icons/icon-7.svg" alt="" width=48>
                            </div>
                            <div class="degree"><?php echo $r->temperature?><sup>o</sup>C</div>
                        </div>
                    </div>
                    <div class="forecast">
                        <div class="forecast-header">
                            <div class="day">Friday<br><?php echo $r->DAYOFMONTH+4, " &nbsp", $r->MONTHNAME?></div>
                        </div> <!-- .forecast-header -->
                        <div class="forecast-content">
                            <div class="forecast-icon">
                                <img src="images/icons/icon-12.svg" alt="" width=48>
                            </div>
                            <div class="degree"><?php echo $r->temperature?><sup>o</sup>C</div>
                        </div>
                    </div>
                    <div class="forecast">
                        <div class="forecast-header">
                            <div class="day">Saturday<br><?php echo $r->DAYOFMONTH+5, " &nbsp", $r->MONTHNAME?></div>
                        </div> <!-- .forecast-header -->
                        <div class="forecast-content">
                            <div class="forecast-icon">
                                <img src="images/icons/icon-13.svg" alt="" width=48>
                            </div>
                            <div class="degree"><?php echo $r->temperature?><sup>o</sup>C</div>
                        </div>
                    </div>
                    <div class="forecast">
                        <div class="forecast-header">
                            <div class="day">Sunday<br><?php echo $r->DAYOFMONTH+6, " &nbsp", $r->MONTHNAME?></div>
                        </div> <!-- .forecast-header -->
                        <div class="forecast-content">
                            <div class="forecast-icon">
                                <img src="images/icons/icon-14.svg" alt="" width=48>
                            </div>
                            <div class="degree"><?php echo $r->temperature?><sup>o</sup>C</div>
                        </div>
                    </div>

                    <?php
                    }
                ?>
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