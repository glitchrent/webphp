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

$id=$_GET['id'];
$data="SELECT * FROM user WHERE username='$id'";
$dataQuery = mysqli_query($check,$data);
$dataTranfer=mysqli_fetch_assoc($dataQuery)

?>
<header class="p-3 bg-dark text-white">
    
    <center><h1>อัพเดตข้อมูลพนักงาน</h1></center>
</header>




<form action="mb_upd_pc.php" method="post" >

<input type="hidden"  value="<?php echo $dataTranfer["username"];?>"name ="username">
<br>
<table  align="center">
<td>

   

    <div class="mb-3">
    <label for="exampleInput" class="form-label">รหัสผ่าน</label>
    <input class="form-control" type="text" name="password" value="<?php echo $dataTranfer['password']?>">
    </div>
    <div class="mb-3">
    <label for="exampleInput" class="form-label">ชื่อ</label>
    <input class="form-control" type="text" name="name" value="<?php echo $dataTranfer['name']?>">         
    </div>
    <div class="mb-3">
    <label for="exampleInput" class="form-label">นามสกุล</label>
    <input class="form-control" type="text" name="surname" value="<?php echo $dataTranfer['surname']?>">
    </div>
    <div class="mb-3">
    <label for="exampleInput" class="form-label">เบอร์</label>
    <input class="form-control" type="text" name="tel" value="<?php echo $dataTranfer['tel']?>">
    </div>
    <div class="mb-3">
    <label for="exampleInput" class="form-label">ที่อยู่</label>
    <input class="form-control" type="text" name="address" value="<?php echo $dataTranfer['address']?>">
    </div>
    <div class="mb-3">
    <label for="exampleInput" class="form-label">สถานะ</label>
    <input class="form-control" type="text" name="role" value="<?php echo $dataTranfer['role']?>">
    </div>
    <div class="mb-3" align="center">
  <button type="submit" class="btn btn-primary" value="Complete">ยืนยัน</button>
  <a href="javascript:history.back()"><button type="button" class="btn btn-danger" >ยกเลิก</button></a>
  </div>
</td>
</table>

</body>


</html>
