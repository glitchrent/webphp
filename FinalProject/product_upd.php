<?php require("conn.php");  ?>  

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




<form action="pdprocess_upd.php" method="post" >

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