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
    
    <center><h1>เพิ่มพนักงาน</h1></center>
</header>
<br>
  <table align="center">
      <td>
  <form action="user_processinsert.php" method="post"  >
<div class="mb-3">
  <label for="exampleInput" class="form-label">ชี่อผู้ใช้</label>
  <input name="username" type="text" class="form-control" id="exampleInput" >
</div>
<div class="mb-3">
  <label for="exampleInput" class="form-label">รหัสผ่าน</label>
  <input name="password" type="text" class="form-control" id="exampleInput">
</div>
<div class="mb-3">
  <label for="exampleInput" class="form-label">ชื่อ</label>
  <input name="name" type="text" class="form-control" id="exampleInput">
</div>
<div class="mb-3">
  <label for="exampleInput" class="form-label">นามสกุล</label>
  <input name="surname" type="text" class="form-control" id="exampleInput">
</div>
<div class="mb-3">
  <label for="exampleInput" class="form-label">เบอร์</label>
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

<div class="mb-3" align="center">
<button type="submit" class="btn btn-primary" value="Complete">ยืนยัน</button>
<a href="javascript:history.back()"><button type="button" class="btn btn-danger" >ยกเลิก</button></a>
</div>
</form>

<td>
</table>






    
    </body>
</html>