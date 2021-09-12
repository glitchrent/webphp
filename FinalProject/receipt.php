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
$data = "SELECT *  FROM orderbill ORDER BY orderID DESC";
$dataQuery = mysqli_query($check, $data);
?>
<table class="table table-striped">
<tr>
    <td>รหัสใบเสร็จ</td>
    <td>วันที่ใบเสร็จ</td>
    <td>ราคา</td>
    <td></td>
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
<tr>

<?php } ?>

</table>
</div>

</div>

</body>

</html>
