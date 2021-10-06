<?php require("conn.php");   ?> 
<?php require("bootstrapscrip.php");   ?> 
<?php session_start();   ?> 




<?php require("c_cusheader.php");   ?> 



<?php  

$id = $_SESSION['cusID']; 
$data = "SELECT *  FROM cuspo WHERE cusID = $id ORDER BY poID DESC ";
$dataQuery = mysqli_query($check, $data);
?>

<?php

$id=$_SESSION['cusID'];
$strSQL2 = "SELECT * FROM customer WHERE cusID = $id ";
$objQuery2 = mysqli_query($check, $strSQL2) or die(mysql_error());
$objResult2 = mysqli_fetch_array($objQuery2)

?>

<center>
    <div style="width:70%">
<table border="1" class="table table-striped" style="background-color: #FFFFFF;">

<br> <p style="background-color: #FFFFFF;">ข้อมูลรายละเอียดการสั่งซื้่อ</p> 
<tr>
<td align="center">รหัสใบสั่งซื้อ</td>
<td align="center">วันที่</td>
<td align="center">ชื่อ</td>
<td align="center">นามสกุล</td>
<td align="center">เบอร์โทร</td>
<td align="center">ที่อยู่</td>
<td align="center">สถานะ</td>
<td align="center" width="8%">สลิป</td>
<td align="center">ใบเสร็จ / ใบสั่งซื้อ</td>
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
<td align="center"><a target="_blank" href="Slip/<?php echo $dataResult["slip"]; ?>"><?php if($dataResult["slip"] == NULL){ }else { ?> <img src="Slip/<?php echo $dataResult["slip"]; ?>" width="100%"> <?php } ?></a></td>

<td align="center">

<?php if($dataResult["postatus"] =='ยังไม่ชำระเงิน')
{
    ?>

<a href = "cuspo_detail.php?id=<?php echo $dataResult["poID"];?>">
    <input type="button" class="btn btn-outline-info" value="ดูคำสั่งซื้อ">
</a>



<?php } else if($dataResult["postatus"] =='ยกเลิกคำสั่งซื้อ'){
?>

ยกเลิกคำสั่งซื้อแล้ว

<?php } else if($dataResult["postatus"] ==''){
?>

<a href = "cuspo_detail.php?id=<?php echo $dataResult["poID"];?>">
    <input type="button" class="btn btn-outline-info" value="ดูคำสั่งซื้อ">

</a>


<?php
} else { 
?>

<a href = "cusrecep_detail.php?id=<?php echo $dataResult["poID"];?>">
    <input type="button" class="btn btn-outline-danger" value="ดูใบเสร็จ">

<?php

}?> 


</td>

<td>

<?php if($dataResult["postatus"] =='ยังไม่ชำระเงิน')
{
    ?>

<a href = "c_customer_detail_paybil.php?poid=<?php echo $dataResult["poID"];?>">
    <input type="button" class="btn btn-outline-info" value="ชำระเงิน">
</a>

<?php } else { }
?>

</td>
<tr>

<?php
}

?>
</table>
</div>
