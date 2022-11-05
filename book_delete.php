<?php 

        include("bistro/configuration/config.php");

        //delete booking
        if(isset($_GET['delete_book']))
        {
            $id = $_GET['delete_book'];
    
            $query = "DELETE FROM book WHERE id=?";
            $stmt  = $conn->prepare($query);
            $stmt  -> bind_param("i",$id);
            $stmt  -> execute();
            $stmt  -> close();
    
            header('location:book.php');
            $_SESSION['response']="Successfully Deleted";
            $_SESSION['res_type']="warning";
        }

?>