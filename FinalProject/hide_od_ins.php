<?php require("conn.php");  ?>  

<html>
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
   

    <title>Dashboard</title>

</head>

<body OnLoad="document.form1.submit();"> 


<?php

$id=$_GET["id"];
$data="SELECT * FROM product WHERE productID=$id";
$dataQuery = mysqli_query($check,$data);
$dataTranfer=mysqli_fetch_assoc($dataQuery)

?>

<form name="form1" action="hide_od_ins_pc.php" method="post" >
    <input type="hidden"  value="<?php echo $dataTranfer["productID"];?>"name ="productID">
<br>
<table>
<td>
    <div class="mb-3">
    <input  type="hidden" name="productName" value="<?php echo $dataTranfer['productName']?>">
    </div>
    <div class="mb-3">
    <input  type="hidden" name="productCategory" value="<?php echo $dataTranfer['productCategory']?>">         
    </div>
    <div class="mb-3">
    <input  type="hidden" name="remainUnit" value="<?php echo $dataTranfer['remainUnit']?>">
    </div>
    <div class="mb-3">
    <input  type="hidden" name="unit" value="<?php echo $dataTranfer['unit']?>">
    </div>
    <div class="mb-3">
    <input  type="hidden" name="price" value="<?php echo $dataTranfer['price']?>">
    </div>
</td>
</table>

</body>
</html>