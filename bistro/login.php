<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-image {
  /* The image used */
  background-image: url("image/bg1.png");
  
  /* Add the blur effect */
  filter: blur(8px);
  -webkit-filter: blur(8px);
  
  /* Full height */
  height: 100%; 
  
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* Position text in the middle of the page/image */
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
  text-align: center;
}
</style>
</head>
<body>

<div class="bg-image"></div>
                          
<div class="bg-text rounded">
      <div class="">
        <?php
            session_start();
            
            if(isset($_SESSION['response']))
            {
        ?>
                <div class="text-center alert alert-<?= $_SESSION['res_type']; ?> alert-dismissible text-center">
                    <b><?= $_SESSION['response']; ?></b>
                </div>
        <?php
            }
            unset($_SESSION['response']);
        ?>
    </div>
  <h1 class="fw-bolder" style="font-size:40px; color:orange;">Login</h1>
  <form action="class.php" method="POST">
    <div class="form-group">
            <input required name="username" type="text" class="form-control rounded-pill" id="user" placeholder="Username">
      </div>
      <br>

      <div class="form-group">
            <input required name="password" type="password"  class="form-control rounded-pill" id="user" placeholder="Password">
      </div>

      <input name="login" type="submit" class="btn btn-success mt-3 ml-3">
  </form>
</div>

<script src="assets/bootstrap/bootstrap.bundle.min.js"></script>

</body>
</html>
