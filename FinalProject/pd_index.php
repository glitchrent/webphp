<?php require("conn.php");   ?> 
<?php require("bootstrapscrip.php");   ?> 

<?php 
    session_start();

    if (!isset($_SESSION['username'])) {
        header('location: login.php');

    }


    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }


?>


<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->


    <title>สินค้า</title>

</head>

<body>

<?php include 'header.php'; ?>

<div class="faidpage">
<br>

<!-- alert outofstock -->

<?php

$outofstockcheck = " SELECT remainUnit FROM product WHERE remainUnit <= 10 ";
$outofresult = mysqli_query($check, $outofstockcheck) or die(mysqli_error());
$leavestock = mysqli_num_rows($outofresult);

if($leavestock > 0){
    echo "<script>";
    echo "alert(' มีสินค้าใกล้หมดแล้ว !! กรุณาตรวจสอบสินค้า !!');";
    echo "</script>";
    
}

?>

<!-- alert outofstock -->

<!-- body ######################################################################################   -->

<?php

$search=isset($_GET['search']) ? $_GET['search']:'';

$data = "SELECT *  FROM product WHERE productName Like '%$search%'";
$dataQuery = mysqli_query($check, $data);


?>


<?php

$data2 = "SELECT *  FROM pdcategory ";
$dataQuery2 = mysqli_query($check, $data2);

?>

<div style="width:80%; margin:0px auto;"> 

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

      <form action="pd_ins_pc.php" method="post"  >

  <div class="mb-3">
    <label for="exampleInput" class="form-label">ชื่อสินค้า</label>
    <input name="productName" type="text" class="form-control" id="" >
  </div>

  <div class="mb-3">
    <label for="exampleInput" class="form-label">ประเภทสินค้า</label>
    
  <input name="productCategory" class="form-control" list="datalistOptions" id="exampleDataList" placeholder="เลือกประเภท...">
<datalist id="datalistOptions">
<?php
while ($dataResult2 = mysqli_fetch_assoc($dataQuery2)) {
?>
  <option value="<?php echo $dataResult2["categoryName"]; ?>">

<?php
  }   
?>

</div>



  <div class="mb-3">
    <label for="exampleInput" class="form-label">จำนวน</label>
    <input name="remainUnit" readonly="readonly"  type="text" class="form-control" id="" value="0">
  </div>

  <div class="mb-3">
    <label for="exampleInput" class="form-label">หน่วย ( เช่น กล่อง,โหล,ชิ้น )</label>
    <input name="unit" type="text" class="form-control" id="" >
  </div>

  <div class="mb-3">
    <label for="exampleInput" class="form-label">ราคา</label>
    <input name="price" type="text" class="form-control" id="">
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

<a href="pd_outofstock.php"><button type="button" class="btn btn-danger">สินค้าใกล้หมด ( <?php echo $leavestock; ?> รายการ )</button></a>

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
<td  align="center" width="10%">รหัสสินค้า</td> 
<td  align="center" width="">ชื่อสินค้า</td>
<td  align="center" width="">ประเภทสินค้า</td>
<td  align="center" width="">จำนวน</td>
<td  align="center" width="">หน่วย</td>
<td  align="center" width="">ราคา</td>
<td  align="center" width="10%"></td>
<td  align="center" width="10%"></td>
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
<a href = "pd_upd.php?id=<?php echo $dataResult["productID"];?>">
<button type="button" class="btn btn-outline-info">แก้ไขข้อมูล</button></a>
</td>

<td align="center">
<a href = "pd_del_pc.php?iddel=<?php echo $dataResult["productID"];?>">
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
