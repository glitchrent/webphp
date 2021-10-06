<?php require("conn.php");   ?> 
<?php require("bootstrapscrip.php");   ?> 
<?php require("header.php");   ?> 


<div class="faidpage">

<center>
<div style="width:80%">

<br>
จัดการใบสั่งซื้อ / ใบเสร็จ

<br>

<?php  


$data = "SELECT *  FROM cuspo ORDER BY poID DESC ";
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
<td align="center" width="8%">สลิป</td>
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
<td align="center"><a target="_blank" href="../TestCodeFinalProject/Slip/<?php echo $dataResult["slip"]; ?>"><?php if($dataResult["slip"] == NULL){ }else { ?> <img src="../TestCodeFinalProject/Slip/<?php echo $dataResult["slip"]; ?>" width="100%"> <?php } ?></a></td>
<td>





<?php if($dataResult["postatus"] =='ยังไม่ชำระเงิน')
{
    ?>

<a href = "poconf_detail.php?id=<?php echo $dataResult["poID"];?>">
    <input type="button" class="btn btn-outline-info" value="ดูคำสั่งซื้อ">
</a>

<?php } else if ($dataResult["postatus"] =='รอการตรวจสอบ'){
?>

<a href = "poconf_detail.php?id=<?php echo $dataResult["poID"];?>">
    <input type="button" class="btn btn-outline-info" value="ดูคำสั่งซื้อ">
</a>

<?php } else if ($dataResult["postatus"] =='ยกเลิกคำสั่งซื้อ'){
?>

ยกเลิกคำสั่งซื้อแล้ว

<?php
} else { ?>

<a href = "poconf_recdetail.php?id=<?php echo $dataResult["poID"];?>">
    <input type="button" class="btn btn-outline-primary" value="ดูใบเสร็จ">
</a>

<?php 

}
?> 

</td>

<td>



<?php if($dataResult["postatus"] =='ยังไม่ชำระเงิน')
{
?>
<a href = "returnstock.php?id=<?php echo $dataResult["poID"];?>"><input type="button" class="btn btn-outline-danger" value="ยกเลิกคำสั่งซื้อ"></a>


<?php } else if($dataResult["postatus"] =='รอการตรวจสอบ')
{
?>


<a href = "subtaxstock.php?id=<?php echo $dataResult["poID"];?>"><input type="button" class="btn btn-outline-success" value="ยืนยันคำสั่งซื้อ"></a>

<?php } else if($dataResult["postatus"] =='ยืนยันแล้ว') 
{
?>

<a href = "preparedeliv_pc.php?id=<?php echo $dataResult["poID"];?>"><input type="button" class="btn btn-outline-primary" value="เตรียมการจัดส่ง"></a>


<?php } else if($dataResult["postatus"] =='กำลังเตรียมการจัดส่ง') 
{ 
?> 

<a href = "completedeliv_pc.php?id=<?php echo $dataResult["poID"];?>"><input type="button" class="btn btn-outline-danger" value="จัดส่งเสร็จสิ้น"></a>

<?php } else {}
?>

</td>



<tr>






<?php
}
?>
</table>

</div>
</div>