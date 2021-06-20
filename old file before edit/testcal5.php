<html>
<head>
<title>TEST</title>
</head>
<body>

<?php require("connect.php");  ?>

<?php  
$data = "SELECT * FROM product ";
$dataQuery = mysqli_query($check, $data);
?>



<form name="frmMain" method="post" action="testcaldb.php?Action=Save">
<table border="0">
  <tr>
    <th> รหัสสินค้า </th>
    <th> ชื่อสินค้า </th>
    <th> ประเภทสินค้า </th>
    <th> จำนวนที่เหลือ </th>
    <th> ราคาขาย </th>
  </tr>

<?php
$i =0;
while($dataResult = mysqli_fetch_array($dataQuery))
{
	$i = $i + 1;
?>
  <tr>
    <td>
	<input type="hidden" name="hdnCustomerID<?php echo $i;?>"  value="<?php echo $dataResult["productID"];?>">
	<input type="text" name="txtCustomerID<?php echo $i;?>"  value="<?php echo $dataResult["productID"];?>">
	</td>
    <td><input type="text" name="txtName<?php echo $i;?>"  value="<?php echo $dataResult["productName"];?>"></td>
    <td><input type="text" name="txtEmail<?php echo $i;?>"  value="<?php echo $dataResult["productCategory"];?>"></td>
    <td><input type="text" name="txtCountryCode<?php echo $i;?>"  value="<?php echo $dataResult["remainUnit"];?>"></td>
    <td><input type="text" name="txtBudget<?php echo $i;?>" value=""></td>
  </tr>
<?php
}
?>
</table>
  <input type="submit" name="submit" value="submit">
  <input type="hidden" name="hdnLine" value="<?php echo $i;?>">
</form>
<?php
//mysql_close($objConnect);
?>
</body>
</html>