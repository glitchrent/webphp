<?php require("conn.php");   ?> 
<?php require("bootstrapscrip.php");   ?> 
<?php session_start();   ?> 



<?php require("c_cusheader.php");   ?> 


<?php

$id=$_GET['poid'];

$strSQL = "SELECT * FROM cuspo WHERE poID = $id ";
$objQuery = mysqli_query($check, $strSQL)  or die(mysql_error());
$objResult = mysqli_fetch_array($objQuery);
?>


<center>
  



<div style="width:60%">

<br> <h3><p style="background-color: #FFFFFF;">ส่งหลักฐานการชำระเงิน</p></h>






                 
<?php

$id=$_GET['poid'];

$strSQL = "SELECT * FROM cuspo WHERE poID = $id ";
$objQuery = mysqli_query($check, $strSQL)  or die(mysql_error());
$objResult = mysqli_fetch_array($objQuery);
?>

<table class="table table-striped" style="background-color: #FFFFFF;" >
                     <thead>
                     <tr>
                     <td colspan="8" ><h3>รายการสินค้า</h></td>
                       <tr>    
                     <tr>
    <td >ลำดับ</td>
    <td >รหัสสินค้า</td>
    <td >ชื่อสินค้า</td>
    
    <td >ราคา (บาท)</td>
    <td >จำนวน (ชิ้น)</td>
    <td >ราคารวมต่อชิ้น (บาท)</td>
    <td ></td>
  </tr>


                     </thead>
                     <tbody>

      
                     
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
    
		<td><?php echo number_format($objResult3["price"],2);?></td>
		<td><?php echo $objResult2["qty"];?></td>
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
                         
                     </tbody>
                 </table>


<form name="form1" method="post" action="c_customer_detail_paybil_pc.php"  enctype="multipart/form-data">
  <table  border="2" class="table table-striped" style="background-color: #FFFFFF;">
    <tr>
    <td  rowspan="8"><img src ="ธนาคาร2.jpg" width="100%"></td>
      <td >เลขที่ใบสั่งซื้อเสร็จ</td>
      
      <td ><input type="text" name="txtpoid" value="<?php echo $objResult["poID"];?>" ></td>
      
    </tr>
    <tr>
      <td >วันที่สั่งซื้อ </td>
      <td ><input type="text" name="txtsurname" value="<?php  $newdate =  date('d/m/Y', strtotime($objResult["poDate"]));
      echo $newdate; ?>"></td>
    </tr>
   
    <tr>
      <td width="20%">เลือก หลักฐานการโอน</td>
      <td><input type="file" name="txtslip" value="" oninvalid="this.setCustomValidity('โปรดใส่หลักฐานการโอนก่อน ')" oninput="setCustomValidity('')" required></td>
    </tr>
    <tr>
      <td></td>
      <td><input type="submit" name="Submit" class="btn btn-outline-danger" value="ยืนยันการชำระเงิน"><input type="hidden" name="txtcusID" value="<?php echo $objResult2["cusID"]; ?>"></td>
    </tr>
    <tr>
      <td></td>
      <td><input type="hidden" name="postatus" value="รอการตรวจสอบ"></td>
    </tr>
    

  </table>
</form>
  
</div>
