<?php
session_start();
?>

<?php require("conn.php");   ?> 
<?php require("bootstrapscrip.php");   ?> 


<html>
<head>
<title>ThaiCreate.Com</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<table width="400"  border="1">
  <tr>
    <td width="101">ProductID</td>
    <td width="82">ProductName</td>
    <td width="82">Price</td>
    <td width="79">Qty</td>
    <td width="79">Total</td>
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
Sum Total <?php echo number_format($SumTotal,2);?>
<br><br>

<?php

$id=$_SESSION['cusID'];
$strSQL2 = "SELECT * FROM customer WHERE cusID = $id ";
$objQuery2 = mysqli_query($check, $strSQL2) or die(mysql_error());
$objResult2 = mysqli_fetch_array($objQuery2)

?>


<form name="form1" method="post" action="save_checkout.php">
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
    <tr>
      <td>สถานะ</td>
      <td><input type="text" name="postatus" value="รอการตรวจสอบ"></td>
    </tr>
  </table>
    <input type="submit" name="Submit" value="Submit">
</form>
<?php
mysqli_close($check);
?>
</body>
</html>