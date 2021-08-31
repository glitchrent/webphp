<?php require("conn.php");   ?> 
<?php require("bootstrapscrip.php");   ?> 
<html>

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->


    <title>ตัดสต๊อกสินค้า</title>

</head>

<body>


<?php include 'header.php'; ?>


<br>

<!-- body ######################################################################################   -->

<?php

$search=isset($_GET['search']) ? $_GET['search']:'';

$data = "SELECT *  FROM product WHERE productName Like '%$search%'";
$dataQuery = mysqli_query($check, $data);

?>


<div style="width:80%; margin:0px auto;"> 


<form class="d-flex" method="get" id="form" enctype="multipart/form-data" action="" >

<div>
  <table>
    <tr>
      <a href="od_list.php">ออร์เดอร์สินค้า</a>
</tr>
<tr>
  
<td><input class="form-control"  placeholder="พิมพ์ชื่อสินค้าที่ต้องการค้นหา" type="text" name="search" value=""></td>
<td><input class="btn btn-success" type="submit" value="ค้นหา"></td>
      </tr>
</table>
</div>


</form>

<table class="table table-striped">

<tr>
<td  align="center" width="">รหัสสินค้า</td> 
<td  align="center" width="">ชื่อสินค้า</td>
<td  align="center" width="">ประเภทสินค้า</td>
<td  align="center" width="">จำนวน</td>
<td  align="center" width="">หน่วย</td>
<td  align="center" width="">ราคา</td>
<td  align="center" width="10%"></td>
</tr>

<?php
while ($dataResult = mysqli_fetch_assoc($dataQuery)) {
?>

<tr>
<td align="center"><?php echo $dataResult["productID"]; ?></td>
<td align="center"><?php echo $dataResult["productName"]; ?></td>
<td align="center"><?php echo $dataResult["productCategory"]; ?></td>
<td align="center"><?php echo $dataResult["remainUnit"]; ?></td>
<td align="center"><?php echo $dataResult["unit"]; ?></td>
<td align="center"><?php echo $dataResult["price"]; ?></td>
<td align="center">
<a href = "hide_od_ins.php?id=<?php echo $dataResult["productID"];?>">
<button type="button" class="btn btn-outline-info">เพิ่มสินค้า</button></a>
</td>

</tr>

<?php
  }   
?>

</table>

</div>

<!-- body -->
</body>

</html>
