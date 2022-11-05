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
        #botam {
            height: 100%;/*Only for the demo.*/
            display: flex;
            justify-content: center;
            align-items: flex-end;
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
                        <p class="display-6 fw-bolder mt-2">ACCOUNT</p>
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

                        <div class="container">
                            <?php
                                session_start();
                                
                                if(isset($_SESSION['response']))
                                {
                            ?>
                                    <div class="alert alert-<?= $_SESSION['res_type']; ?> alert-dismissible text-center">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        <b><?= $_SESSION['response']; ?></b>
                                    </div>
                            <?php
                                }
                                unset($_SESSION['response']);
                            ?>
                        </div>

                        <?php
                                include_once('configuration/config.php');
                                $name  = $_SESSION['Name'];
                                $userid= $_SESSION['userid'];
                                $query = "SELECT * FROM users WHERE u_id = '$userid' ";
                                $stmt  = $conn->prepare($query);
                                $stmt  -> execute();
                                $result = $stmt->get_result();
                                while($row = $result->fetch_assoc())
                                {

                        ?>

                        <form action="class.php" method="POST">
                            <div class="form-group">
                                <div class="form-floating">
                                    <input type="hidden" name="userid" value="<?= $row['u_id']; ?>">
                                    <input required name="fname" type="text" id="fname" value="<?= $row['f_name']; ?>" placeholder="Name" class="form-control">
                                    <label for="fname">First Name</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-floating">
                                    <input required type="text" id="lname" value="<?= $row['l_name']; ?>" placeholder="Lname" name="lname" class="form-control">
                                    <label for="">Last Name</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-floating">
                                    <input required name="phone" type="number" value="<?= $row['phone']; ?>" id="number" placeholder="Phone Number" class="form-control">
                                    <label for="number">Phone Number</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-floating">
                                    <input required name="email" type="email" value="<?= $row['email']; ?>" id="email" placeholder="Email" class="form-control">
                                    <label for="email">Email</label>
                                </div>
                            </div>
                            <div class="form-group">  
                                <label for="address">Address</label>                          
                                <textarea required name="address" id="address" cols="30" rows="5" class="form-control"><?= $row['address']; ?></textarea>     
                            </div>
                            <div class="form-group">
                                <div class="form-floating">
                                    <input type="text" name="username" value="<?= $row['username']; ?>" required id="username" placeholder="username" class="form-control">
                                    <label for="meeting-time">Username</label>
                                </div>
                            </div>
                            <input name="update_profile" type="submit" value="Update" class="btn btn-success float-end">
                        </form>
                        <?php
                                }
                           

                            ?>

              
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