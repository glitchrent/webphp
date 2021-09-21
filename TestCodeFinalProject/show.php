<?php
session_start();
?>

<?php require("conn.php");   ?> 
<?php require("bootstrapscrip.php");   ?> 
<?php require("c_cusheader.php");   ?> 

<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
<br>
<center>
  <form action="update.php" method="post">
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
		<td><?php echo $_SESSION["strproductID"][$i];?><input type="hidden" name="txtproductID<?php echo $i;?>" value="<?php echo $_SESSION["strproductID"][$i];?>"></td>
		<td><?php echo $objResult["productName"];?></td>
		<td><?php echo $objResult["price"];?></td>
		<td><input type="text" name="txtQty<?php echo $i;?>" value="<?php echo $_SESSION["strQty"][$i];?>" size="2"></td>
		<td><?php echo number_format($Total,2);?></td>
		<td><a href="delete.php?Line=<?php echo $i;?>"><button type="button" class="btn btn-danger" data-bs-dismiss="modal">ลบ</button></a></td>
	  </tr>
	  
	  <?php
	  }
  }
  ?>
</table>
<table width="740"  border="0">
  <tr>
  <td><br><input type="submit" value="คำนวนราคาสินค้า"></td>
  <td align="right">ราคารวม ทั้งหมด : <?php echo number_format($SumTotal,2);?></td>
  </tr>
  </table>
</form>

<br><br><a href="c_product.php">เลือกสินค้าเพิ่มเติม</a>
<?php
	if($SumTotal > 0)
	{
?>
	| <a href="checkout.php">ยืนยัน</a>
<?php
	}
?>



<?php
mysqli_close($check);
?>
</body>
</html>

