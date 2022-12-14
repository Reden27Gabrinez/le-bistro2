<!DOCTYPE html>
<html lang="en">
<?php


session_start();
error_reporting(0);
include("../connection/connect.php");

if(isset($_POST['submit'] ))
{


        $name       = $_POST['name'];
        $book       = $_POST['book_date'];
        $status     = $_POST['stats'];
        $phone2     = $_POST['phone2'];

        //////////////////////
        require "vendor/autoload.php";

        $client = new GuzzleHttp\Client(); 

        $response = $client->request("POST", "https://api.sms.fortres.net/v1/messages", [
            "headers" => [
                "Content-type" => "application/json"
            ],
            "auth" => ["d27a92ea-d31c-46ed-8759-44592acad895", "5MD0KUAK3ANmeyYyu4gg0KeoOIuYsC9l3NDY77Mk"],
            "json" => [
                "recipient" => "$phone2",
                "message" => "$book"
            ]
        ]);

        if ($response->getStatusCode() == 200) {
            echo $response->getBody();
        }
	////////////////////////////////
	$mql = "UPDATE book SET Status='$_POST[stats]' WHERE id='$_GET[user_upd]' ";
	mysqli_query($db, $mql);
			$success = 	'<div class="alert alert-success alert-dismissible fade show">
																<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
																<strong>User Updated!</strong></div>';
	


}

?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>Update Reservation</title>
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/logo.png">

    <?php include("links_modal.php"); ?>
</head>

