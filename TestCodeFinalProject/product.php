<?php require("conn.php");   ?> 
<html>

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="theme.css">

    <title>Dashboard</title>

</head>

<body>





<!-- header -->
<div style="width:100%; margin:0px auto;"> 



<header class="p-2 bg-info text-white ">

<nav class="navbar navbar-expand-lg navbar-light bg-info " style="width:80%; margin:0px auto;">
  <div class="container-fluid ">
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
        
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"> 
              
              
          
          แดชบอร์ด</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle"  href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            </i>พนักงาน
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">เพิ่มพนักงาน</a></li>
            <li><a class="dropdown-item" href="#">จัดการพนักงาน</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle"  href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            สินค้า
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">เพิ่มสินค้า</a></li>
            <li><a class="dropdown-item" href="#">จัดการสินค้า</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle"  href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            ตัดสต๊อกสินค้า
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">ตัดสต๊อก</a></li>
            <li><a class="dropdown-item" href="#">จัดการตัดสต๊อก</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">รายงาน</a>
        </li>

      </ul>


      <ul class="navbar-nav ">
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle"  href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Name
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">ออกจากระบบ</a></li>
          </ul>
        </li>
      </ul>
      

     
      
    </div>
  </div>
</nav>



</header>


</div>  
<!-- header -->

<br>

<!-- body ######################################################################################   -->

<?php

$search=isset($_GET['search']) ? $_GET['search']:'';

$data = "SELECT *  FROM product WHERE productName Like '%$search%'";
$dataQuery = mysqli_query($check, $data);

?>


<div style="width:80%; margin:0px auto;"> 
<table>
<td align="left">
<!-- insert popup ######################################################################################   -->
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#insPopup">
  เพิ่มสินค้า
</button>


<!-- insert popup ######################################################################################   -->
<div class="modal fade" id="insPopup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">เพิ่มสินค้า</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        

      <form action="pdprocess_ins.php" method="post"  >
  <div class="mb-3">
    <label for="exampleInput" class="form-label">ชื่อสินค้า</label>
    <input name="productName" type="text" class="form-control" id="exampleInput" >
  </div>
  <div class="mb-3">
    <label for="exampleInput" class="form-label">ประเภทสินค้า</label>
    <input name="productCategory" type="text" class="form-control" id="exampleInput">
  </div>
  <div class="mb-3">
    <label for="exampleInput" class="form-label">จำนวนที่เหลือ</label>
    <input name="remainUnit" type="text" class="form-control" id="exampleInput">
  </div>
  <div class="mb-3">
    <label for="exampleInput" class="form-label">หน่วย</label>
    <input name="unit" type="text" class="form-control" id="exampleInput">
  </div>
  <div class="mb-3">
    <label for="exampleInput" class="form-label">ราคา</label>
    <input name="price" type="text" class="form-control" id="exampleInput">
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">ยกเลิก</button>
        <button type="submit" class="btn btn-primary" value="Complete">ยืนยัน</button>
      </div>
      </form>

    </div>
  </div>
</div>

<!-- insert popup ######################################################################################   -->
</td>
</table>


<div class ="nav justify-content-end">
<form class="d-flex" method="get" id="form" enctype="multipart/form-data" action="" >
<div class="col-auto me-3">
      <input class="form-control"  placeholder="พิมพ์ชื่อสินค้าที่ต้องการค้นหา" type="text" name="search" value="">
</div>
<div class="col-sm">
      <input class="btn btn-success" type="submit" value="ค้นหา">
</div>
</form>
</div>




<table class="table table-striped">

<tr>
<td  align="center" width="5%">รหัสสินค้า</td> 
<td  align="center" width="40%">ชื่อสินค้า</td>
<td  align="center" width="15%">ประเภทสินค้า</td>
<td  align="center" width="10%">จำนวน</td>
<td  align="center" width="10%">หน่วย</td>
<td  align="center" width="5%">ราคา</td>
<td  align="center" width="10%"></td>
<td  align="center" width="5%"></td>
</tr>

<?php
while ($dataResult = mysqli_fetch_assoc($dataQuery)) {
?>

<tr>
<td align="center"><?php echo $dataResult["productID"]; ?></td>
<td align="center"><?php echo $dataResult["productName"]; ?></td>
<td align="center"><?php echo $dataResult["productCategory"]; ?></td>
<td align="center"><?php echo $dataResult["remainUnit"]; ?></td>
<td align="center"><?php echo $dataResult["unit"]; ?></td>
<td align="center"><?php echo $dataResult["price"]; ?></td>

<td align="center">
<a href = "product_upd.php?id=<?php echo $dataResult["productID"];?>">
<button type="button" class="btn btn-outline-info">แก้ไขข้อมูล</button></a>
</td>






<td align="center">
<a href = "product_processdel.php?iddel=<?php echo $dataResult["productID"];?>">
<button type="button" class="btn btn-outline-danger">ลบ</button></a>
</td>


</tr>

<?php
  }   
?>

</table>

</div>

<!-- body -->
</body>

</html>
