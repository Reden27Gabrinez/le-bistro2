<?php 
 
// Load the database configuration file 
include_once '../connection/connect.php'; 
 
// Fetch records from database 
$query = $db->query("SELECT CONCAT(a.l_name,', ',a.f_name) AS Customer, b.title AS Title, b.quantity AS Quantity, b.price AS Price, b.date AS oDate  FROM users as a INNER JOIN users_orders AS b ON b.u_id = a.u_id WHERE b.status = 'closed' "); 
 
if($query->num_rows > 0){ 
    $delimiter = ","; 
    $filename = "Orders-data_" . date('Y-m-d') . ".csv"; 
     
    // Create a file pointer 
    $f = fopen('php://memory', 'w'); 
     
    // Set column headers 
    $fields = array('CUSTOMER', 'TITLE', 'QUANTITY', 'PRICE', 'DATE ADDED'); 
    fputcsv($f, $fields, $delimiter); 
     
    // Output each row of the data, format line as csv and write to file pointer 
    while($row = $query->fetch_assoc()){ 
        $lineData = array($row['Customer'], $row['Title'], $row['Quantity'], $row['Price'], $row['oDate']); 
        fputcsv($f, $lineData, $delimiter); 
    } 
     
    // Move back to beginning of file 
    fseek($f, 0); 
     
    // Set headers to download file rather than displayed 
    header('Content-Type: text/csv'); 
    header('Content-Disposition: attachment; filename="' . $filename . '";'); 
     
    //output all remaining data on a file pointer 
    fpassthru($f); 
} 
exit; 
 
?>