<body class="fix-header">
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <div id="main-wrapper">
 
         <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
            <div class="navbar-header">
                    <a class="navbar-brand" href="dashboard.php">
                        
                    <span><img src="images/logo.png" style="width:152px; height:66px;" alt="homepage" class="dark-logo" /></span>
                    </a>
                </div>
                <div class="navbar-collapse">
              
                    <ul class="navbar-nav mr-auto mt-md-0">
              
                    </ul>
                
                    <ul class="navbar-nav my-lg-0">

                      
            
                        <li class="nav-item dropdown">
                           
                            <div class="dropdown-menu dropdown-menu-right mailbox animated zoomIn">
                                <ul>
                                    <li>
                                        <div class="drop-title">Notifications</div>
                                    </li>
                                    
                                    <li>
                                        <a class="nav-link text-center" href="javascript:void(0);"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                   
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/bookingSystem/user-icn.png" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                <ul class="dropdown-user">
                                    <li><a href="logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
   
        <div class="left-sidebar">
    
            <div class="scroll-sidebar">
             
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-label">Home</li>
                        <li> <a href="dashboard.php"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
                        <li class="nav-label">Log</li>
                        <li> <a href="all_users.php">  <span><i class="fa fa-user f-s-20 "></i></span><span>Users</span></a></li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-archive f-s-20 color-warning"></i><span class="hide-menu">Restaurant</span></a>
                            <ul aria-expanded="false" class="collapse">
								<li><a href="all_restaurant.php">All Restaurants</a></li>
								<li><a href="add_category.php">Add Category</a></li>
                                <li><a href="add_restaurant.php">Add Restaurant</a></li>
                                
                            </ul>
                        </li>
                      <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-cutlery" aria-hidden="true"></i><span class="hide-menu">Menu</span></a>
                            <ul aria-expanded="false" class="collapse">
								<li><a href="all_menu.php">All Menues</a></li>
								<li><a href="add_menu.php">Add Menu</a></li>
                              
                                
                            </ul>
                        </li>
                         <li> <a href="reservation.php"><i class="fa fa-table" aria-hidden="true"></i><span>Reservation</span></a></li>
                         <li> <a id="modal-btn"><i class="fa fa-bar-chart" aria-hidden="true"></i><span>Reports</span></a></li>
                            <?php include("reports_modals.php"); ?>
                         <li> <a href="table.php"><i class="fa fa-table" aria-hidden="true"></i><span>Table</span></a></li>
                         <li> <a href="backup/backupCloud.php"><i class="fa fa-database" aria-hidden="true"></i><span>Back-up Database</span></a></li>
						
                         
                    </ul>
                </nav>
              
            </div>
  
        </div>
   
        <div class="page-wrapper" style="height:1200px;">
       
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Dashboard</h3> </div>
               
            </div>
         
            <div class="container-fluid">
            
                     <div class="row">
                   
                   
					
					 <div class="container-fluid">
              
                  
									
									<?php  
									        echo $error;
									        echo $success; 
											
											
											
											?>
									
									
								
								
					    <div class="col-lg-12">
                        <div class="card card-outline-primary">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Update Reservation</h4>
                            </div>
                            <div class="card-body">
							  <?php $ssql ="select * from book where id='$_GET[user_upd]'";
													$res=mysqli_query($db, $ssql); 
													$newrow=mysqli_fetch_array($res);?>
                                <form action='' method='post'  >
                                    <div class="form-body">
                                      
                                        <hr>
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Name</label>
                                                    <input readonly type="text" name="name" class="form-control" value="<?php  echo $newrow['Name']; ?>">
                                                   </div>
                                            </div>
                                     
                                            <div class="col-md-6">
                                                <div class="form-group has-danger">
                                                    <label class="control-label">Phone</label>
                                                    <input readonly type="number" name="phone2" class="form-control form-control-danger"  value="<?php  echo $newrow['Phone'];  ?>">
                                                    </div>
                                            </div>
                                      
                                        </div>
                                    
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Email </label>
                                                    <input readonly type="email" name="email" class="form-control" value="<?php  echo $newrow['Email']; ?>">
                                                   </div>
                                            </div>
                                     
                                            <div class="col-md-6">
                                                <div class="form-group has-danger">
                                                    <label class="control-label">Book Date</label>
                                                    <input readonly type="text" name="book_date" class="form-control form-control-danger"  value="<?php  echo $newrow['Book_date'];  ?>">
                                                    </div>
                                            </div>
                                        
                                        </div>
                                   
										 <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Preferred Food</label>
                                                    <input readonly type="text" name="password" class="form-control form-control-danger"   value="<?php  echo $newrow['Pref_food'];  ?>">
                                                    </div>
                                                </div>
                                        
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Occassion</label>
                                                    <input readonly type="text" name="phone" class="form-control form-control-danger"   value="<?php  echo $newrow['Occasion'];  ?>">
                                                    </div>
                                                </div>
                                            </div>
                                 
                                            
                                      
                                        
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">No. of Persons</label>
                                                    <input readonly type="text" name="password" class="form-control form-control-danger"   value="<?php  echo $newrow['person_no'];  ?>">
                                                    </div>
                                                </div>
                                        
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Status
                                                    <?php
                                                        if($newrow['Status'] == 0)
                                                        {
                                                    ?>
                                                            <span class="badge bg-info">Pending</span>
                                                    <?php
                                                        }
                                                        elseif($newrow['Status'] == 1)
                                                        {
                                                    ?>
                                                            <span class="badge bg-warning">Accepted</span>
                                                    <?php
                                                        }
                                                        elseif($newrow['Status'] == 2)
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
                                                    </label>
                                                    <select name="stats" id="" class="form-control">
                                                        <option value="<?php  echo $newrow['Status'];  ?>">Choose</option>
                                                        <option value="1">Accepted</option>
                                                        <option value="2">Completed</option>
                                                        <option value="3">Cancel</option>
                                                    </select>
                                                    </div>
                                                </div>
                                            </div>
                                 
                                            
                                      
                                        
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <input type="submit" name="submit" class="btn btn-primary" value="Save"> 
                                        <a href="reservation.php" class="btn btn-inverse">Cancel</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
					
					
					
					
					
					
					
					
					
					
					
					
                </div>
       
            </div>
      
            <footer class="footer"> ?? 2022 - Le Bistro Information Management System</footer>
        
        </div>
      
    </div>
   
    <script src="js/lib/jquery/jquery.min.js"></script>
    <script src="js/lib/bootstrap/js/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/jquery.slimscroll.js"></script>
    <script src="js/sidebarmenu.js"></script>
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="js/custom.min.js"></script>

</body>

</html>