<?php require("conn.php");   ?> 
<?php require("bootstrapscrip.php");   ?> 
<?php require("ses_start.php");   ?> 

<h2>หน้าใบคำสั่งซื้อ</h2>




<?php  

$id = $_SESSION['username']; 
$data = "SELECT *  FROM userorderbill";
$dataQuery = mysqli_query($check, $data);

?>

<div style="width:70%">
<table border="1" class="table">

<?php
while($dataResult = mysqli_fetch_array($dataQuery))
{

?>
<tr>
<td align="center"><?php echo $dataResult["usb_orb_ID"]; ?></td>
<td align="center"><?php echo $dataResult["date"]; ?></td>
<td align="center"><?php echo $dataResult["total"]; ?></td>
<td align="center"><?php echo $dataResult["usb_ID"]; ?></td>
<td align="center"><?php echo $dataResult["buystatus"]; ?></td>
<td>
<a href = "ord_conlist_detail.php?id=<?php echo $dataResult["usb_orb_ID"];?>">
    <input type="button" class="btn btn-outline-info" value="ดูคำสั่งซื้อ">
</a>
</td>
<tr>

<?php
}

?>
</table>
</div>
<a href="ses_des.php">ออกจากระบบ</a>