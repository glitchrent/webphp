<html>
<head>
<title>TEST</title>
</head>
<body>

<?php require("connect.php");  ?>

<?php

//*** Update Condition ***//
if($_GET["Action"] == "Save")
{
	for($i=1;$i<=$_POST["hdnLine"];$i++)
	{
		$strSQL = "UPDATE product SET ";
		$strSQL .="productID = '".$_POST["txtCustomerID$i"]."' ";
		$strSQL .=",productName = '".$_POST["txtName$i"]."' ";
		$strSQL .=",productCategory = '".$_POST["txtEmail$i"]."' ";
		$strSQL .=",remainUnit = '".$_POST["txtCountryCode$i"]."' ";
		$strSQL .=",costprice = '".$_POST["txtBudget$i"]."' ";
		$strSQL .=",saleprice = '".$_POST["txtUsed$i"]."' ";
		$strSQL .="WHERE productID = '".$_POST["hdnCustomerID$i"]."' ";
		$dataQuery = mysqli_query($check, $strSQL);
	}
	//header("location:$_SERVER[PHP_SELF]");
	//exit();
}

?>

<?php  



$data = "SELECT * FROM product ORDER BY productID ASC";
$dataQuery = mysqli_query($check, $data);
?>





<form name="frmMain" method="post" action="testcal.php?Action=Save">
<table border="0">
  <tr>
    <th> รหัสสินค้า </th>
    <th> ชื่อสินค้า </th>
    <th> ประเภทสินค้า </th>
    <th> จำนวนที่เหลือ </th>
    <th> ราคาต้นทุน </th>
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
	<input type="hiden" name="hdnCustomerID<?php echo $i;?>"  value="<?php echo $dataResult["productID"];?>">
	<input type="text" name="txtCustomerID<?php echo $i;?>"  value="<?php echo $dataResult["productID"];?>">
	</td>
    <td><input type="text" name="txtName<?php echo $i;?>"  value="<?php echo $dataResult["productName"];?>"></td>
    <td><input type="text" name="txtEmail<?php echo $i;?>"  value="<?php echo $dataResult["productCategory"];?>"></td>
    <td><input type="text" name="txtCountryCode<?php echo $i;?>"  value="<?php echo $dataResult["remainUnit"];?>"></td>
    <td ><input type="text" name="txtBudget<?php echo $i;?>" value="<?php echo $dataResult["costprice"];?>"></td>
    <td ><input type="text" name="txtUsed<?php echo $i;?>" value="<?php echo $dataResult["saleprice"];?>"></td>
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