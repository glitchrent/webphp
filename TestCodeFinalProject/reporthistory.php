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

$data = "SELECT *  FROM report WHERE productName Like '%$search%'";
$dataQuery = mysqli_query($check, $data);

?>



<div style="width:80%; margin:0px auto;"> 



<div class ="nav justify-content-end">
<form class="d-flex" method="get" id="form" enctype="multipart/form-data" action="" >
<div class="col-auto me-3">
      <input class="form-control"  placeholder="" type="text" name="search" value="">
</div>
<div class="col-sm">
      <input class="btn btn-success" type="submit" value="ค้นหา">
</div>
</form>
</div>




<table class="table table-striped">

<tr>
<td  align="center" width="10%">รหัสออร์เดอร์</td> 
<td  align="center" width="10%">รหัสสินค้า</td>
<td  align="center" width="15%">ชื่อสินค้า</td>
<td  align="center" width="10%">วันที่</td>
<td  align="center" width="10%">สถานะ</td>
<td  align="center" width="5%">จำนวน</td>
<td  align="center" width="10%">ราคารวม</td>
<td  align="center" width="5%"></td>
</tr>

<?php
while ($dataResult = mysqli_fetch_assoc($dataQuery)) {
?>

<tr>
<td align="center"><?php echo $dataResult["reportID"]; ?></td>
<td align="center"><?php echo $dataResult["productID"]; ?></td>
<td align="center"><?php echo $dataResult["productName"]; ?></td>
<td align="center"><?php echo $dataResult["date"]; ?></td>
<td align="center"><?php echo $dataResult["imstatus"]; ?></td>
<td align="center"><?php echo $dataResult["exportunit"]; ?></td> 
<td align="center"><?php echo $dataResult["totalunp"]; ?></td>
<td align="center">

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
