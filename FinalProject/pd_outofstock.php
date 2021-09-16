<?php require("conn.php");   ?> 
<?php require("bootstrapscrip.php");   ?> 
<html>

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->


    <title>สินค้าใกล้หมด</title>

</head>

<body>


<?php include 'header.php'; ?>

<div class="faidpage">

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
<td  align="center" width="10%">รหัสสินค้า</td> 
<td  align="center" width="15%">รูปตัวอย่าง</td>
<td  align="center" width="">ชื่อสินค้า</td>

<td  align="center" width="">ประเภทสินค้า</td>
<td  align="center" width="">จำนวน</td>
<td  align="center" width="">หน่วย</td>
<td  align="center" width="">ราคา</td>

</tr>

<?php
while ($dataResult = mysqli_fetch_assoc($dataQuery)) {
?>

<tr>
<td align="center"><?php echo $dataResult["productID"]; ?></td>
<td align="center"><img src="Picture/<?php echo $dataResult["productPic"]; ?>" width="100%"></td>
<td align="center"><?php echo $dataResult["productName"]; ?></td>

<td align="center"><?php echo $dataResult["productCategory"]; ?></td>
<td align="center"><?php echo $dataResult["remainUnit"]; ?></td>
<td align="center"><?php echo $dataResult["unit"]; ?></td>
<td align="center"><?php echo $dataResult["price"]; ?></td>




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
