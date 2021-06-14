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
  
<form action="process.php" method="post" >


<table>


   

        <tr> 
        <td>ชื่อสินค้า</td>
        <td><input type="text" name="productName"></td>
        </tr>
        <tr> 
        <td>ประเภทสินค้า</td>
        <td><input type="text" name="productCategory"></td>
         </tr>
        <tr> 
        <td>จำนวนที่เหลือ</td>
        <td><input type="text" name="remainUnit"></td>
         </tr>
        <tr> 
        <td>ราคาต้นทุน</td>
        <td><input type="text" name="costprice"></td>
         </tr>
        <tr> 
        <td>ราคาขาย</td>
        <td><input type="text" name="saleprice"></td>
         </tr>
         
         

       




</table>
<input type="submit" value="Complete">

</form>


    
    </body>
</html>