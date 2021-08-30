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

<?php include 'header.php'; ?>

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
        

      <form action="mb_ins_pc.php" method="post"  >
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
<td align="center"><a href = "mb_upd.php?id=<?php echo $dataResult["username"];?>"><button type="button" class="btn btn-outline-info">อัพเดตข้อมูล</button></a></td>
<td align="center"><a href = "mb_del_pc.php?iddel=<?php echo $dataResult["username"];?>"><button type="button" class="btn btn-outline-danger">ลบ</button></a></a></td>


</tr>

<?php  }   ?>

</table>

<div>

</body>

</html>
