<?php require("conn.php");   ?> 
<?php require("bootstrapscrip.php");   ?> 
<?php session_start();   ?> 



<?php require("c_cusheader.php");   ?> 



<?php  

$id = $_SESSION['cusID']; 
$data = "SELECT *  FROM cuspo WHERE cusID = $id";
$dataQuery = mysqli_query($check, $data);
?>

<?php

$id=$_SESSION['cusID'];
$strSQL2 = "SELECT * FROM customer WHERE cusID = $id ";
$objQuery2 = mysqli_query($check, $strSQL2) or die(mysql_error());
$objResult2 = mysqli_fetch_array($objQuery2)

?>
<center>
  


<div style="width:50%">

<br> <p style="background-color: #FFFFFF;">ข้อมูลลูกค้า</p>

<table width="304" border="1" class="table table-strip" style="background-color: #FFFFFF;">
    <tr>
      <td width="71">ชื่อ</td>
      <td width="217"><input type="hidden" name="txtname" value="<?php echo $objResult2["name"]; ?>" ><?php echo $objResult2["name"]; ?></td>
    </tr>
    <tr>
      <td width="71">นามสกุล</td>
      <td width="217"><input type="hidden" name="txtsurname" value="<?php echo $objResult2["surname"]; ?>"><?php echo $objResult2["surname"]; ?></td>
    </tr>
    <tr>
      <td>ที่อยู่</td>
      <td><?php echo $objResult2["address"]; ?></td>
    </tr>
    <tr>
      <td>เบอร์โทร</td>
      <td><input type="hidden" name="txttel" value="<?php echo $objResult2["tel"]; ?>"><?php echo $objResult2["tel"]; ?></td>
    </tr>
    <tr>
      <td>รหัสลูกค้า</td>
      <td><input type="hidden" name="txtcusID" value="<?php echo $objResult2["cusID"]; ?>"><?php echo $objResult2["cusID"]; ?></td>
    </tr>
  </table>
  <p style="background-color: #FFFFFF;"><a href="c_customer_upddetail.php">แก้ไขข้อมูลที่อยู่</a></p>

</div>
