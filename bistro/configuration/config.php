<?php
    const DBHOST = 'localhost';
    const DBUSER = 'root';
    const DBPASS = '';
    const DBNAME = 'onlinefoodphp';

    $conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);

    if($conn->connect_error)
    {
        die('Could Not connect to the Database!' . $conn->connect_error);
    }
?>