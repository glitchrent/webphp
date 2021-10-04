<?php require("conn.php");   ?> 
<?php require("bootstrapscrip.php");   ?> 

<html>



<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->


    <title>แก้ไขข้อมูลสินค้า</title>

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

$data2 = "SELECT *  FROM pdcategory ";
$dataQuery2 = mysqli_query($check, $data2);

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
<td  align="center" width="10%"></td>

</tr>

<?php
while ($dataResult = mysqli_fetch_assoc($dataQuery)) {
?>

<tr>
<td align="center"><?php echo $dataResult["productID"]; ?></td>
<td><img src="../FinalProject/Picture/<?php echo $dataResult["productPic"]; ?>" width="100%"></td>
<td align="center"><?php echo $dataResult["productName"]; ?></td>

<td align="center"><?php echo $dataResult["productCategory"]; ?></td>


<td align="center">
<a href = "c_product_detail_edit.php?id=<?php echo $dataResult["productID"];?>">
<button type="button" class="btn btn-outline-info">แก้ไขข้อมูล <br>รายละเอียดสินค้า</button></a>
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
