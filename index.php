<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset=utf-8>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MENU</title>
        <!-- Load Roboto font -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <!-- Load css styles -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/pluton.css" />
        <!--[if IE 7]>
            <link rel="stylesheet" type="text/css" href="css/pluton-ie7.css" />
        <![endif]-->
        
        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/apple-touch-icon-72.png">
        <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57.png">
        <link rel="shortcut icon" href="images/ico/favicon.ico">
        
        <style>
			a
			{
				text-decoration:none;	
			}
			a:link /* unvisited link */
			{
				color: #00F;
			}			
			a:visited /* visited link */
			{
				color: #00F;
			}
			a:hover /* mouse over link */
			{
				color: #F00;
				text-decoration:underline;
			}			
			a:active /* selected link */
			{
				color: #0F0;
			}
			th, td
			{
				text-align:left;
				font-size:22px;
				color:#F00;
			}
			name
			{
				color:#FFF;
				font-size:20px;
				text-align:left;
			}		
		</style>
    </head>
    
    <body>
        <div class="navbar" >
            <div class="navbar-inner" style="background-color:lightpink">
                <div class="container" >
					<mainHeading style="color:black; font-size:40px; font-weight:bold;">
                    	<br />
                    	<center>SEARCHING OVER ENCRYPTED DATA</center>
                        <br />
                    </mainHeading>
                    <?php
                    	session_start();
						echo '<name><br><br>Welcome,  REHA</name>';
						include "backupDatabase.php";
					?>
                                        
                    <!-- Navigation button, visible on small resolution -->
                    <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <i class="icon-menu"></i>
                    </button>
                    
                </div>
            </div>
        </div>
        <!-- Start home section -->
        
        <!-- End home section -->
        <!-- Service section start -->
        
        <!-- Service section end -->
        <!-- Portfolio section start -->
        <div class="section secondary-section" style="background-color:lightblue" id="portfolio">
            <div class="triangle" ></div>
            <div class="container" >
                <div class=" title" >
                    <h1>MENU</h1>
                </div>
                <table border="1" align="center" cellpadding="10" cellspacing="10">
                    <tr>
                        <th></th>
                        <th>INDEXING</th>
                        <th>SEARCHING</th>
                    </tr>
                    <tr>
                        <th>TEXT</th>
                        <td><a href="textFileUpload.php">Upload text files</a></td>
                        <td><a href="textFileSearch.php">Search text files</a></td>
                    </tr>
                    
                </table>
            </div>
        </div>
        <!-- Portfolio section end -->
        <!-- About us section start -->
        <div class="section primary-section" style="background-color:lightpink" id="about">
            <div class="triangle" >
            </div>
            <div class="container" >
            </div>
        </div>
        
        
        <!-- ScrollUp button start -->
        <div class="scrollup" >
            <a href="#">
                <i class="icon-up-open"></i>
            </a>
        </div>
        <!-- ScrollUp button end -->
		<!-- Include javascript -->
        <script type="text/javascript" src="ajax.js"></script>
		
		<script src="js/jquery.js"></script>
        <script type="text/javascript" src="js/jquery.mixitup.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/modernizr.custom.js"></script>
        <script type="text/javascript" src="js/jquery.bxslider.js"></script>
        <script type="text/javascript" src="js/jquery.cslider.js"></script>
        <script type="text/javascript" src="js/jquery.placeholder.js"></script>
        <script type="text/javascript" src="js/jquery.inview.js"></script>
        <!-- Load google maps api and call initializeMap function defined in app.js -->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&amp;callback=initializeMap"></script>
        <!-- css3-mediaqueries.js for IE8 or older -->
        <!--[if lt IE 9]>
            <script src="js/respond.min.js"></script>
        <![endif]-->
        <script type="text/javascript" src="js/app.js"></script>
    </body>
</html>