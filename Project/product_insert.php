<?php require("connect.php");   ?> 


<!DOCTYPE html>
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
  
<form action="product_processinsert.php" method="post" >


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