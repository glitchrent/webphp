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
<body bgcolor="red">
<br>
<center>
  <div style="width:60%" >
  <p style="background-color: #FFFFFF;">รายการสินค้า</p>
<table width="1000"  border="2" class="table table-striped" style="background-color: #FFFFFF;">
  <tr>
    <td width="101">รหัสสินค้า</td>
    <td width="300">ชื่อ</td>
    <td width="82">ราคา</td>
    <td width="79">จำนวน</td>
    <td width="79">ราคารวม</td>
    
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
  <tr>
    <td colspan="3"></td>
    <td>ราคารวม ทั้งหมด : </td>
    <td><?php echo number_format($SumTotal,2);?></td>
</tr>
</table>



<?php

$id=$_SESSION['cusID'];
$strSQL2 = "SELECT * FROM customer WHERE cusID = $id ";
$objQuery2 = mysqli_query($check, $strSQL2) or die(mysql_error());
$objResult2 = mysqli_fetch_array($objQuery2)

?>

<div style="width:45%">
<p style="background-color: #FFFFFF;">ข้อมูลที่อยู่การจัดส่ง</p>
<form name="form1" method="post" action="c_checkout_pc.php"  enctype="multipart/form-data">
  <table  border="2" class="table table-striped" style="background-color: #FFFFFF;">
    <tr>

      <td >ชื่อ</td>
      
      <td ><input type="text" name="txtname" value="<?php echo $objResult2["name"]; ?>" ></td>
      
    </tr>
    <tr>
      <td >นามสกุล</td>
      <td ><input type="text" name="txtsurname" value="<?php echo $objResult2["surname"]; ?>"></td>
    </tr>
    <tr>
      <td>ที่อยู่</td>
      <td><textarea type="text" name="txtaddress" ><?php echo $objResult2["address"]; ?></textarea></td>
    </tr>
    <tr>
      <td>เบอร์โทร</td>
      <td><input type="text" name="txttel" pattern="[0-9]{10}" value="<?php echo $objResult2["tel"]; ?>"  oninvalid="this.setCustomValidity('กรอกข้อมูลไม่ถูกต้อง ตัวเลข 0-9 จำนวน 10 ตัว เท่านั้น')" onchange="try{setCustomValidity('')}catch(e){}" required></td>
    </tr>
  
    <tr>
      <td></td>
      <td><input type="submit" name="Submit" class="btn btn-outline-danger" value="ยืนยันการสั่งซื้อ"><input type="hidden" name="txtcusID" value="<?php echo $objResult2["cusID"]; ?>"></td>
    </tr>
    <tr>
      <td></td>
      <td><input type="hidden" name="postatus" value="ยังไม่ชำระเงิน"></td>
    </tr>
    

  </table>
  <br>
  
</form>
</div>

</div>
<?php
mysqli_close($check);
?>
</body>
</html>