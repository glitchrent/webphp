<?php require("conn.php");   ?> 
<?php require("bootstrapscrip.php");   ?> 
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->

    <title>ข้อมูลใบเสร็จ</title>

<style type="text/css"> 
@media print 
{ 
#non-printable { display: none; } 
#printable { display: block; } 
} 
</style> 

</head>

<body>



<div id="non-printable">

<div style="width:80%; margin:0px auto;"> 

<input type="button" class="btn btn-outline-info" value="ปริ้นใบเสร็จ" onclick="window.print()">
<a href="receipt.php"><input type="button" class="btn btn-outline-danger" value="ย้อนกลับ"></a>

</div>
<br>

</div>


<?php 
$id=$_GET["id"];
$data = "SELECT orderbill.orderID, report.productName, report.totalunp, report.date, report.exportunit, orderbill.total
FROM report 
INNER JOIN orderbill ON orderbill.date=report.date WHERE orderID=$id";
$dataQuery = mysqli_query($check,$data);

?>

<?php

$data2="SELECT * FROM orderbill WHERE orderID=$id";
$dataQuery2 = mysqli_query($check, $data2);
$dataOrder = mysqli_fetch_assoc($dataQuery2)

?>

<div class="faidpage">

<div id="printable">
<div style="width:80%; margin:0px auto;"> 

<table border="1" align="center" class="table"> 
<tr>
<td>รหัสออเดอร์</td>
<td>วันที่สั่งซื้อ</td>
</tr>


<tr>
<td><?php echo $dataOrder['orderID']?></td>
<td><?php echo $dataOrder['date']?></td>
</tr>

</table>

<table border="1" align="center" class="table"> 

<tr>
    <td>ลำดับ</td>
    <td>ชื่อสินค้า</td>
    <td>จำนวน</td>
    <td>ราคา</td>
    <td >ราคารวมต่อชิ้น</td>
    <td></td>
</tr>

<?php
$n=0;
while ($dataResult = mysqli_fetch_assoc($dataQuery)) {
    $n++
?>

<tr>
<td ><?php echo $n;?></td>
<td ><?php echo $dataResult["productName"];?></td>
<td ><?php echo $dataResult["exportunit"];?></td>
<td ><?php echo $dataResult["totalunp"]/$dataResult["exportunit"];?></td>
<td ><?php echo $dataResult["totalunp"];?></td>
<td align="left">บาท</td>
</tr>

<?php } ?>

<tr>
<td colspan="3"></td>
<td>ราคารวมทั้งหมด : </td>
<td><?php echo $dataOrder['total']?></td>
<td >บาท</td>
</tr>
</table>

</div>
</div>

</div>

</body>

</html>
