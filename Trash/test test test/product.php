<?php
//session_start();
//session_destroy();
?>
<?php session_start(); ?> 
<?php require("conn.php");   ?> 
<?php require("bootstrapscrip.php");   ?> 

<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>


<?php require("cusheader.php");   ?> 




<?php
$strSQL = "SELECT * FROM product";
$objQuery = mysqli_query($check, $strSQL) or die(mysql_error());
?>


<br><a href="show.php">ตะกร้า</a><br><br>


<table width="450"  border="1">
  <tr>
    <td width="101">Picture</td>
    <td width="101">ProductID</td>
    <td width="82">ProductName</td>
    <td width="50">Price</td>
    <td width="100">Cart</td>
  </tr>
  <?php
  while($objResult = mysqli_fetch_array($objQuery))
  {
  ?>
  <tr>
  <form action="order.php" method="post">
	<td><img src="Picture/<?php echo $objResult["productPic"];?>" width="100%"></td>
    <td><?php echo $objResult["productID"];?></td>
    <td><?php echo $objResult["productName"];?></td>
    <td><?php echo $objResult["price"];?></td>
    <td><input type="hidden" name="txtproductID" value="<?php echo $objResult["productID"];?>" size="2"> <input type="text" name="txtQty" value="1" size="2"> <input type="submit" value="เพิ่ม"></td>
	</form>
  </tr>
  <?php
  }
  ?>
</table>




<?php
mysqli_close($check);
?>
</body>
</html>

