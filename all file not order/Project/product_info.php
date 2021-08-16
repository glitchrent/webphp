<?php require("connect.php");   ?> 

<?php 
    session_start();

    if (!isset($_SESSION['username'])) {
        header('location: login.php');

    }


    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }


?>



<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="Project\mystyle.css">


    <title>Format</title>
    </head>

    
    <body>

    <header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <img src="warehouse.gif" alt="" width="40" height="30" class="d-inline-block align-text-top"></a></li>
          <li><a href="#.php" class="nav-link px-2 link-light">คลังสินค้า</a></li>
          <li><a href="product_insert.php" class="nav-link px-2 link-light">เพิ่มสินค้า</a></li>
          <li><a href="product_updatestock.php" class="nav-link px-2 link-light">เพิ่มสต๊อกสินค้า</a></li>
          <li><a href="product_decreasestock.php" class="nav-link px-2 link-light">ตัดสต๊อกสินค้า</a></li>
          

        </ul>

        <div class="dropdown text-end">
          <a href="#" class="d-block link-light text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
          Menu
          </a>
          <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
            <li><a class="dropdown-item" href="index_admin.php?logout='1'">ออกจากระบบ</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>

  <br>


<form class="d-flex" method="get" id="form" enctype="multipart/form-data" action="" >

<input  class="form-control me-2"  placeholder="พิมพ์ชื่อสินค้าที่ต้องการค้นหา" type="text" name="search" value="">
<input class="btn btn-outline-success" type="submit" value="ค้นหา">

</form>
<?php

$search=isset($_GET['search']) ? $_GET['search']:'';

$data = "SELECT *  FROM product WHERE productName Like '%$search%'";
$dataQuery = mysqli_query($check, $data);

?>

<table class="table table-striped table-hover">

<tr>

<td align="center">รหัสสินค้า</td> 
<td align="center">ชื่อสินค้า</td>
<td align="center">ประเภทสินค้า</td>
<td align="center">จำนวนที่เหลือ</td>
<td align="center">ราคาต้นทุน</td>
<td align="center">ราคาขาย</td>
<td></td>
<td></td>

</tr>

<?php

while ($dataResult = mysqli_fetch_assoc($dataQuery)) {
?>

<tr>

<td align="center"> <?php echo $dataResult["productID"]; ?> </td>
<td > <?php echo $dataResult["productName"]; ?> </td>
<td align="center"> <?php echo $dataResult["productCategory"]; ?> </td>
<td align="center"> <?php echo $dataResult["remainUnit"]; ?> </td>
<td align="center"> <?php echo $dataResult["costprice"]; ?> </td>
<td align="center"> <?php echo $dataResult["saleprice"]; ?> </td>
<td align="center"><a href = "product_update.php?id=<?php echo $dataResult["productID"];?>">
<button type="button" class="btn btn-outline-info">อัพเดตข้อมูล</button></a></td>
<td align="center"><a href = "product_processdel.php?iddel=<?php echo $dataResult["productID"];?>">
<button type="button" class="btn btn-outline-danger">ลบ</button></a></td>
</tr>




<?php  }   ?>

</table>



  
    </body>
</html>