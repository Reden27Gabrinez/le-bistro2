<?php
include("configuration/config.php"); 
error_reporting(0);
session_start();

include_once 'product-action.php'; 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dishes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fontawesome-free/css/all.css">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .food-item-wrap .figure-wrap {
            position: relative;
            height: 210px;
        }
        .food-item-wrap .figure-wrap:after {
            position: absolute;
            bottom: -1px;
            left: 0;
            content: "";
            background: url(../images/zig-zag.png);
            width: 100%;
            height: 5px;
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
                    <a class="nav-link" href="foods.php"><i class="fas fa-utensil-spoon" style="font-size:20px"></i></a>
                </li>
                <li class="nav-item">
                    <a href="about.php" class="nav-link"><i class="fas fa-info-circle"></i></a>
                </li>
                <li class="nav-item">


                                <?php
                                    session_start();
                                    error_reporting(0);
                                    include_once("class.php");
                                    if(strlen($_SESSION['userid']==0))
                                    {
                                        session_unset();
                                        session_destroy();
                                        echo '
                                                <a class="nav-link" href="booking2.php"><i class="far fa-calendar-alt" style="font-size:20px"></i></a>
                                             ';
                                        
                                    }
                                    else
                                    {
                                        echo '
                                                <a class="nav-link" href="booking.php"><i class="far fa-calendar-alt" style="font-size:20px"></i></a>
                                             ';
                                    }


                                ?>     
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
                        <p class="display-6 fw-bolder mt-2">MENU</p>
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



                    <!-- //////////cart -->




                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">
                        
                        <div class="widget widget-cart">
                               <div class="widget-heading">
                                   <h3 class="widget-title text-dark">
                                Your Cart
                             </h3>
                                               
                             
                                   <div class="clearfix"></div>
                               </div>
                               <div class="order-row bg-white">
                                   <div class="widget-body">
                                   
                                   
   <?php

$item_total = 0;

foreach ($_SESSION["cart_item"] as $item)  
{
?>									
                                   
                                       <div class="title-row">
                                       <?php echo $item["title"]; ?><a href="dishes.php?res_id=<?php echo $_GET['res_id']; ?>&action=remove&id=<?php echo $item["d_id"]; ?>" >
                                       <i class="fa fa-trash pull-right"></i></a>
                                       </div>
                                       
                                       <div class="form-group row no-gutter">
                                           <div class="col-xs-8">
                                                <input type="text" class="form-control b-r-0" value=<?php echo "₱".$item["price"]; ?> readonly id="exampleSelect1">
                                                  
                                           </div>
                                           <div class="col-xs-4">
                                              <input class="form-control" type="text" readonly value='<?php echo $item["quantity"]; ?>' id="example-number-input"> </div>
                                       
                                     </div>
                                     
   <?php
$item_total += ($item["price"]*$item["quantity"]); 
}
?>								  
                                     
                                     
                                     
                                   </div>
                               </div>
                              
                        
                            
                               <div class="widget-body">
                                   <div class="price-wrap text-xs-center">
                                       <p>TOTAL</p>
                                       <h3 class="value"><strong><?php echo "₱".$item_total; ?></strong></h3>
                                       <!-- <p>Free Delivery!</p> -->
                                       <?php
                                       if($item_total==0){
                                       ?>

                                       
                                       <a href="checkout.php?res_id=<?php echo $_GET['res_id'];?>&action=check"  class="btn btn-danger btn-lg disabled">Checkout</a>

                                       <?php
                                       }
                                       else{   
                                       ?>
                                       <a href="checkout.php?res_id=<?php echo $_GET['res_id'];?>&action=check"  class="btn btn-success btn-lg active">Checkout</a>
                                       <?php   
                                       }
                                       ?>

                                   </div>
                               </div>
                               
                       
                               
                               
                           </div>
                   </div>





                    <!-- cart ///////////////////// -->

                      



                    <div class="container m-t-30">
                <div class="row">


                    <div class="col-md-12">
                      
             
                        <div class="menu-widget mt-3" id="2">
                            <div class="widget-heading">
                                <h3 class="widget-title text-dark">
                              MENU <a class="btn btn-link pull-right" data-toggle="collapse" href="#popular2" aria-expanded="true">
                              <i class="fa fa-angle-right pull-right"></i>
                              <i class="fa fa-angle-down pull-right"></i>
                              </a>
                           </h3>
                                <div class="clearfix"></div>
                            </div>
                            <div  >
						<?php  
									$stmt = $conn->prepare("select * from dishes where rs_id='$_GET[res_id]'");
									$stmt->execute();
									$products = $stmt->get_result();
									if (!empty($products)) 
									{
									foreach($products as $product)
										{
						
													
													 
													 ?>
                                <div class="food-item">
                                    <div class="row">
                                        <div class="card shadow mt-3" style="width: 18rem;">
										<form method="post" action='dishes.php?res_id=<?php echo $_GET['res_id'];?>&action=add&id=<?php echo $product['d_id']; ?>'>
                                            <div class="rest-logo pull-left"style="width:100%;" >
                                                <a href="#"><?php echo '<img height="200" class="figure-wrap bg-image card-img-top" src="../admin/Res_img/dishes/'.$product['img'].'" alt="Food logo">'; ?></a>
                                            </div>
                                
                                            <div class="card-body">
                                             
                                                <h5 class="card-title text-center"><?php echo $product['title']; ?></h5>
                                                <div class="product-name"><?php echo $product['slogan']; ?></div>

                         
                                                    <div class="row">
                                                        <div class="col-12 float-start">
                                                            <span class="price">₱<?php echo $product['price']; ?></span>
                                                            <input class="b-r-1" type="text" name="quantity"   style="margin-left:80px;" value="1" size="2" />
                                                            <br><br>
                                                            <input type="submit" class="btn btn-primary" style="margin-left:40px;" value="Add To Cart" />
                                                        </div>

                                                    </div>
                                         
                                            </div>
                           
                                        </div>
                                        
                               
                                        


                                
										</form>
                                    </div><br>
              
                                </div>
                
								
								<?php
									  }
									}
									
								?>
								
								
                              
                            </div>
             
                        </div>
            
                       
                    </div>
                    
                </div>
     
            </div>




                        
                    </div>
                    <div class="col-1"></div>
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