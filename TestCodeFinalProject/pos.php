<?php require("conn.php");   ?>
<html>
<head>
</head>

<body>


<form action="pdprocess_ins.php" method="post"  >
  <div class="mb-3">
    <label for="exampleInput" class="form-label">ชื่อสินค้า</label>
    <input name="productName" type="text" class="form-control" id="exampleInput" >
  </div>
  <div class="mb-3">
    <label for="exampleInput" class="form-label">ประเภทสินค้า</label>
    <input name="productCategory" type="text" class="form-control" id="exampleInput">
  </div>
  <div class="mb-3">
    <label for="exampleInput" class="form-label">จำนวนที่เหลือ</label>
    <input name="remainUnit" type="text" class="form-control" id="exampleInput">
  </div>
  <div class="mb-3">
    <label for="exampleInput" class="form-label">หน่วย</label>
    <input name="unit" type="text" class="form-control" id="exampleInput">
  </div>
  <div class="mb-3">
    <label for="exampleInput" class="form-label">ราคา</label>
    <input name="price" type="text" class="form-control" id="exampleInput">
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">ยกเลิก</button>
        <button type="submit" class="btn btn-primary" value="Complete">ยืนยัน</button>
      </div>
      </form>

</body>

<?php

$data = "SELECT *  FROM product";
$dataQuery = mysqli_query($check, $data);

?>

<label for="exampleDataList" class="form-label">Datalist example</label>
<input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
<datalist id="datalistOptions">

<?php
while ($dataResult = mysqli_fetch_assoc($dataQuery)) {
?>

  <option value="<?php echo $dataResult["productName"]; ?>">

<?php
  }   
?>


</datalist>

</html>
