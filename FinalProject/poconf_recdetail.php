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
ใบเสร็จสินค้า
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
  
    <td >ที่อยู่ 3 ซ.อนามัยงามเจริญ 33 แยก 2 <br>
 แขวงท่าข้าม เขตบางขุนเทียน กรุงเทพมหานคร 10600</td>
    </tr>
  </table>



<table border="1" class="table"> 
  <tr>


    <td width="10%">รหัสใบสั่งซื้อ</td> <td><?php echo $objResult["poID"];?></td>
    </tr>

    <tr>
    <td>วันที่สั่งซื้อ</td> <td><?php echo $objResult["poDate"];?></td>
    </tr>

    <tr>
    <td>ชื่อ</td> <td><?php echo $objResult["name"];?></td>
    </tr>

    <tr>
    <td>นามสกุล</td> <td><?php echo $objResult["surname"];?></td>
    </tr>

    <tr>
    <td>ที่อยู่</td> <td><?php echo $objResult["address"];?></td>
    </tr>

    <tr>
    <td>เบอร์โทร</td> <td><?php echo $objResult["tel"];?></td>
    </tr>

    <tr>
    <td>วันที่พิมพ์</td> <td><?php echo date("Y.m.d");?></td>
    </tr>

  </table>

  
<table border="1" class="table">
  <tr>
    <td >ลำดับ</td>
    <td >รหัสสินค้า</td>
    <td >ชื่อสินค้า</td>
    <td >จำนวน (ชิ้น)</td>
    <td >ราคา (บาท)</td>
    <td >ราคารวมต่อชิ้น (บาท)</td>
  </tr>
<?php
$n=0;
$Total = 0;
$SumTotal = 0;

$strSQL2 = "SELECT * FROM cuspo_detail WHERE poID = $id ";
$objQuery2 = mysqli_query($check,$strSQL2)  or die(mysql_error());

while($objResult2 = mysqli_fetch_array($objQuery2))
{  $n++;
		$strSQL3 = "SELECT * FROM product WHERE productID = '".$objResult2["productID"]."' ";
		$objQuery3 = mysqli_query($check,$strSQL3)  or die(mysql_error());
		$objResult3 = mysqli_fetch_array($objQuery3);
		$Total = $objResult2["qty"] * $objResult3["price"];
		$SumTotal = $SumTotal + $Total;
	  ?>
	  <tr>
    <td><?php echo $n;?></td>
		<td><?php echo $objResult2["productID"];?></td>
		<td><?php echo $objResult3["productName"];?></td>
    <td><?php echo $objResult2["qty"];?></td>
		<td><?php echo number_format($objResult3["price"],2);?></td>
		
		<td><?php echo number_format($Total,2);?></td>
    <td>บาท</td>
	  </tr>
    
	  <?php
 }
  ?>
  <tr>  
    <td colspan="4"></td>
      <td>ราคารวมทั้งหมด : </td>
      <td><?php echo number_format($SumTotal,2);?></td>
      <td>บาท</td>
</tr>
</table>


<?php
mysqli_close($check);
?>
</body>
</html>