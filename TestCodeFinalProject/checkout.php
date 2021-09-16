<?php
session_start();
?>

<?php require("conn.php");   ?> 
<?php require("bootstrapscrip.php");   ?> 
<?php require("cusheader.php");   ?> 

<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<br>
<center>
<table width="1000"  border="1">
  <tr>
    <td width="101">รหัสสินค้า</td>
    <td width="300">ชื่อ</td>
    <td width="82">ราคา</td>
    <td width="79">จำนวน</td>
    <td width="79">ราคารวม</td>
    <td width="10"></td>
  </tr>
  <?php
  $Total = 0;
  $SumTotal = 0;

  for($i=0;$i<=(int)$_SESSION["intLine"];$i++)
  {
	  if($_SESSION["strproductID"][$i] != "")
	  {
		$strSQL = "SELECT * FROM product WHERE productID = '".$_SESSION["strproductID"][$i]."' ";
		$objQuery = mysqli_query($check, $strSQL)  or die(mysql_error());
		$objResult = mysqli_fetch_array($objQuery);
		$Total = $_SESSION["strQty"][$i] * $objResult["price"];
		$SumTotal = $SumTotal + $Total;
	  ?>
	  <tr>
		<td><?php echo $_SESSION["strproductID"][$i];?></td>
		<td><?php echo $objResult["productName"];?></td>
		<td><?php echo $objResult["price"];?></td>
		<td><?php echo $_SESSION["strQty"][$i];?></td>
		<td><?php echo number_format($Total,2);?></td>
	  </tr>
	  <?php
	  }
  }
  ?>

</table>
<br>
ราคารวม ทั้งหมด : <?php echo number_format($SumTotal,2);?>
<br>

<?php

$id=$_SESSION['cusID'];
$strSQL2 = "SELECT * FROM customer WHERE cusID = $id ";
$objQuery2 = mysqli_query($check, $strSQL2) or die(mysql_error());
$objResult2 = mysqli_fetch_array($objQuery2)

?>


<form name="form1" method="post" action="save_checkout.php">
  <table width="300" border="0" >
    <tr>
      <td width="71"></td>
      <td width="217"><input type="hidden" name="txtname" value="<?php echo $objResult2["name"]; ?>" ></td>
    </tr>
    <tr>
      <td width="71"></td>
      <td width="20"><input type="hidden" name="txtsurname" value="<?php echo $objResult2["surname"]; ?>"></td>
    </tr>
    <tr>
      <td></td>
      <td><input type="hidden" name="txtaddress" value="<?php echo $objResult2["address"]; ?>"></td>
    </tr>
    <tr>
      <td></td>
      <td><input type="hidden" name="txttel" value="<?php echo $objResult2["tel"]; ?>"></td>
    </tr>
    <tr>
      <td></td>
      <td><input type="hidden" name="txtcusID" value="<?php echo $objResult2["cusID"]; ?>"></td>
    </tr>
    <tr>
      <td></td>
      <td><input type="hidden" name="postatus" value="รอการตรวจสอบ"></td>
    </tr>
  </table>
  <br>
    <input type="submit" name="Submit" value="ยืนยันการสั่งซื้อ">
</form>
<?php
mysqli_close($check);
?>
</body>
</html>