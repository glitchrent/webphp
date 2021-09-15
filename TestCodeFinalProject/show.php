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

  <form action="update.php" method="post">
<table width="400"  border="1">
  <tr>
    <td width="101">ProductID</td>
    <td width="82">ProductName</td>
    <td width="82">Price</td>
    <td width="79">Qty</td>
    <td width="79">Total</td>
    <td width="10">Del</td>
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
		<td><?php echo $_SESSION["strproductID"][$i];?><input type="hidden" name="txtproductID<?php echo $i;?>" value="<?php echo $_SESSION["strproductID"][$i];?>"></td>
		<td><?php echo $objResult["productName"];?></td>
		<td><?php echo $objResult["price"];?></td>
		<td><input type="text" name="txtQty<?php echo $i;?>" value="<?php echo $_SESSION["strQty"][$i];?>" size="2"></td>
		<td><?php echo number_format($Total,2);?></td>
		<td><a href="delete.php?Line=<?php echo $i;?>">x</a></td>
	  </tr>
	  
	  <?php
	  }
  }
  ?>
</table>
<table width="400"  border="0">
  <tr>
  <td><input type="submit" value="Update"></td>
  <td align="right">Sum Total <?php echo number_format($SumTotal,2);?></td>
  </tr>
  </table>
</form>
<br><br><a href="product.php">Go to Product</a>
<?php
	if($SumTotal > 0)
	{
?>
	| <a href="checkout.php">CheckOut</a>
<?php
	}
?>


| 
<?php
mysqli_close($check);
?>
</body>
</html>

<?php /* This code download from www.ThaiCreate.Com */ ?>