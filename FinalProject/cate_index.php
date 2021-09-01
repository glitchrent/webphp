<?php require("conn.php");   ?> 
<?php require("bootstrapscrip.php");   ?> 
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
 

    <title>ประเภทสินค้า</title>

</head>

<body>

<?php include 'header.php'; ?>

<div class="faidpage">
<br>






<!-- body ######################################################################################   -->

<?php

$search=isset($_GET['search']) ? $_GET['search']:'';

$data = "SELECT *  FROM pdcategory WHERE categoryName Like '%$search%'";
$dataQuery = mysqli_query($check, $data);

?>



</datalist>


<div style="width:80%; margin:0px auto;"> 

<!-- insert popup ######################################################################################   -->
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#insPopup">
เพิ่มประเภทสินค้า
</button>

<!-- insert popup ######################################################################################   -->
<div class="modal fade" id="insPopup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">เพิ่มประเภทสินค้า</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <form action="cate_ins_pc.php" method="post"  >

  <div class="mb-3">
    <label for="exampleInput" class="form-label">รหัสประเภทสินค้า</label>
    <input name="cateID" type="text" class="form-control" id="" readonly >
  </div>

  <div class="mb-3">
    <label for="exampleInput" class="form-label">ชื้อประเภทสินค้า</label>
    <input name="categoryName" type="text" class="form-control" id="">
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
<td  align="center" width="10%">รหัสประเภทสินค้า</td> 
<td  align="center" width="">ชื่อประเภทสินค้า</td>
<td></td>

</tr>

<?php
while ($dataResult = mysqli_fetch_assoc($dataQuery)) {
?>

<tr>
<td align="center"><?php echo $dataResult["cateID"]; ?></td>
<td align="center"><?php echo $dataResult["categoryName"]; ?></td>


<td align="center">
<a href = "cate_del_pc.php?iddel=<?php echo $dataResult["cateID"];?>">
<button type="button" class="btn btn-outline-danger">ลบ</button></a>
</td>


</tr>

<?php
  }   
?>




</table>

</div>
</div>
<!-- body -->
</body>

</html>
