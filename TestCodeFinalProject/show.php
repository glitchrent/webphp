<?php
session_start();
?>

<?php require("conn.php");   ?> 
<?php require("bootstrapscrip.php");   ?> 


<html>
<head>
<title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="cuspo.css">
  <?php date_default_timezone_set('Asia/Bangkok');?>

<style>
input[type='number']{
    width: 50px;
} 
	</style>

</head>
<body>

<?php require("c_cusheader.php");   ?> 

<br>
<center>
<div style="width:60%">
  <p  style="background-color: #FFFFFF;">รายการสินค้า</p>

  <form action="c_updateodlist_pc.php" method="post">
    
<table   border="2" class="table table-striped"  style="background-color: #FFFFFF;">
  <tr>
    <td width="">รหัสสินค้า</td>
    <td width="">ชื่อ</td>
    <td width="">ราคา</td>
    <td width="">จำนวน</td>
	  <td width=""></td>
    <td width="">ราคารวม</td>
	
    <td width=""></td>
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
		
		<td ><input type="number" name="txtQty<?php echo $i;?>" value="<?php echo $_SESSION["strQty"][$i];?>" size="2" min="1" max="<?php echo $objResult["remainUnit"];?>"  oninvalid="this.setCustomValidity('กรอกจำนวนไม่ถูกต้อง หรือ สินค้าไม่เพียงพอ')" oninput="setCustomValidity('')"> </td>
		<td>(สินค้าคงเหลือ <?php echo $objResult["remainUnit"];?>)</td>
		<td><?php echo number_format($Total,2);?></td>
		<td><a href="c_listdelete_pc.php?Line=<?php echo $i;?>"><button type="button" class="btn btn-danger" data-bs-dismiss="modal">ลบ</button></a></td>
	  </tr>

  
	  
	  <?php
	  }
  }
  ?>
    <tr>
      <td colspan="1"></td>
      <td><p color>กรอกจำนวนแล้วกดคำนวณราคา --></td>
      <td colspan="1"></td>
      <td><input class="btn btn-success" type="submit" value="คำนวณราคาสินค้า"></td>
      
      <td >ราคารวม ทั้งหมด : </td>
      <td><?php echo number_format($SumTotal,2);?></td>
    </tr>
</table>

</form>

<p style="background-color: #FFFFFF;"><a href="c_product.php" >เลือกสินค้าเพิ่มเติม</a>
<?php
	if($SumTotal > 0)
	{
?>
	/ <a href="c_checkout.php" >ยืนยัน</a></p>
<?php
	}
?>



<?php
mysqli_close($check);
?>
</body>
</html>

