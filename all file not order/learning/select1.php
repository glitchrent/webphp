<?php

$servername= 'localhost';
$username = 'root';
$password = 'root';
$dbname = 'dbemp';

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn) {
    die("Connection : failed (เชื่อมไม่สำเร็จ)" . mysqli_connect_error());
} else {
    echo "Connection : OK (เชื่อมสำเร็จ)" ;
}

//mysqli_set_charset($conn, "utf8");
//mysqli_close($conn); //ปิดฐานข้อมูล
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Format</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="mystyle.css">
    </head>
    <body>
    <?php
    $sql = 'SELECT * FROM employee';
    $objQuery = mysqli_query($conn, $sql) or die("Error Query [". $sql ."]");
    ?>
    <table>
    <tr>
    <th>
    <div>No</div>
    </th>
    <th>
    <div>EmployeeID</div>
    </th>
    <th>
    <div>Title</div>
    </th>
    <th>
    <div>Name</div>
    </th>
    <th>
    <div>Salary</div>
    </th>
    <th>
    <div>DapartmentID</div>
    </th>
    </tr>
    </body>
    
    <?php
    mysqli_close($conn);
    ?>

</html>