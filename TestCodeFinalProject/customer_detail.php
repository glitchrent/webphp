<?php require("conn.php");   ?> 
<?php require("bootstrapscrip.php");   ?> 
<?php session_start();   ?> 

<?php require("cusheader.php");   ?> 



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
<br> ข้อมูลลูกค้า <br>

<div style="width:50%">

<table width="304" border="1" class="table">
    <tr>
      <td width="71">ชื่อ</td>
      <td width="217"><input type="text" name="txtname" value="<?php echo $objResult2["name"]; ?>" ></td>
    </tr>
    <tr>
      <td width="71">นามสกุล</td>
      <td width="217"><input type="text" name="txtsurname" value="<?php echo $objResult2["surname"]; ?>"></td>
    </tr>
    <tr>
      <td>ที่อยู่</td>
      <td><textarea name="txtaddress"><?php echo $objResult2["address"]; ?> </textarea></td>
    </tr>
    <tr>
      <td>เบอร์โทร</td>
      <td><input type="text" name="txttel" value="<?php echo $objResult2["tel"]; ?>"></td>
    </tr>
    <tr>
      <td>รหัสลูกค้า</td>
      <td><input type="text" name="txtcusID" value="<?php echo $objResult2["cusID"]; ?>"></td>
    </tr>
  </table>

</div>
