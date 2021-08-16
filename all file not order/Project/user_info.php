<?php require("connect.php");   ?> 


<!DOCTYPE html>
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
          <li><a href="#" class="nav-link px-2 link-light"></a></li>
          <li><a href="indexmenu_admin.php" class="nav-link px-2 link-light">กลับหน้าเลือกเมนู</a></li>
         

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



    
    
    
<?php

$data = ' SELECT *  FROM user; ';
$dataQuery = mysqli_query($check, $data);


?>
    
<br>
<table class="table table-striped table-hover" border="1">

<tr>

<td align="center"> ชี่อผู้ใช้</td> 
<td align="center"> รหัสผ่าน</td>
<td align="center"> ชื่อ</td>
<td align="center"> นามสกุล</td>
<td align="center"> เบอร์</td>
<td align="center"> ที่อยู่</td>
<td align="center"> สถานะ</td>
<td align="center"><a href = "user_insert.php"> <button type="button" class="btn btn-primary">เพิ่มพนักงาน</button></a></td>
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
<td align="center"><a href = "user_update.php?id=<?php echo $dataResult["username"];?>"><button type="button" class="btn btn-outline-info">อัพเดตข้อมูล</button></a></td>
<td align="center"><a href = "user_processdel.php?iddel=<?php echo $dataResult["username"];?>"><button type="button" class="btn btn-outline-danger">ลบ</button></a></a></td>
<td align="center"></td>

</tr>




<?php  }   ?>

</table>


    </body>
</html>