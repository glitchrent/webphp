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

</body>
<div style="width:80%; margin:0px auto;"> 


   
<?php

$data = ' SELECT *  FROM user; ';
$dataQuery = mysqli_query($check, $data);


?>

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
        <h5 class="modal-title" id="exampleModalLabel">เพิ่มพนักงาน</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        

      <form action="usprocess_ins.php" method="post"  >
  <div class="mb-3">
    <label for="exampleInput" class="form-label">ชี่อผู้ใช้</label>
    <input name="username" type="text" class="form-control" id="exampleInput" >
  </div>
  <div class="mb-3">
    <label for="exampleInput" class="form-label">รหัสผ่าน</label>
    <input name="password" type="text" class="form-control" id="exampleInput">
  </div>
  <div class="mb-3">
    <label for="exampleInput" class="form-label">ชี่อ</label>
    <input name="name" type="text" class="form-control" id="exampleInput">
  </div>
  <div class="mb-3">
    <label for="exampleInput" class="form-label">นามสกุล</label>
    <input name="surname" type="text" class="form-control" id="exampleInput">
  </div>
  <div class="mb-3">
    <label for="exampleInput" class="form-label">เบอร์โทร</label>
    <input name="tel" type="text" class="form-control" id="exampleInput">
  </div>
  <div class="mb-3">
    <label for="exampleInput" class="form-label">ที่อยู่</label>
    <input name="address" type="text" class="form-control" id="exampleInput">
  </div>
  <div class="mb-3">
    <label for="exampleInput" class="form-label">สถานะ</label>
    <input name="role" type="text" class="form-control" id="exampleInput">
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

<br>
<table class="table table-striped table-hover" border="0">

<tr>

<td align="center"> ชี่อผู้ใช้</td> 
<td align="center"> รหัสผ่าน</td>
<td align="center"> ชื่อ</td>
<td align="center"> นามสกุล</td>
<td align="center"> เบอร์</td>
<td align="center"> ที่อยู่</td>
<td align="center"> สถานะ</td>
<td align="center"></td>
<td align="center"></td>

</tr>

<?php

while ($dataResult = mysqli_fetch_assoc($dataQuery)) {
?>

<tr>

<td align="center"> <?php echo $dataResult["username"]; ?> </td>
<td align="center"> <?php echo $dataResult["password"]; ?> </td>
<td align="center"> <?php echo $dataResult["name"]; ?> </td>
<td align="center"> <?php echo $dataResult["surname"]; ?> </td>
<td align="center"> <?php echo $dataResult["tel"]; ?> </td>
<td align="center"> <?php echo $dataResult["address"]; ?> </td>
<td align="center"> <?php echo $dataResult["role"]; ?> </td>
<td align="center"><a href = "user_upd.php?id=<?php echo $dataResult["username"];?>"><button type="button" class="btn btn-outline-info">อัพเดตข้อมูล</button></a></td>
<td align="center"><a href = "user_processdel.php?iddel=<?php echo $dataResult["username"];?>"><button type="button" class="btn btn-outline-danger">ลบ</button></a></a></td>


</tr>




<?php  }   ?>

</table>

<div>

</body>

</html>
