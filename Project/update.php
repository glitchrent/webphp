<?php require("connect.php");   
$id=$_GET["id"];
$sql="SELECT * FROM product WHERE productID=$id";
$result = mysqli_query($check,$sql);
$row=mysqli_fetch_assoc($result)

?> 


<!DOCTYPE html>
<html>
    <head>
        <title>Format</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="mystyle.css">
    </head>
    <body>
  
<?php


?>



<form action="processupdate.php" method="post" >
<input type="hidden"  value="<?php echo $row["productID"];?>"name ="productID">

<table>


   

        <tr> 
        <td>ชื่อสินค้า</td>
        <td><input type="text" name="productName" value="<?php echo $row['productName']?>"></td>
        </tr>
        <tr> 
        <td>ประเภทสินค้า</td>
        <td><input type="text" name="productCategory" value="<?php echo $row['productCategory']?>"></td>
         </tr>
        <tr> 
        <td>จำนวนที่เหลือ</td>
        <td><input type="text" name="remainUnit" value="<?php echo $row['remainUnit']?>"></td>
         </tr>
        <tr> 
        <td>ราคาต้นทุน</td>
        <td><input type="text" name="costprice" value="<?php echo $row['costprice']?>"></td>
         </tr>
        <tr> 
        <td>ราคาขาย</td>
        <td><input type="text" name="saleprice" value="<?php echo $row['saleprice']?>"></td>
         </tr>
         
         

       




</table>
<input type="submit" value="Complete">

</form>


    
    </body>
</html>