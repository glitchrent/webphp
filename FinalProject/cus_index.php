<?php require("conn.php");   ?> 
<?php require("bootstrapscrip.php");   ?> 

<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->


    <title>ลูกค้า</title>

</head>

<body>

<!-- header -->
<div style="width:100%; margin:0px auto;"> 

<header class="p-2" style="background-color: #7FD4FF;">
<nav class="navbar navbar-expand-lg navbar-light" style="width:80%; margin:0px auto; background-color: #7FD4FF;">
  <div class="container-fluid ">
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
        
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"> ระบบจัดการลูกค้า</a>
        </li>

 

   

      </ul>


      <ul class="navbar-nav ">
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle"  href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            เมนู
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="admin_menu.php">กลับไปหน้าเลือกเมนู</a></li>
            <li><a class="dropdown-item" href="pd_index.php?logout='1'">ออกจากระบบ</a></li>
          </ul>
        </li>
      </ul>
     
      

     
      
    </div>
  </div>
</nav>

</header>
<!-- header -->

</div>  

<br>
<div style="width:80%; margin:0px auto;"> 
 
<?php

$data = ' SELECT *  FROM customer; ';
$dataQuery = mysqli_query($check, $data);

?>

<center> <h2>ข้อมูลลูกค้า</h2> </center>

<br>

<table class="table table-striped table-hover" border="0">

<tr>

<td align="center"> ชี่อผู้ใช้</td> 
<td align="center"> รหัสผ่าน</td>
<td align="center"> ชื่อ</td>
<td align="center"> นามสกุล</td>
<td align="center"> เบอร์</td>
<td align="center"> ที่อยู่</td>
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

<td align="center"><a href = "mb_del_pc.php?iddel=<?php echo $dataResult["username"];?>"><button type="button" class="btn btn-outline-danger">ลบ</button></a></a></td>


</tr>

<?php  }   ?>

</table>

<div>

</body>

</html>
