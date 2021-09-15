<?php require("conn.php");   ?> 
<?php require("bootstrapscrip.php");   ?> 
<?php session_start();   ?> 





จัดการใบสั่งซื้อ


<?php  


$data = "SELECT *  FROM cuspo ";
$dataQuery = mysqli_query($check, $data);
?>

<div style="width:70%">
<table border="1" class="table">

<br> ใบสั่งซื้อ <br>

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

<a href = "cuspo_detail.php?id=<?php echo $dataResult["poID"];?>">
    <input type="button" class="btn btn-outline-info" value="ดูคำสั่งซื้อ">
</a>

</td>

<td>

<a href = "poconf_upd.php?id=<?php echo $dataResult["poID"];?>">
    <input type="button" class="btn btn-outline-success" value="ยืนยันใบสั่งซื้อ">
</a>

</td>
<tr>

<?php
}

?>
</table>
</div>
