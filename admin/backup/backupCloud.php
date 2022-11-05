<?php
// include('../config.php');
// include_once('Mysqldump/Mysqldump.php');
// include('smtp/PHPMailerAutoload.php');
// $dump = new Ifsnop\Mysqldump\Mysqldump('mysql:host=localhost;dbname=pnp_db', 'root', '');
// $f=date('d-m-Y');
// $dump->start("sql_dump/$f.sql");


// $mail=new PHPMailer(true);
// $mail->isSMTP();
// $mail->Host="smtp.gmail.com";
// $mail->Port=587;
// $mail->SMTPSecure="tls";
// $mail->SMTPAuth=true;
// $mail->Username="redgabrinez@gmail.com";
// $mail->Password="segxejasjwfgpaty";
// $mail->SetFrom("redgabrinez@gmail.com");
// $mail->addAddress('redgabrinez@gmail.com');
// $mail->IsHTML(true);
// $mail->Subject="Website Backup ".$f;
// $mail->Body="Website Backup";
// $mail->AddAttachment("sql_dump/$f.sql");
// $mail->SMTPOptions=array('ssl'=>array(
// 	'verify_peer'=>false,
// 	'verify_peer_name'=>false,
// 	'allow_self_signed'=>false
// ));
// if($mail->send()){
// 	echo '<script type="text/javascript">';
// 	echo ' alert("Successfully Backup to your Email")';  
// 	echo '</script>';

// 	$nameUser       = $_SESSION['name'];
// 	$query2	= "INSERT INTO logs (User,Purpose) VALUES ('$nameUser','$f | Database Backup')";
// 	$logs = mysqli_query($conn,$query2);

// }else{
// 	echo "Error occur";
// }
// header('location:../index.php');

include('../../connection/connect.php');
include_once('Mysqldump/Mysqldump.php');
include('smtp/PHPMailerAutoload.php');
$dump = new Ifsnop\Mysqldump\Mysqldump('mysql:host=localhost;dbname=onlinefoodphp', 'root', '');
$f=date('d-m-Y');
$dump->start("sql_dump/$f.sql");


$mail=new PHPMailer(true);
$mail->isSMTP();
$mail->Host="smtp.gmail.com";
$mail->Port=587;
$mail->SMTPSecure="tls";
$mail->SMTPAuth=true;
$mail->Username="lebistroims@gmail.com";
$mail->Password="hauoboihdjgxcvix";
$mail->SetFrom("lebistroims@gmail.com");
$mail->addAddress('lebistroims@gmail.com');
$mail->IsHTML(true);
$mail->Subject="Le Bistro Backup ".$f;
$mail->Body="Backup";
$mail->AddAttachment("sql_dump/$f.sql");
$mail->SMTPOptions=array('ssl'=>array(
	'verify_peer'=>false,
	'verify_peer_name'=>false,
	'allow_self_signed'=>false
));
if($mail->send()){
	echo '<script type="text/javascript">';
	echo ' alert("Successfully Backup to your Email")';  //not showing an alert box.
	echo '</script>';


}else{
	echo "Error occur";
}
header('location:../dashboard.php');
?>