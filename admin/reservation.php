<!DOCTYPE html>
<html lang="en">
<?php
include("../connection/connect.php");
error_reporting(0);
session_start();

?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Reservation</title>
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/logo.png">

    <?php include("links_modal.php"); ?>
</head>

<body class="fix-header fix-sidebar">
 
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
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-archive f-s-20 color-warning"></i><span class="hide-menu">Categories</span></a>
                            <ul aria-expanded="false" class="collapse">
								<li><a href="all_restaurant.php">All Categories</a></li>
								<!-- <li><a href="add_category.php">Add Category</a></li> -->
                                <li><a href="add_restaurant.php">Add Category</a></li>
                                
                            </ul>
                        </li>
                       <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-cutlery" aria-hidden="true"></i><span class="hide-menu">Menu</span></a>
                            <ul aria-expanded="false" class="collapse">
								<li><a href="all_menu.php">All Menues</a></li>
								<li><a href="add_menu.php">Add Menu</a></li>
                              
                                
                            </ul>
                        </li>
						 <!-- <li> <a href="all_orders.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span>Orders</span></a></li> -->
                         <li> <a href="reservation.php"><i class="fa fa-table" aria-hidden="true"></i><span>Reservation</span></a></li>
                         <li> <a id="modal-btn"><i class="fa fa-bar-chart" aria-hidden="true"></i><span>Reports</span></a></li>
                            <?php include("reports_modals.php"); ?>
                         <li> <a href="table.php"><i class="fa fa-table" aria-hidden="true"></i><span>Table</span></a></li>
                         <li> <a href="backup/backupCloud.php"><i class="fa fa-database" aria-hidden="true"></i><span>Back-up Database</span></a></li>
                         
                    </ul>
                </nav>
         
            </div>
         
        </div>

        <div class="page-wrapper">
     
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        
                        <div class="col-lg-12">
                        <div class="card card-outline-primary">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Reservation</h4>
                            </div>
                             
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped table-hover">
                                    <thead class="thead-dark text-center">
                                            <tr>
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>Address</th>
                                                <th>Book Date</th>
												<th>Status</th>												
												<th>Preferred Food</th>
                                                <th>Occasion</th>
                                                <th>No. of Persons</th>
                                                <th>Book At</th>
                                                <th>Updated At</th>
												  <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           
											
											<?php
												$sql="SELECT * FROM book order by id desc";
												$query=mysqli_query($db,$sql);
												
													if(!mysqli_num_rows($query) > 0 )
														{
															echo '<td colspan="7"><center>No Users</center></td>';
														}
													else
														{				
																	while($rows=mysqli_fetch_array($query))
																		{
																					
																			?>
																			<?php	
																				
																					echo ' <tr><td>'.$rows['Name'].'</td>
																								<td>'.$rows['Phone'].'</td>
																								<td>'.$rows['Email'].'</td>
																								<td>'.$rows['Address'].'</td>
																								<td>'.$rows['Book_date'].'</td>';
                                                                            ?>
                                                                            <?php 
                                                                                $status=$rows['Status'];
                                                                                if($status==0)
                                                                                {
																			?>
                                                                                 <td><span class="badge bg-warning text-white">Pending</span></td>
                                                                            <?php 
																			    } 
                                                                                elseif($status == 1)
                                                                                {
																			?>
                                                                                    <td><span class="badge bg-success text-white">Accepted</span></td>
                                                                            <?php
                                                                                }
                                                                                elseif($status == 2)
                                                                                {
                                                                            ?>
                                                                                    <td><span class="badge bg-success">Completed</span></td>
                                                                            <?php
                                                                                }
                                                                                else
                                                                                {
                                                                            ?>
                                                                                    <td><span class="badge bg-danger">Cancelled</span></td>
                                                                            <?php
                                                                                }

                                                                            ?>

																					
                                                                            <?php	
																				
                                                                                echo '
																								<td>'.$rows['Pref_food'].'</td>
																								<td>'.$rows['Occasion'].'</td>
																								<td>'.$rows['person_no'].'</td>
																								<td>'.$rows['Booked_at'].'</td>
																								<td>'.$rows['Updated_at'].'</td>
																									 <td><a href="delete_reservation.php?res_del='.$rows['id'].'" class="btn btn-danger btn-flat btn-addon btn-xs m-b-10"><i class="fa fa-trash-o" style="font-size:16px"></i></a> 
																									 <a href="update_reservation.php?user_upd='.$rows['id'].'" " class="btn btn-info btn-flat btn-addon btn-sm m-b-10 m-l-5"><i class="fa fa-edit"></i></a>
																									</td></tr>';
                                                                          
																		}	
														}
											?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
						 </div>
                      
                            </div>
                        </div>
                    </div>
                </div>
             
            </div>
            <!-- <footer class="footer"> © 2022 - Le Bistro Information Management System</footer> -->
           
        </div>
     
    </div>
    
    <script src="js/lib/jquery/jquery.min.js"></script>>
    <script src="js/lib/bootstrap/js/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/jquery.slimscroll.js"></script>
    <script src="js/sidebarmenu.js"></script>
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="js/custom.min.js"></script>

    
</body>

</html>