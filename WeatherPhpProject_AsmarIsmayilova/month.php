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
<script src="js/calendar.js"></script>
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
						<li class="menu-item"><a href="week.php?keywords=">Week</a></li>
						<li class="menu-item current-menu-item"><a href="month.php?keywords=">Month</a></li>
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
                <div id="custom-inner" class="custom-inner">
                    <div class="custom-header clearfix">
                        
                    </div>
                    <div class="month">      
                        <ul>
                            <li>
                            January<br>
                            <span style="font-size:18px">2021</span>
                            </li>
                        </ul>
                        </div>

                        <div class="weekdays">
                        <li>Mo</li>
                        <li>Tu</li>
                        <li>We</li>
                        <li>Th</li>
                        <li>Fr</li>
                        <li>Sa</li>
                        <li>Su</li>
                        </div>

                        <ul class="days">  
                        <li>28</li>
                        <li>29</li>
                        <li>30</li>
                        <li>31</li>
                        <li>1</li>
                        <li>2</li>
                        <li>3</li>
                        <li>4</li>
                        <li>5</li>
                        <li>6</li>
                        <li>7</li>
                        <li>8</li>
                        <li>9</li>
                        <li><span class="active">10</span></li>
                        <li>11</li>
                        <li>12</li>
                        <li>13</li>
                        <li>14</li>
                        <li>15</li>
                        <li>16</li>
                        <li>17</li>
                        <li>18</li>
                        <li>19</li>
                        <li>20</li>
                        <li>21</li>
                        <li>22</li>
                        <li>23</li>
                        <li>24</li>
                        <li>25</li>
                        <li>26</li>
                        <li>27</li>
                        <li>28</li>
                        <li>29</li>
                        <li>30</li>
                        <li>31</li>
                        </ul>
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