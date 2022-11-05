<!DOCTYPE html>
<html lang="en">
<?php
include("configuration/config.php");
include_once 'product-action.php';
error_reporting(0);
session_start();


function function_alert() { 
      

    echo "<script>alert('Thank you. Your Order has been placed!');</script>"; 
    echo "<script>window.location.replace('your_orders.php');</script>"; 
} 

if(empty($_SESSION["userid"]))
{
	header('location:login.php');
}
else{

										  
												foreach ($_SESSION["cart_item"] as $item)
												{
											
												$item_total += ($item["price"]*$item["quantity"]);
												
													if($_POST['submit'])
													{
						
													$SQL="insert into users_orders(u_id,title,quantity,price) values('".$_SESSION["userid"]."','".$item["title"]."','".$item["quantity"]."','".$item["price"]."')";
						
														mysqli_query($conn,$SQL);
														
                                                        
                                                        unset($_SESSION["cart_item"]);
                                                        unset($item["title"]);
                                                        unset($item["quantity"]);
                                                        unset($item["price"]);
														$success = "Thank you. Your order has been placed!";

                                                        function_alert();

														
														
													}
												}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fontawesome-free/css/all.css">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .custom-control-input:checked ~ .custom-control-indicator {
  color: #fff;
  background-color: #5c4ac7;
  margin-top: 0;
  padding: 10px;
  border-radius: 100%;
}

.custom-checkbox .custom-control-indicator {
  border-radius: 100%;
}

.custom-control-indicator {
  padding: 10px;
  background-color: #fff;
  box-shadow: 0 0 1px 3px rgba(93, 92, 99, 0.05);
  border: 1px solid rgba(116, 135, 150, 0.23);
}

.custom-control-input:focus ~ .custom-control-indicator {
  -webkit-box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.2rem #5c4ac7;
  box-shadow: 0 0 0 0.075rem #fff, 0 0 0 0.2rem #5c4ac7;
}

.custom-radio .custom-control-input:checked ~ .custom-control-indicator {
  background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns="http://www.w3.org/2000/svg" viewBox="0088"%3E%3Cpath fill="%23fff" d="M6.564.75l-3.593.612-1.538-1.55l04.262.9747.2582.193z"/%3E%3C/svg%3E");
}

.custom-control-input:active ~ .custom-control-indicator {
  color: #fff;
  background-color: #5c4ac7;
}

.custom-control-input:disabled ~ .custom-control-indicator {
  cursor: not-allowed;
  background-color: #eee;
}

.custom-control-input:disabled ~ .custom-control-description {
  color: #76767;
}

.custom-control {
  padding-left: 30px;
}

    </style> 
</head>
<body>

    <nav class="navbar navbar-expand-custom navbar-mainbg justify-content-around" style="position: fixed; z-index: 1; width: 100%;"> 
        <div id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto d-inline">
                <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
                <li class="nav-item">
                    <a class="nav-link" href="menu.php"><i class="fas fa-home" style="font-size:20px"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cart.php"><i class="fas fa-history" style="font-size:20px"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="booking.php"><i class="far fa-calendar-alt" style="font-size:20px"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="a()"><i class="fa fa-refresh fa-spin" style="font-size:20px"></i></a>
                </li>
            </ul>
        </div>
    </nav>


    
    <div class="container">
        <div class="row mb-5">
            <div class="col-sm-3"></div>
            <div class="col-sm-6 mt-5 mb-5">

                
                
                <div class="row">
                    <div class="col-6 my-3">
                        <p class="display-6 fw-bolder mt-2">CHECKOUT</p>
                    </div>
                    <div class="col-6">
                        <div class="dropdown show">
                            <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="image/bg1.png" alt="" width="50" height="50" class="my-2 float-end rounded-circle">
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <?php
                                    session_start();
                                    error_reporting(0);
                                    include_once("class.php");
                                    if(strlen($_SESSION['userid']==0))
                                    {
                                        session_unset();
                                        session_destroy();
                                        echo '
                                                <a href="register.php" class="dropdown-item" href="#">Sign up</a>
                                                <a href="login.php" class="dropdown-item" href="#">Sign in</a>
                                             ';
                                        
                                    }
                                    else
                                    {
                                        echo '
                                                <a class="dropdown-item bg-info" href="#">';
                                                  echo $_SESSION['Name'];echo " "; echo $_SESSION['LName'];
                                                   echo '</a>
                                                   <a class="dropdown-item" href="profile.php">Profile</a>
                                                   <a class="dropdown-item" href="your_orders.php">Order History</a>
                                                   <a class="dropdown-item" href="change-password.php">Settings</a>
                                                   <a class="dropdown-item" href="logout.php">Logout</a>
                                             ';
                                    }


                                ?>
                              </div>
                        </div>
                    </div>
                </div>
    
                <div class="row mt-5">
                    <div class="col-1"></div>
                    <div class="col-10">



                    <div class="container card m-t-30">
			<form action="" method="post">
                <div class="widget clearfix">
                    
                    <div class="widget-body">
                        <form method="post" action="#">
                            <div class="row">
                                
                                <div class="col-sm-12">
                                    <div class="cart-totals margin-b-20">
                                        <div class="cart-totals-title mt-3">
                                            <h4>Cart Summary</h4> </div>
                                        <div class="cart-totals-fields">
										
                                            <table class="table">
											<tbody>
                                          
												 
											   
                                                    <tr>
                                                        <td>Cart Subtotal</td>
                                                        <td> <?php echo "₱".$item_total; ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Delivery Charges</td>
                                                        <td>Free</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-color"><strong>Total</strong></td>
                                                        <td class="text-color"><strong> <?php echo "₱".$item_total; ?></strong></td>
                                                    </tr>
                                                </tbody>
												
												
												
												
                                            </table>
                                        </div>
                                    </div>
                                    <div class="payment-option">
                                        <ul class=" list-unstyled">
                                            <li>
                                                <label class="custom-control custom-radio  m-b-20">
                                                    <input name="mod" id="radioStacked1" checked value="COD" type="radio" class="custom-control-input"> <span class="custom-control-indicator"></span> <span class="custom-control-description">Cash on Delivery</span>
                                                </label>
                                            </li>
                                        </ul>
                                        <p class="text-xs-center"> <input type="submit" onclick="return confirm('Do you want to confirm the order?');" name="submit"  class="btn btn-success btn-block" value="Order Now"> </p>
                                    </div>
									</form>
                                </div>
                            </div>
                       
                    </div>
                </div>
				 </form>
            </div>





                    </div>
            <div class="col-sm-3"></div>
        </div>
    </div>

    <script src="assets/bootstrap/bootstrap.bundle.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="assets/style.js"></script>
    <script>
        function a()
        {
            location.reload();
        }

    </script>
</body>
</html>
<?php
}
?>