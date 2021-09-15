<?php require("conn.php");   ?> 
<?php require("bootstrapscrip.php");   ?> 
<?php session_start();   ?> 



<?php

echo $_SESSION['username']; 

?>


<a href="product.php">  หน้าเลือกสินค้า  </a>


<?php  

$id = $_SESSION['cusID']; 
$data = "SELECT *  FROM cuspo WHERE cusID = $id";
$dataQuery = mysqli_query($check, $data);
?>

<?php

$id=$_SESSION['cusID'];
$strSQL2 = "SELECT * FROM customer WHERE cusID = $id ";
$objQuery2 = mysqli_query($check, $strSQL2) or die(mysql_error());
$objResult2 = mysqli_fetch_array($objQuery2)

?>
<br> ข้อมูลลูกค้า <br>
<table width="304" border="1">
    <tr>
      <td width="71">Name</td>
      <td width="217"><input type="text" name="txtname" value="<?php echo $objResult2["name"]; ?>" ></td>
    </tr>
    <tr>
      <td width="71">Surname</td>
      <td width="217"><input type="text" name="txtsurname" value="<?php echo $objResult2["surname"]; ?>"></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><textarea name="txtaddress"><?php echo $objResult2["address"]; ?> </textarea></td>
    </tr>
    <tr>
      <td>Tel</td>
      <td><input type="text" name="txttel" value="<?php echo $objResult2["tel"]; ?>"></td>
    </tr>
    <tr>
      <td>รหัสลูกค้า</td>
      <td><input type="text" name="txtcusID" value="<?php echo $objResult2["cusID"]; ?>"></td>
    </tr>
  </table>

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
<td>
<a href = "cuspo_detail.php?id=<?php echo $dataResult["poID"];?>">
    <input type="button" class="btn btn-outline-info" value="ดูคำสั่งซื้อ">
</a>
</td>
<tr>

<?php
}

?>
</table>
</div>
