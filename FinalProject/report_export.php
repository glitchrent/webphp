<?php require("conn.php");   ?> 
<?php require("bootstrapscrip.php");   ?> 
<?php 
require("hide_error.php");   
?> 
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->


    <title>รายงานการนำเข้า-ส่งออก</title>
    <style>
          @media print 
{ 
#non-printable { display: none; } 
#printable { display: block; } 
} 
</style>
</head>

<body>


<?php include 'header.php'; ?>

<div class="faidpage">

<br>

<!-- body ######################################################################################   -->

<?php



if($_GET['searchdate'] == NULL){
      $_GET['searchdate']='2021-01-01';
}
if($_GET['searchdate2'] == NULL){
      $_GET['searchdate2']='2022-12-02';
}

$search=isset($_GET['search']) ? $_GET['search']:'';
$searchdate=isset($_GET['searchdate']) ? $_GET['searchdate']:'2020-00-00';
$searchdate2=isset($_GET['searchdate2']) ? $_GET['searchdate2']:'2022-00-00';

$data = "SELECT * FROM report WHERE (imstatus Like 'ส่งออก') AND productName Like '%$search%' AND (date >= '$searchdate' and date <= '$searchdate2')  ORDER BY reportID DESC";
$dataQuery = mysqli_query($check, $data);



?>



<div style="width:80%; margin:0px auto;"> 
<div id="non-printable">
<input type="button" class="btn btn-outline-info" value="ปริ้นรายงาน" onclick="window.print()">


<div class ="nav justify-content-end">
<form class="d-flex" method="get" id="form" enctype="multipart/form-data" action="" >
<div class="col-auto me-3">
      <table>
            <tr><td>ชื่อสินค้า</td><td>วันที่</td><td>ถึงวันที่</td></tr>
      <tr>
      <td><input class="form-control"  placeholder="พิมพ์ชื่อที่ต้องการค้นหา" type="text" name="search" value=""></td>
      <td><input class="form-control"  placeholder="" type="date" name="searchdate" value=""></td>
      <td><input class="form-control"  placeholder="" type="date" name="searchdate2" value=""></td>
      <td><input class="btn btn-success" type="submit" value="ค้นหา"></td>
</tr>
</table>
</div>
<div class="col-sm">
      
</div>
</form>
</div>
</div>


<?php 

if($searchdate == '2021-01-01'){
echo '<h2>รายงาน การขาย</h2>';
}else{
echo '<h2>รายงาน การขาย วันที่ '.date('d/m/Y', strtotime($searchdate)).' ถึงวันที่ '.date('d/m/Y', strtotime($searchdate2)).'<h2>' ;
}

?>

<table class="table table-striped">

<tr>
<td  align="center" width="10%">รหัสออร์เดอร์</td> 
<td  align="center" width="5%">รหัสสินค้า</td>
<td  align="center" width="20%">ชื่อสินค้า</td>
<td  align="center" width="10%">วันที่</td>
<td  align="center" width="10%">สถานะ</td>
<td  align="center" width="5%">จำนวน</td>
<td  align="center" width="10%">ราคารวม</td>

</tr>

<?php
while ($dataResult = mysqli_fetch_assoc($dataQuery)) {
?>

<tr>
<td align="center"><?php echo $dataResult["reportID"]; ?></td>
<td align="center"><?php echo $dataResult["productID"]; ?></td>
<td align="center"><?php echo $dataResult["productName"]; ?></td>
<td align="center"><?php 

$newdate =  date('d-m-Y H:i:s', strtotime($dataResult['date']));

echo $newdate; ?></td>
<td align="center"><?php echo $dataResult["imstatus"]; ?></td>
<td align="center"><?php echo $dataResult["exportunit"]; ?></td> 
<td align="center"><?php echo $dataResult["totalunp"]; ?></td>




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
