<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    
    
        <title>Format</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="Project\mystyle.css">
    </head>
<body>

<?php require("connect.php");  ?>

<?php  
$data = "SELECT * FROM product ";
$dataQuery = mysqli_query($check, $data);
?>



<form name="frmMain" method="post" action="testcaldb.php?Action=Save">
<table class="table table-striped">
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
	<input type="hidden" name="hdnproductID<?php echo $i;?>"  value="<?php echo $dataResult["productID"];?>">
	<input type="text" name="txtproductID<?php echo $i;?>"  value="<?php echo $dataResult["productID"];?>">
	</td>
    <td><input type="text" name="txtproductName<?php echo $i;?>"  value="<?php echo $dataResult["productName"];?>"></td>
    <td><input type="text" name="txtproductCategory<?php echo $i;?>"  value="<?php echo $dataResult["productCategory"];?>"></td>
    <td><input type="text" name="txtremainUnit<?php echo $i;?>"  value="<?php echo $dataResult["remainUnit"];?>"></td>
    <td><input type="text" name="txtaddunit<?php echo $i;?>" value=""></td>
  </tr>
<?php
}
?>
</table>
  <input type="submit" name="submit" value="submit">
  <input type="hidden" name="hdnNo" value="<?php echo $i;?>">
</form>
<?php
//mysql_close($objConnect);
?>
</body>
</html>