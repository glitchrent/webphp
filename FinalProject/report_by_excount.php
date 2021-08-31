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


<br>

<div style="width:80%; margin:0px auto;"> 
<?php 
$data = "SELECT productName,imstatus,exportunit,SUM(IF(imstatus='ส่งออก',exportunit,NULL)) AS expsumall FROM report WHERE productID GROUP BY productName ORDER BY expsumall DESC";
$dataQuery = mysqli_query($check,$data);

?>

<table class="table table-striped">

<tr>
<td align="center">ชื่อสินค้า</td>
<td align="center">จำนวนสั่งซื้อทั้งหมด</td>
</tr>

<?php
while ($dataResult = mysqli_fetch_assoc($dataQuery)) {
?>

<tr>
<td align="center"><?php echo $dataResult["productName"];?></td>
<td align="center"><?php echo $dataResult["expsumall"]; ?></td>
</tr>

<?php } ?>
</table>

</div>
</body>
</html>