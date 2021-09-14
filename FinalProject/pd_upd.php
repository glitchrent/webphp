<?php require("conn.php");   ?>  
<?php require("bootstrapscrip.php");   ?> 

<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->


    <title>Dashboard</title>

</head>

<body>

<?php

$id=$_GET["id"];
$data="SELECT * FROM product WHERE productID=$id";
$dataQuery = mysqli_query($check,$data);
$dataTranfer=mysqli_fetch_assoc($dataQuery)

?>


<?php

$data2 = "SELECT *  FROM pdcategory ";
$dataQuery2 = mysqli_query($check, $data2);

?>



<header class="p-3 bg-dark text-white">
    
    <center><h1>แก้ไขข้อมูลสินค้า</h1></center>
</header>




<form action="pd_upd_pc.php" method="post" enctype="multipart/form-data">

<input type="hidden"  value="<?php echo $dataTranfer["productID"];?>"name ="productID">
<br>
<table  align="center">
<td>

   

    <div class="mb-3">
    <label for="exampleInput" class="form-label">ชื่อสินค้า</label>
    <input class="form-control" type="text" name="productName" value="<?php echo $dataTranfer['productName']?>">
    </div>


    <div class="mb-3">
    <label for="exampleInput" class="form-label">รูปภาพ</label>
    <div>
    <img src="Picture/<?php echo $dataTranfer["productPic"]; ?>" width="20%">
    </div>
    <br>
    <input class="form-control" type="file" name="productPic" value="<?php echo $dataTranfer['productPic']?>">

    </div>


    <div class="mb-3">
    <label for="exampleInput" class="form-label">ประเภทสินค้า</label>
    
  <input name="productCategory" class="form-control" list="datalistOptions" id="exampleDataList" placeholder="เลือกประเภท..." value="<?php echo $dataTranfer['productCategory']?>">
<datalist id="datalistOptions">
<?php
while ($dataResult2 = mysqli_fetch_assoc($dataQuery2)) {
?>
  <option value="<?php echo $dataResult2["categoryName"]; ?>">

<?php
  }   
?>

</div>


    <div class="mb-3">
    <label for="exampleInput" class="form-label">จำนวนที่เหลือ</label>
    <input class="form-control" type="text" name="remainUnit" value="<?php echo $dataTranfer['remainUnit']?>">
    </div>
    <div class="mb-3">
    <label for="exampleInput" class="form-label">หน่วย ( เช่น กล่อง,โหล,ชิ้น )</label>
    <input class="form-control" type="text" name="unit" value="<?php echo $dataTranfer['unit']?>">
    </div>
    <div class="mb-3">
    <label for="exampleInput" class="form-label">ราคา</label>
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