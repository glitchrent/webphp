<?php require("conn.php");   ?> 
<?php require("bootstrapscrip.php");   ?> 



<div class="faidpage">

<center>
<div style="width:80%">

<br>
จัดการใบสั่งซื้อ

<br>

<?php  


$data = "SELECT *  FROM cuspo ";
$dataQuery = mysqli_query($check, $data);
?>


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

<?php if($dataResult["postatus"] =='รอการตรวจสอบ')
{
    ?>

<a href = "poconf_detail.php?id=<?php echo $dataResult["poID"];?>">
    <input type="button" class="btn btn-outline-info" value="ดูคำสั่งซื้อ">
</a>

<?php } else {
?>

<a href = "poconf_recdetail.php?id=<?php echo $dataResult["poID"];?>">
    <input type="button" class="btn btn-outline-primary" value="ดูใบเสร็จ">
</a>

<?php
} ?> 

</td>

<td>

<?php if($dataResult["postatus"] =='รอการตรวจสอบ')
{
    ?>


<a href = "poconf_upd.php?id=<?php echo $dataResult["poID"];?>">
    <input type="button" class="btn btn-outline-success" value="ยืนยันใบสั่งซื้อ">
</a>

<?php } else {} ?> 

</td>
<td>
<a href = "subtaxstock.php?id=<?php echo $dataResult["poID"];?>">ตัดสต็อก</a>
</td>
<tr>


<?php
}

?>
</table>

</div>
</div>