<?php require("connect.php");   ?> 
<?php
    session_start();

    if (!isset($_SESSION['username'])) {
        header('location: login.php');

    }


    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }


?>



<!DOCTYPE html>
<html>
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    

    <title>Format</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Project\mystyle.css">
    </head>
    <body>




    <a href="product_info.php?logout='1'">ออกจากระบบ</a>

<a href = "product_insert.php"> insert page </a> <br> <br>

<form method="get" id="form" enctype="multipart/form-data" action="" >

พิมพ์ชื่อสินค้าที่ต้องการค้นหา <input type="text" name="search" value="">
<input type="submit" value="ค้นหา">

</form>
<?php

$search=isset($_GET['search']) ? $_GET['search']:'';

$data = "SELECT *  FROM product WHERE productName Like '%$search%'";
$dataQuery = mysqli_query($check, $data);

?>

<table class="table table-striped">

<tr>

<td>รหัสสินค้า</td> 
<td>ชื่อสินค้า</td>
<td>ประเภทสินค้า</td>
<td>จำนวนที่เหลือ</td>
<td>ราคาต้นทุน</td>
<td>ราคาขาย</td>
<td></td>
<td></td>

</tr>

<?php

while ($dataResult = mysqli_fetch_assoc($dataQuery)) {
?>

<tr>

<td> <?php echo $dataResult["productID"]; ?> </td>
<td> <?php echo $dataResult["productName"]; ?> </td>
<td> <?php echo $dataResult["productCategory"]; ?> </td>
<td> <?php echo $dataResult["remainUnit"]; ?> </td>
<td> <?php echo $dataResult["costprice"]; ?> </td>
<td> <?php echo $dataResult["saleprice"]; ?> </td>
<td><a href = "product_update.php?id=<?php echo $dataResult["productID"];?>">Update</a></td>
<td><a href = "product_processdel.php?iddel=<?php echo $dataResult["productID"];?>">Del</a></td>
</tr>




<?php  }   ?>

</table>


    </body>
</html>