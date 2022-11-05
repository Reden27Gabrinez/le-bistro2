<?php
include("../connection/connect.php");
error_reporting(0);
session_start();
if(empty($_SESSION["adm_id"]))
{
	header('location:index.php');
}
else
{
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le Bistro Reservation Report</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
        <div class="container">



        <div class="text-center">
            <!-- <img src="image/logo/im.gif"  width="200" height="200" alt=""> -->
            <h1 style="font-weight: 900; font-size: 2em; margin-top:1.5em;">Le Bistro Reservation</h1>
            <!-- <h3 class="card-title">Reports</h3> -->
            <?php
                    $fdate=$_POST['fromdate'];
                    $tdate=$_POST['todate'];
            ?>
            
                <h5 align="center" style="color:blue; margin-bottom: 3em;">Reports from <?php echo $fdate?> to
                    <?php echo $tdate?></h5>
                <hr />
        </div>



            <table class="table table-bordered">
                <thead>
                    <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Book Date</th>
                    <th scope="col">No. of Person</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $stmt = $db->prepare("SELECT * FROM book WHERE date(Updated_at) between '$fdate' and '$tdate' ORDER BY Updated_at DESC ");
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $counter = 0;
                    while ($row = $result->fetch_assoc()):
                        
                        if($row['Status'] == 2)
                        {
                            $counter++;

                ?>
                    <tr>
                    <th scope="row"><?= $counter; ?></th>
                    <td><?= $row['Name'] ?></td>
                    <td><?= $row['Phone'] ?></td>
                    <td><?= $row['Book_date'] ?></</td>
                    <td><?= $row['person_no'] ?></td>
                    
                    </tr>
                    <tr>
                <?php } endwhile; ?>
                </tbody>
            </table>
        </div>

        <div class="text-center" style="margin-bottom: 5em;">
            <button onclick="window.print();" class="btn btn-primary" id="print-btn">Print Record</button>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>





<?php 
    }
?>