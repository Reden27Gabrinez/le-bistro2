<?php
include("../connection/connect.php");
error_reporting(0);
session_start();

mysqli_query($db,"DELETE FROM book WHERE id = '".$_GET['res_del']."'");
header("location:reservation.php");  

?>
