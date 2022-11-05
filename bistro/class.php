<?php

    session_start();
    include('configuration/config.php');

    //register as user
    if(isset($_POST['register']))
    {
        $email      = $_POST['email'];
        $fname      = $_POST['fname'];
        $lname      = $_POST['lname'];
        $phone      = $_POST['phone'];
        $address    = $_POST['address'];
        $username   = $_POST['username'];
        $pass       = md5($_POST['password']);
        $status     = "1";

        $query  = "INSERT INTO users(username,f_name,l_name,email,phone,password,address,status) VALUES(?,?,?,?,?,?,?,?)";
        $stmt   = $conn->prepare($query);
        $stmt   -> bind_param("ssssssss",$username,$fname,$lname,$email,$phone,$pass,$address,$status);
        $stmt   -> execute();
        $stmt   -> close();

        header('location:login.php');
    }

    //login as user
    if(isset($_POST['login']))
    {
        $username = $_POST['username'];
        $pass     = md5($_POST['password']);

        $query    = mysqli_query($conn,"SELECT u_id,username,f_name,l_name,email,password FROM users WHERE username = '$username' && password = '$pass' ");
        $ret      = mysqli_fetch_array($query);

        if($ret>0)
        {
            $_SESSION['Name'] = $ret['f_name'];
            $_SESSION['LName'] = $ret['l_name'];
            $_SESSION['Email'] = $ret['email'];
            $_SESSION['userid'] = $ret['u_id'];
            header('location:menu.php');
        }
        else
        {
            header('location:login.php');
            $_SESSION['response']="Invalid Credentials";
            $_SESSION['res_type']="warning";
        }
    }

    //book user is logged in
    if(isset($_POST['booking']))
    {
        $name   = $_POST['name'];
        $phone  = $_POST['phone'];
        $email  = $_POST['email'];
        $address= $_POST['address'];
        $date   = $_POST['meeting_time'];
        $status = "0";
        $pref_food = $_POST['pref_food'];
        $occassion = $_POST['occassion'];
        $person_no = $_POST['person_no'];

        $query  = "INSERT INTO book(Name,Phone,Email,Address,Book_date,Status,Pref_food,Occasion,person_no) VALUES (?,?,?,?,?,?,?,?,?)";
        $stmt   = $conn->prepare($query);
        $stmt   -> bind_param("sssssssss",$name,$phone,$email,$address,$date,$status,$pref_food,$occassion,$person_no);
        $stmt   -> execute();
        $stmt   -> close();
        $conn   -> close();

        header('location:booking.php');
        $_SESSION['response']="Successfully Booked";
        $_SESSION['res_type']="success";
    }

    //delete booking
    if(isset($_GET['delete_book']))
    {
        $id = $_GET['delete_book'];

        $query = "DELETE FROM book WHERE id=?";
        $stmt  = $conn->prepare($query);
        $stmt  -> bind_param("i",$id);
        $stmt  -> execute();
        $stmt  -> close();

        header('location:booking.php');
        $_SESSION['response']="Successfully Deleted";
        $_SESSION['res_type']="warning";
    }

    //book user isn't logged in
    if(isset($_POST['booking2']))
    {
        $name   = $_POST['name'];
        $phone  = $_POST['phone'];
        $email  = $_POST['email'];
        $address= $_POST['address'];
        $date   = $_POST['meeting_time'];
        $status = "0";
        $pref_food = $_POST['pref_food'];
        $occassion = $_POST['occassion'];
        $person_no = $_POST['person_no'];


        $query  = "INSERT INTO book(Name,Phone,Email,Address,Book_date,Status,Pref_food,Occasion,person_no) VALUES (?,?,?,?,?,?,?,?,?)";
        $stmt   = $conn->prepare($query);
        $stmt   -> bind_param("sssssssss",$name,$phone,$email,$address,$date,$status,$pref_food,$occassion,$person_no);
        $stmt   -> execute();
        $stmt   -> close();
        $conn   -> close();

        header('location:booking2.php');
        $_SESSION['response']="Pls. Login to View book progress..";
        $_SESSION['res_type']="success";
    }

    //update user profile
    if(isset($_POST['update_profile']))
    {
        $fname   = $_POST['fname'];
        $lname   = $_POST['lname'];
        $phone   = $_POST['phone'];
        $email   = $_POST['email'];
        $address = $_POST['address'];
        $username= $_POST['username'];

        $id  = $_POST['userid'];

        $query = "UPDATE users SET username=?,f_name=?,l_name=?,email=?,phone=?,address=? WHERE u_id = ?";
        $stmt  = $conn->prepare($query);
        $stmt  -> bind_param("ssssssi",$username,$fname,$lname,$email,$phone,$address,$id);
        $stmt  -> execute();
        $stmt  -> close();
        $stmt  -> close();

        $_SESSION['response']="Updated Successfully!";
		$_SESSION['res_type']="success";
		header('location:profile.php');
    }
    //chaange user password
    if(isset($_POST['update_pass']))
    {
          $userid         = $_SESSION['userid'];
          $cpassword    = md5($_POST['currentpassword']);
          $newpassword  = md5($_POST['newpassword']);

          $query=mysqli_query($conn,"SELECT u_id FROM users WHERE u_id='$userid' AND password='$cpassword'");
          $row=mysqli_fetch_array($query);
          if($row>0)
          {
              $ret=mysqli_query($conn,"UPDATE users SET password='$newpassword' where u_id='$userid'");
              $_SESSION['response']="Your password successully changed!";
              $_SESSION['res_type']="success";
		      header('location:change-password.php');


          } 
          else 
          {
                $_SESSION['response']="Your current password is wrong!";
                $_SESSION['res_type']="danger";
		        header('location:change-password.php');
          }
    }

?>