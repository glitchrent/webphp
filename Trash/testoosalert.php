<?php require("conn.php");   ?> 
<html>

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="theme.css">

    <title>Dashboard</title>

</head>

<body>


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
<td  align="center" width="40%">ชื่อสินค้า</td>
<td  align="center" width="15%">ประเภทสินค้า</td>
<td  align="center" width="10%">จำนวน</td>
<td  align="center" width="10%">หน่วย</td>
<td  align="center" width="5%">ราคา</td>
<td  align="center" width="10%"></td>
<td  align="center" width="5%"></td>
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

<td>
<a href = "product_upd.php?id=<?php echo $dataResult["productID"];?>">
<button type="button" class="btn btn-outline-info">แก้ไขข้อมูล</button></a>
</td>


<td>
<a href = "product_processdel.php?iddel=<?php echo $dataResult["productID"];?>">
<button type="button" class="btn btn-outline-danger">ลบ</button></a>
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
