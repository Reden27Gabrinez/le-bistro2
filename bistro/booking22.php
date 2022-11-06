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
                        <p class="display-6 fw-bolder mt-2">BOOKING</p>
                    </div>
                    <div class="col-6">
                        <div class="dropdown show">
                            <a href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="image/bg1.png" alt="" width="50" height="50" class="my-2 float-end rounded-circle">
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a href="register.php" class="dropdown-item" href="#">Sign up</a>
                                <a href="login.php" class="dropdown-item" href="#">Sign in</a>
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

                        <form action="class.php" method="POST">
                            <div class="form-group">
                                <div class="form-floating">
                                    <input required name="name" type="text" id="name" placeholder="Name" class="form-control">
                                    <label for="name">Name</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-floating">
                                    <input required name="phone" type="number" id="number" placeholder="Phone Number" class="form-control">
                                    <label for="number">Phone Number</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-floating">
                                    <input required name="email" type="email" id="email" placeholder="Email" class="form-control">
                                    <label for="email">Email</label>
                                </div>
                            </div>
                            <div class="form-group">  
                                <label for="address">Address</label>                          
                                <textarea required name="address" id="address" cols="30" rows="5" class="form-control"></textarea>     
                            </div>
                            <div class="form-group">
                                <div class="form-floating">
                                    <input type="datetime-local" id="meeting-time"
                                    name="meeting_time" value="1998-01-27T19:30"
                                    min="1998-01-27T00:00" max="2050-06-14T00:00" placeholder="Date" class="form-control">
                                    <label for="meeting-time">Date</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-floating">
                                    <input required name="pref_food" type="text" id="pref_food" placeholder="pref_food" class="form-control">
                                    <label for="pref_food">Preferred Food</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-floating">
                                    <input required name="occassion" type="text" id="occassion" placeholder="occassion" class="form-control">
                                    <label for="occassion">Occassion</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-floating">
                                    <input required name="person_no" type="number" id="person_no" placeholder="person_no" class="form-control">
                                    <label for="person_no">No. of Person</label>
                                </div>
                            </div>
                            <input name="booking2" type="submit" value="Book" class="btn btn-success float-end">
                        </form>
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