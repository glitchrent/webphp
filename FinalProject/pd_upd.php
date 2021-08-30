<?php require("conn.php");   ?>  
<?php require("bootstrapscrip.php");   ?> 

<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="theme.css">

    <title>Dashboard</title>

</head>

<body>

<?php

$id=$_GET["id"];
$data="SELECT * FROM product WHERE productID=$id";
$dataQuery = mysqli_query($check,$data);
$dataTranfer=mysqli_fetch_assoc($dataQuery)

?>
<header class="p-3 bg-dark text-white">
    
    <center><h1>แก้ไขข้อมูลสินค้า</h1></center>
</header>




<form action="pd_upd_pc.php" method="post" >

<input type="hidden"  value="<?php echo $dataTranfer["productID"];?>"name ="productID">
<br>
<table  align="center">
<td>

   

    <div class="mb-3">
    <label for="exampleInput" class="form-label">ชื่อสินค้า</label>
    <input class="form-control" type="text" name="productName" value="<?php echo $dataTranfer['productName']?>">
    </div>
    <div class="mb-3">
    <label for="exampleInput" class="form-label">ประเภทสินค้า</label>
    <input class="form-control" type="text" name="productCategory" value="<?php echo $dataTranfer['productCategory']?>">         
    </div>
    <div class="mb-3">
    <label for="exampleInput" class="form-label">จำนวนที่เหลือ</label>
    <input class="form-control" type="text" name="remainUnit" value="<?php echo $dataTranfer['remainUnit']?>">
    </div>
    <div class="mb-3">
    <label for="exampleInput" class="form-label">ราคาต้นทุน</label>
    <input class="form-control" type="text" name="unit" value="<?php echo $dataTranfer['unit']?>">
    </div>
    <div class="mb-3">
    <label for="exampleInput" class="form-label">ราคาขาย</label>
    <input class="form-control" type="text" name="price" value="<?php echo $dataTranfer['price']?>">
    </div>
    <div class="mb-3" align="center">
  <button type="submit" class="btn btn-primary" value="Complete">ยืนยัน</button>
  <a href="javascript:history.back()"><button type="button" class="btn btn-danger" >ยกเลิก</button></a>
  </div>
</td>
</table>


    
    </body>
</html>