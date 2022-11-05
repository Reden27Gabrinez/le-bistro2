<!DOCTYPE html>
<html lang="en">
<?php
include("connection/connect.php");
error_reporting(0);
session_start();
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>About Us</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet"> </head>
    <style>
        .custom-bistro {
            margin-bottom: 1em;
        }

        /* tooltip open */
        .tooltip2 {
        position: relative;
        display: inline-block;
        border-bottom: 1px dotted black;
        }

        .tooltip2 .tooltiptext {
        visibility: hidden;
        width: 300px;
        background-color: black;
        color: #fff;
        text-align: center;
        border-radius: 6px;
        padding: 5px 0;
        
        /* Position the tooltip */
        position: absolute;
        z-index: 1;
        top: -5px;
        left: 105%;
        }

        .tooltip2:hover .tooltiptext {
        visibility: visible;
        }
        /* tooltip close */
    </style>

<body>

        <header id="header" class="header-scroll top-header headrom">
            <nav class="navbar navbar-dark">
                <div class="container">
                    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>
                    <a class="navbar-brand" href="index.php"> <img class="img-rounded" src="images/hdpi2.png" alt=""> </a>
                    <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                        <ul class="nav navbar-nav">
                            <li class="nav-item"> <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a> </li>
                            <li class="nav-item"> <a class="nav-link active" href="restaurants.php">Category <span class="sr-only"></span></a> </li>
                            <li class="nav-item"> <a class="nav-link active" href="reservation.php">Reservation <span class="sr-only"></span></a> </li>
                            <li class="nav-item"> <a class="nav-link active" href="about.php">About Us <span class="sr-only"></span></a> </li>

                            
                           
							<?php
						if(empty($_SESSION["user_id"])) // if user is not login
							{
								echo '<li class="nav-item"><a href="login.php" class="nav-link active">Login</a> </li>
							  <li class="nav-item"><a href="registration.php" class="nav-link active">Register</a> </li>';
							}
						else
							{

					
                                    echo  '<li class="nav-item"><a href="book.php" class="nav-link active">Book History</a> </li>';
									echo  '<li class="nav-item"><a href="your_orders.php" class="nav-link active">My Orders</a> </li>';
									echo  '<li class="nav-item"><a href="logout.php" class="nav-link active">Logout</a> </li>';
							}

						?>
							 
                        </ul>
						 
                    </div>
                </div>
            </nav>

        </header>
        <div class="page-wrapper">
            <!-- <div class="top-links">
                <div class="container">
                    <ul class="row links">
                       
                        <li class="col-xs-12 col-sm-4 link-item active"><span>1</span><a href="#">Choose Menus</a></li>
                        <li class="col-xs-12 col-sm-4 link-item"><span>2</span><a href="#">Pick Your favorite food</a></li>
                        <li class="col-xs-12 col-sm-4 link-item"><span>3</span><a href="#">Order and Pay</a></li>
                    </ul>
                </div> -->
            </div>
            <div class="inner-page-hero bg-image" data-image-src="images/img/bg.jpg">
                <div class="container"> </div>
            </div>
            <div class="result-show">
                <div class="container">
                    <div class="row">     
                    </div>
                </div>
            </div>
            <section class="restaurants-page" style="margin-bottom: 4em;">
                <div class="container">
                    <div class="row">

                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-6">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7889.772342697461!2d123.73829745330758!3d8.606926297680142!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3254df4324336eab%3A0x457723e869216923!2sLe%20Bistro!5e0!3m2!1sen!2sph!4v1665052707989!5m2!1sen!2sph" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                    <div class="col-md-6">
                                        <h1 class="text-center font-monospace custom-bistro">Le Bistro</h1>   
                                        <div class="tooltip2">Opens at
                                            <div class="tooltiptext">
                                                <p>Thursday &emsp; 6AM–10PM</p>
                                                <p>Friday &emsp; 6AM–11PM</p>
                                                <p>Saturday &emsp; 6AM–11PM</p>
                                                <p>Sunday &emsp; 6AM–11PM</p>
                                                <p>Monday &emsp; 6AM–10PM</p>
                                                <p>Tuesday &emsp; 6AM–10PM</p>
                                                <p>Wednesday &emsp; 6AM–10PM</p>
                                            </div>
                                        </div>                                    
                                        <p><h5 style="font-weight: bold;">Address</h5>Port Area, Plaridel, 7209 Misamis Occidental</p>
                                        <h5 style="font-weight: bold;">Phone: 0966 368 4488</a></h5>
                                        <a href="http://lebistro.ph" target="_blank">lebistro.ph</a>
                                        

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2"></div>

                    




                 

                          
                          
                           
        
                    </div>
                </div>
            </section>
       
        
        
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/headroom.js"></script>
    <script src="js/foodpicky.min.js"></script>
</body>

</html>