<?php require("conn.php");   ?> 
<?php require("bootstrapscrip.php");   ?> 
<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
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

 <table width="304" border="1">
    <tr>
      <td width="71">รหัสใบสั่งซื้อ</td>
      <td width="217">
	  <?php echo $objResult["poID"];?></td>
    </tr>
    <tr>
      <td width="71">ชื่อ</td>
      <td width="217">
	  <?php echo $objResult["name"];?></td>
    </tr>
    <tr>
      <td width="71">นามสกุล</td>
      <td width="217">
	  <?php echo $objResult["surname"];?></td>
    </tr>
    <tr>
      <td>ที่อยู่</td>
      <td><?php echo $objResult["address"];?></td>
    </tr>
    <tr>
      <td>เบอร์โทร</td>
      <td><?php echo $objResult["tel"];?></td>
    </tr>
  </table>

  <br>

<table width="1000"  border="1">
  <tr>
    <td width="101">รหัสสินค้า</td>
    <td width="600">ชื่อ</td>
    <td width="82">ราคา</td>
    <td width="79">จำนวย</td>
    <td width="79">ราคา</td>
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
		<td><?php echo $objResult3["price"];?></td>
		<td><?php echo $objResult2["qty"];?></td>
		<td><?php echo number_format($Total,2);?></td>
	  </tr>
	  <?php
 }
  ?>
</table>
ราคารวม <?php echo number_format($SumTotal,2);?>

<?php
mysqli_close($check);
?>
</body>
</html>