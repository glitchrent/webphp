
<?php require("connect.php");   ?> 

<!DOCTYPE html>
<html>
    <head>
        <title>Format</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="mystyle.css">
    </head>
    <body>

<a href = "insert.php"> insert page </a>

<?php

$sql = ' SELECT *  FROM product; ';
$objQuery = mysqli_query($check, $sql) or die("Fail Qry [" . $sql ."]")
;

?>

<table border="1">
<tr>

<td>รหัสสินค้า</td> 
<td>ชื่อสินค้า</td>
<td>ประเภทสินค้า</td>
<td>จำนวนที่เหลือ</td>
<td>ราคาต้นทุน</td>
<td>ราคาขาย</td>

</tr>

<?php

while ($objResult = mysqli_fetch_array($objQuery)) {
?>

<tr>

<td> <?php echo $objResult["productID"]; ?> </td>
<td> <?php echo $objResult["productName"]; ?> </td>
<td> <?php echo $objResult["productCategory"]; ?> </td>
<td> <?php echo $objResult["remainUnit"]; ?> </td>
<td> <?php echo $objResult["costprice"]; ?> </td>
<td> <?php echo $objResult["saleprice"]; ?> </td>
<td><a href = "update.php?id=<?php echo $objResult["productID"];?>">Update</a></td>
</tr>




<?php  }   ?>

</table>


    </body>
</html>