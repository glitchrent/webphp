<?php require("conn.php");   ?> 
<?php require("bootstrapscrip.php");   ?> 
<html>

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
       <link rel="stylesheet" type="text/css" href="theme.css">

    <title>สินค้าใกล้หมด</title>

</head>

<body>


<?php include 'header.php'; ?>

<br>

<!-- body ######################################################################################   -->

<?php


$data = "SELECT *  FROM product WHERE remainUnit <= 10 ";
$dataQuery = mysqli_query($check, $data);

?>



<div style="width:80%; margin:0px auto;"> 



<div class ="nav justify-content-end">
<form class="d-flex" method="get" id="form" enctype="multipart/form-data" action="" >
<div class="col-auto me-3">
      <input class="form-control"  placeholder="พิมพ์ชื่อสินค้าที่ต้องการค้นหา" type="text" name="search" value="">
</div>
<div class="col-sm">
      <input class="btn btn-success" type="submit" value="ค้นหา">
</div>
</form>
</div>




<table class="table table-striped">

<tr>
<td>รหัสสินค้า</td> 
<td>ชื่อสินค้า</td>
<td>ประเภทสินค้า</td>
<td>จำนวน</td>
<td>หน่วย</td>
<td>ราคา</td>

</tr>

<?php
while ($dataResult = mysqli_fetch_assoc($dataQuery)) {
?>

<tr>
<td><?php echo $dataResult["productID"]; ?></td>
<td><?php echo $dataResult["productName"]; ?></td>
<td><?php echo $dataResult["productCategory"]; ?></td>
<td><?php echo $dataResult["remainUnit"]; ?></td>
<td><?php echo $dataResult["unit"]; ?></td>
<td><?php echo $dataResult["price"]; ?></td>




</tr>

<?php
  }   
?>

</table>

</div>

<!-- body -->
</body>

</html>
