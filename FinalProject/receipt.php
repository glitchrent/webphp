<?php require("conn.php");   ?> 
<?php require("bootstrapscrip.php");   ?> 
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->


    <title>ใบเสร็จ</title>
</head>

<body>

<?php include 'header.php'; ?>

<div class="faidpage">

<br>
<div style="width:80%; margin:0px auto;"> 
<?php 

$searchdate=isset($_GET['searchdate']) ? $_GET['searchdate']:'';

$data = "SELECT *  FROM orderbill WHERE date Like '%$searchdate%' ORDER BY orderID DESC";
$dataQuery = mysqli_query($check, $data);
?>

<div class ="nav justify-content-end">
<form class="d-flex" method="get" id="form" enctype="multipart/form-data" action="" >
<div class="col-auto me-3">
      <table>
      <tr>
      <td><input class="form-control"  placeholder="" type="date" name="searchdate" value=""></td>
</tr>
</table>
</div>
<div class="col-sm">
      <input class="btn btn-success" type="submit" value="ค้นหา">
</div>
</form>
</div>


<table class="table table-striped">
<tr>
    <td>รหัสใบเสร็จ</td>
    <td>วันที่ใบเสร็จ</td>
    <td>ราคา</td>
    <td width="5%"></td>
    <td width="5%"></td>
</tr>

<?php
while ($dataResult = mysqli_fetch_assoc($dataQuery)) {
?>

<tr>
<td><?php echo $dataResult["orderID"];?></td>
<td><?php echo $dataResult["date"];?></td>
<td><?php echo $dataResult["total"];?></td>
<td>
<a href = "receipt_detail.php?id=<?php echo $dataResult["orderID"];?>">
    <input type="button" class="btn btn-outline-info" value="ดูใบเสร็จ">
</a>
</td>
<td>
 <a href = "receipt_del_pc.php?iddel=<?php echo $dataResult["orderID"];?>">
<button type="button" class="btn btn-outline-danger">ลบ</button></a>
 </td>
<tr>

<?php } ?>

</table>
</div>

</div>

</body>

</html>
