<?php require("connect.php");  ?>  


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
  
<?php

$id=$_GET["id"];
$data="SELECT * FROM product WHERE productID=$id";
$dataQuery = mysqli_query($check,$data);
$dataTranfer=mysqli_fetch_assoc($dataQuery)

?>


<form action="product_processupdate.php" method="post" >

<input type="hidden"  value="<?php echo $dataTranfer["productID"];?>"name ="productID">

<table>


   

        <tr> 
        <td>ชื่อสินค้า</td>
        <td><input type="text" name="productName" value="<?php echo $dataTranfer['productName']?>"></td>
        </tr>
        <tr> 
        <td>ประเภทสินค้า</td>
        <td><input type="text" name="productCategory" value="<?php echo $dataTranfer['productCategory']?>"></td>
         </tr>
        <tr> 
        <td>จำนวนที่เหลือ</td>
        <td><input type="text" name="remainUnit" value="<?php echo $dataTranfer['remainUnit']?>"></td>
         </tr>
        <tr> 
        <td>ราคาต้นทุน</td>
        <td><input type="text" name="costprice" value="<?php echo $dataTranfer['costprice']?>"></td>
         </tr>
        <tr> 
        <td>ราคาขาย</td>
        <td><input type="text" name="saleprice" value="<?php echo $dataTranfer['saleprice']?>"></td>
         </tr>
         
         

       




</table>
<input type="submit" value="Complete">

</form>


    
    </body>
</html>