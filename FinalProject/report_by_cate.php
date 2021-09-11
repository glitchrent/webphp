<?php require("conn.php");   ?> 
<?php require("bootstrapscrip.php");   ?> 

<?php /*
$data = "SELECT productName,imstatus,exportunit,SUM(exportunit) exportunit FROM report WHERE productID GROUP BY productName";
$dataQuery = mysqli_query($check,$data);
*/
?>
<html>
    <head><title>รายงานตามยอดขาย</title></head>
<body>


<?php include 'header.php'; ?>

<div class="faidpage">

<br>

<div style="width:80%; margin:0px auto;"> 
<?php 
$data = "SELECT productName,productCategory,imstatus,exportunit,SUM(IF(imstatus='ส่งออก',exportunit,NULL)) AS expsumall FROM report WHERE productID GROUP BY productCategory ORDER BY expsumall DESC";
$dataQuery = mysqli_query($check,$data);

?>

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