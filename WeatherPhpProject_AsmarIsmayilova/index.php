<?php
// include 'now.php';

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
		<div class="site-content">
            <div class="hero">
                <div class="weather-app-body">
                    <div class="container" id="weather-search">
                        <div class="app-info center">
                            <label class="weather_finder">Weather Finder</label>
                            <p class="created-by center"> <i>by</i> Asmar Ismayilova</p>
                        </div>
                        <form action="now.php" class="find-location" method="GET">
                            <input type="text" name='keywords' autocomplete="off" placeholder="Enter your city">
                            <input type="submit" value="Find">
                        </form>
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