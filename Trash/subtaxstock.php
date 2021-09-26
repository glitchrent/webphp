<?php require("conn.php");   ?> 
<?php require("bootstrapscrip.php");   ?> 
<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>

<div style="width:80%; margin:0px auto;"> 


<a href="poconf_list.php"><input type="button" class="btn btn-outline-danger" value="ย้อนกลับ"></a>

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
    <td>วันที่สั่งซื้อ</td>
    <td>ชื่อ</td>
    <td>นามสกุล</td>
    <td>ที่อยู่</td>
    <td>เบอร์โทร</td>
  </tr>
    <tr>
      <td ><?php echo $objResult["poID"];?></td>
      <td ><?php echo $objResult["poDate"];?></td>
      <td ><?php echo $objResult["name"];?></td>
      <td ><?php echo $objResult["surname"];?></td>
      <td ><?php echo $objResult["address"];?></td>
      <td ><?php echo $objResult["tel"];?></td>
    </tr>
  </table>

  
  <form name="form" method="post" action="subtaxstock_pc.php?Action=Save">

<table border="1" class="table">
  <tr>
    <td >ลำดับ</td>
    <td >รหัสสินค้า</td>
    <td width="25%">ชื่อสินค้า</td>
    <td width="100px">จำนวนคงเหลือ</td>
    <td width="100px"></td>
    <td >จำนวน</td>
    <td >ราคา</td>
    <td >ราคารวมต่อชิ้น</td>
  </tr>
<?php


$i=0;
$n=0;
$Total = 0;
$SumTotal = 0;
$remsum = 0;

$strSQL2 = "SELECT * FROM cuspo_detail WHERE poID = $id ";
$objQuery2 = mysqli_query($check,$strSQL2)  or die(mysql_error());

while($objResult2 = mysqli_fetch_array($objQuery2))
{  
    $i=$i+1;
    $n++;
		$strSQL3 = "SELECT * FROM product WHERE productID = '".$objResult2["productID"]."' ";
		$objQuery3 = mysqli_query($check,$strSQL3)  or die(mysql_error());
		$objResult3 = mysqli_fetch_array($objQuery3);
		$Total = $objResult2["qty"] * $objResult3["price"];
		$SumTotal = $SumTotal + $Total;
        

	  ?>

	<tr>
        <td><?php echo $n;?></td>
        
        

		<td>
        <input name="hdnproductID<?php echo $i;?>" type="hidden"  value="<?php echo $objResult2["productID"];?>">

        <input name="txtproductID<?php echo $i;?>" type=""      value="<?php echo $objResult2["productID"];?>"></td>
		    <td><?php echo $objResult3["productName"];?>
        <input name="txtproductName<?php echo $i;?>" type="hidden"      value="<?php echo $objResult3["productName"];?>">
        <input name="txtproductCategory<?php echo $i;?>" type="hidden"      value="<?php echo $objResult3["productCategory"];?>">
        <input name="txtdate<?php echo $i;?>" type="hidden"      value="<?php echo date('Y-m-d H:i:s');?>">
        <input name="txtimstatus<?php echo $i;?>" type="hidden"      value="ส่งออก"></td>

        <td> <?php echo $objResult3["remainUnit"];?></td>
        <td> <?php 
        
        
        

        if($objResult3["remainUnit"] < $objResult2["qty"]){
            $remcheck=1;
            echo "สินค้าไม่เพียงพอ";
        }else{
            $remcheck=0;
            echo "ตัดสต็อกได้";

        }

        $remsum = $remsum + $remcheck;
        
        
        ?></td>
        <td><input name="txtaddunit<?php echo $i;?>" type=""      value="<?php echo $objResult2["qty"];?>"></td>
		<td><?php echo number_format($objResult3["price"],2);?></td>
		<td><input name="totalunp<?php echo $i;?>" type=""      value="<?php echo $Total;?>"></td>
        <td>บาท</td>
	</tr>
    
<?php
 }
?>

  
  <tr>  
    <td colspan="6"></td>
      <td>ราคารวมทั้งหมด : </td>
      <td><?php echo number_format($SumTotal,2);?></td>
      <td>บาท</td>
</tr>



</table>

<?php if($remsum != 0){ echo "สินค้าคงเหลือไม่เพียงพอ ไม่สามารถตัดสต็อกได้";
} else { ?>

<input type="hidden" name="txtpoid" value="<?php echo $id;?>">
<input class="btn btn-primary" type="submit" name="submit" value="ตัดต๊อก">
<input type="hidden" name="hdnNo" value="<?php echo $i;?>">

<?php } ?>
</form>

<?php
mysqli_close($check);
?>
</body>
</html>