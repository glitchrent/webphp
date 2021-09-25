<?php require("conn.php");   ?> 
<?php require("bootstrapscrip.php");   ?> 
<?php require("header.php");   ?> 


<div class="faidpage">

<center>
<div style="width:80%">

<br>
จัดการใบสั่งซื้อ

<br>
<br>
<?php  


$data = "SELECT *  FROM cuspo WHERE postatus = 'ยืนยันแล้ว'";
$dataQuery = mysqli_query($check, $data);
?>

<div align="right"><a href="poconf_list.php">ย้อนกลับ</a></div>
<table border="1"  class="table table-striped">

<tr>
<td align="center">รหัสใบสั่งซื้อ</td>
<td align="center">วันที่</td>
<td align="center">ชื่อ</td>
<td align="center">นามสกุล</td>
<td align="center">เบอร์โทร</td>
<td align="center">ที่อยู่</td>
<td align="center">สถานะ</td>
<td align="center">รหัสลูกค้า</td>
<td align="center"></td>
<td align="center"></td>
</tr>


<?php
while($dataResult = mysqli_fetch_array($dataQuery))
{

?>
<tr>
<td align="center"><?php echo $dataResult["poID"]; ?></td>
<td align="center"><?php echo $dataResult["poDate"]; ?></td>
<td align="center"><?php echo $dataResult["name"]; ?></td>
<td align="center"><?php echo $dataResult["surname"]; ?></td>
<td align="center"><?php echo $dataResult["tel"]; ?></td>
<td align="center"><?php echo $dataResult["address"]; ?></td>
<td align="center"><?php echo $dataResult["postatus"]; ?></td>
<td align="center"><?php echo $dataResult["cusID"]; ?></td>
<td>

<a href = "poconf_recdetail.php?id=<?php echo $dataResult["poID"];?>">
    <input type="button" class="btn btn-outline-primary" value="ดูใบเสร็จ">
</a>

</td>

<td>

<a href = "poconf_upd.php?id=<?php echo $dataResult["poID"];?>">

</a>


</td>
<tr>

<?php
}

?>
</table>

</div>
</div>