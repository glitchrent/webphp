<?php require("conn.php");   ?> 
<?php require("bootstrapscrip.php");   ?> 
<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>

<div style="width:80%; margin:0px auto;"> 


<a href="customer_detail_po.php"><input type="button" class="btn btn-outline-danger" value="ย้อนกลับ"></a>

</div>

<center>
<br>
  ใบยืนยันการสั่งซื้อสินค้า
  <br>
  <br>
<?php

$id=$_GET['id'];

$strSQL = "SELECT * FROM cuspo WHERE poID = $id ";
$objQuery = mysqli_query($check, $strSQL)  or die(mysql_error());
$objResult = mysqli_fetch_array($objQuery);
?>

<div style="width:80%; margin:0px auto;"> 

<table border="1" class="table"> 
  <tr>
    <td>รหัสใบสั่งซื้อ</td>
    <td>ชื่อ</td>
    <td>นามสกุล</td>
    <td>ที่อยู่</td>
    <td>เบอร์โทร</td>
  </tr>
    <tr>
      <td ><?php echo $objResult["poID"];?></td>
      <td ><?php echo $objResult["name"];?></td>
      <td ><?php echo $objResult["surname"];?></td>
      <td ><?php echo $objResult["address"];?></td>
      <td ><?php echo $objResult["tel"];?></td>
    </tr>
  </table>

  <br>

<table border="1" class="table">
  <tr>
    <td >รหัสสินค้า</td>
    <td >ชื่อ</td>
    <td >ราคา</td>
    <td >จำนวย</td>
    <td >ราคา</td>
  </tr>
<?php

$Total = 0;
$SumTotal = 0;

$strSQL2 = "SELECT * FROM cuspo_detail WHERE poID = $id ";
$objQuery2 = mysqli_query($check,$strSQL2)  or die(mysql_error());

while($objResult2 = mysqli_fetch_array($objQuery2))
{
		$strSQL3 = "SELECT * FROM product WHERE productID = '".$objResult2["productID"]."' ";
		$objQuery3 = mysqli_query($check,$strSQL3)  or die(mysql_error());
		$objResult3 = mysqli_fetch_array($objQuery3);
		$Total = $objResult2["qty"] * $objResult3["price"];
		$SumTotal = $SumTotal + $Total;
	  ?>
	  <tr>
		<td><?php echo $objResult2["productID"];?></td>
		<td><?php echo $objResult3["productName"];?></td>
		<td><?php echo number_format($objResult3["price"],2);?></td>
		<td><?php echo $objResult2["qty"];?></td>
		<td><?php echo number_format($Total,2);?></td>
	  </tr>
    
	  <?php
 }
  ?>
  <tr>  
    <td colspan="3"></td>
      <td>ราคารวม</td>
      <td><?php echo number_format($SumTotal,2);?></td>
</tr>
</table>


<?php
mysqli_close($check);
?>
</body>
</html>