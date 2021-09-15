<?php require("conn.php");   ?> 
<?php require("bootstrapscrip.php");   ?> 
<?php require("ses_start.php");   ?> 



<?php

echo $_SESSION['username']; 

?>



<a href="pd_user_detail.php">รายละเอียด</a>
<a href="subtract_stock.php">ซื้อ</a>


<?php  

$id = $_SESSION['username']; 
$data = "SELECT *  FROM userorderbill WHERE usb_ID = $id";
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
<a href = "odcon_detail.php?id=<?php echo $dataResult["usb_orb_ID"];?>">
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