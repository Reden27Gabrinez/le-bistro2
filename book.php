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
    <title>Book History</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet"> </head>

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
                       
                        <li class="col-xs-12 col-sm-4 link-item active"><span>1</span><a href="#">Choose Restaurant</a></li>
                        <li class="col-xs-12 col-sm-4 link-item"><span>2</span><a href="#">Pick Your favorite food</a></li>
                        <li class="col-xs-12 col-sm-4 link-item"><span>3</span><a href="#">Order and Pay</a></li>
                    </ul>
                </div>
            </div> -->
            <div class="inner-page-hero bg-image" data-image-src="images/img/bg.jpg">
                <div class="container"> </div>
            </div>
            <div class="result-show">
                <div class="container">
                    <div class="row">     
                    </div>
                </div>
            </div>
            <section class="restaurants-page">
                <div class="container">
                    <div class="row">





                    <div class="table-responsive">
                            <?php
                                include_once('bistro/configuration/config.php');
                                $name  = $_SESSION['Name'];
                                $email= $_SESSION['Email'];
                                $query = "SELECT * FROM book WHERE Name = '$name' OR Email = '$email' ";
                                $stmt  = $conn->prepare($query);
                                $stmt  -> execute();
                                $result = $stmt->get_result();

                            ?>
                            <table class="table mt-5 table-hover">
                                <thead class="table-dark">
                                    <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">NAME</th>
                                    <th scope="col">BOOK DATE</th>
                                    <th scope="col">STATUS</th>
                                    <th scope="col">ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                            <?php

                                $counter = 0;
                                while($row = $result->fetch_assoc())
                                {
                                    $counter++;
                            ?>
                                    <tr>
                                        <th><?= $counter; ?></th>
                                        <td><?= $row['Name']; ?></td>
                                        <td><?= $row['Book_date']; ?></td>
                                        <td>
                                            <?php
                                                if($row['Status'] == 0)
                                                {
                                            ?>
                                                    <span class="badge bg-info">Pending</span>
                                            <?php
                                                }
                                                elseif($row['Status'] == 1)
                                                {
                                            ?>
                                                    <span class="badge bg-warning">Accepted</span>
                                            <?php
                                                }
                                                elseif($row['Status'] == 2)
                                                {
                                            ?>
                                                    <span class="badge bg-success">Completed</span>
                                            <?php
                                                }
                                                else
                                                {
                                            ?>
                                                    <span class="badge bg-danger">Cancelled</span>
                                            <?php
                                                }

                                            ?>
                                        </td>
                                        <td>
                                           <a href="book_delete.php?delete_book=<?= $row['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete?');">
                                                <span class="text-center"><i class="fa fa-trash"></i></span>
                                           </a>
                                        </td>
                                    </tr>
                            <?php
                                }
                                $stmt->close();

                            ?>
                                  
                                </tbody>
                            </table>
                    </div>

                          
                          
                           
        
                    </div>
                </div>
            </section>
       
            <footer class="footer">
            <div class="container">
                
          
                <div class="bottom-footer">
                    <div class="row">
                        <!-- <div class="col-xs-12 col-sm-3 payment-options color-gray">
                            <h5>Payment Options</h5>
                            <ul>
                                <li>
                                    <a style="font-weight: 900;" href="#"> COD </a>
                                </li>
                            </ul> -->
                        </div>
                        <div class="col-xs-12 col-sm-4 address color-gray">
                                    <h5>Address</h5>
                                    <p>Port Area, Plaridel, 7209 Misamis Occidental</p>
                                    <h5>Phone: 0966 368 4488</a></h5> </div>
                                <div class="col-xs-12 col-sm-5 additional-info color-gray">
                                    <h5></h5>
                                   <!-- <p>Order us and let us prepare the best menu for you</p> -->
                                </div>
                    </div>
                </div>
          
            </div>
        </footer>
        
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