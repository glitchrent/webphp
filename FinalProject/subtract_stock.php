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

<div class="faidpage">

<br>

<!-- body ######################################################################################   -->

<?php

$search=isset($_GET['search']) ? $_GET['search']:'';

$data = "SELECT *  FROM product WHERE productName Like '%$search%'";
$dataQuery = mysqli_query($check, $data);

?>

<?php

$outofstockcheck = " SELECT * FROM cart ";
$outofresult = mysqli_query($check, $outofstockcheck) or die(mysqli_error());
$countstock = mysqli_num_rows($outofresult);

?>

<div style="width:80%; margin:0px auto;"> 

<a href="od_list.php">ออร์เดอร์สินค้า ( <?php echo $countstock ?> รายการ )</a>


<div class ="nav justify-content-end">
<form class="d-flex" method="get" id="form" enctype="multipart/form-data" action="" >
<div class="col-auto me-3">
      <input class="form-control"  placeholder="พิมพ์ชื่อที่ต้องการค้นหา" type="text" name="search" value="">
</div>
<div class="col-sm">
      <input class="btn btn-success" type="submit" value="ค้นหา">
</div>
</form>
</div>

</form>

<table class="table table-striped">

<tr>
<td  align="center" width="">รหัสสินค้า</td> 
<td  align="center" width="">ชื่อสินค้า</td>
<td  align="center" width="10%">รูปตัวอย่าง</td>
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
<td><img src="Picture/<?php echo $dataResult["productPic"]; ?>" width="100%"></td>
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
</div>
<!-- body -->
</body>

</html>
