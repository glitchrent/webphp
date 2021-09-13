<?php require("conn.php");   ?> 
<?php require("bootstrapscrip.php");   ?> 

<?php /*
$data = "SELECT productName,imstatus,exportunit,SUM(exportunit) exportunit FROM report WHERE productID GROUP BY productName";
$dataQuery = mysqli_query($check,$data);
*/
?>
<html>
    <head><title>รายงานตามประเภท</title></head>
<body>


<?php include 'header.php'; ?>

<div class="faidpage">

<br>

<div style="width:80%; margin:0px auto;"> 
<?php 

$search=isset($_GET['search']) ? $_GET['search']:'';

$data = "SELECT productName,productCategory,imstatus,exportunit,SUM(IF(imstatus='ส่งออก',exportunit,NULL)) AS expsumall FROM report WHERE productCategory Like '%$search%'  GROUP BY productCategory ORDER BY expsumall DESC";
$dataQuery = mysqli_query($check,$data);

?>

<div class ="nav justify-content-end">
<form class="d-flex" method="get" id="form" enctype="multipart/form-data" action="" >
<div class="col-auto me-3">
      <input class="form-control"  placeholder="พิมพ์ชื่อประเภทที่ต้องการค้นหา" type="text" name="search" value="">
</div>
<div class="col-sm">
      <input class="btn btn-success" type="submit" value="ค้นหา">
</div>
</form>
</div>

<table class="table table-striped">

<tr>
<td align="center">ประเภทสินค้า</td>
<td align="center">จำนวนสั่งซื้อทั้งหมด</td>
</tr>

<?php
while ($dataResult = mysqli_fetch_assoc($dataQuery)) {
?>

<tr>
<td align="center"><?php echo $dataResult["productCategory"];?></td>
<td align="center"><?php echo $dataResult["expsumall"]; ?></td>
</tr>

<?php } ?>

</table>

</div>
</div>
</body>
</html>