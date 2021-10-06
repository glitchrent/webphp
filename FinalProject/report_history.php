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

$data = "SELECT *  FROM report WHERE productName Like '%$search%' AND (date >= '$searchdate' and date <= '$searchdate2')  ORDER BY reportID DESC ";
$dataQuery = mysqli_query($check, $data);

?>



<div style="width:80%; margin:0px auto;"> 



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




<table class="table table-striped">

<tr>
<td  align="center" width="10%">รหัสออร์เดอร์</td> 
<td  align="center" width="10%">รหัสสินค้า</td>
<td  align="center" width="15%">ชื่อสินค้า</td>
<td  align="center" width="10%">วันที่</td>
<td  align="center" width="10%">สถานะ</td>
<td  align="center" width="5%">จำนวน</td>
<td width="5%"></td>
<!-- <td  align="center" width="10%">ราคารวม</td> -->

</tr>

<?php
while ($dataResult = mysqli_fetch_assoc($dataQuery)) {
?>



<tr>

<form name="form" method="post" action="rp_his_del_pc.php?Action=Save">

<td align="center">
<?php echo $dataResult["reportID"]; ?>
<input type ="hidden" name="reportID" value="<?php echo $dataResult["reportID"]; ?>">
</td>

<td align="center">
<?php echo $dataResult["productID"]; ?>
<input type ="hidden" name="productID" value="<?php echo $dataResult["productID"]; ?>">
</td>

<td align="center"><?php echo $dataResult["productName"]; ?></td>

<td align="center">
<?php 

$newdate =  date('d-m-Y H:i:s', strtotime($dataResult['date']));

echo $newdate; ?></td>


<td align="center">

<input type ="hidden" name="imstatus" value="<?php echo $dataResult["imstatus"]; ?>">

<?php

$testtext = $dataResult['imstatus'];
if ($testtext == "นำเข้า"){
      echo  '<text style="color:#03B400;"> นำเข้า </text> ';
}else{
      echo '<text style="color:RED;"> ส่งออก </text> ';
}

 ?></td> 

<td align="center">

<input type="hidden" name="exportunit" value="<?php echo $dataResult["exportunit"]; ?>">

<?php

$testtext = $dataResult['imstatus'];
if ($testtext == "นำเข้า"){

      echo '+ ' ;
      echo  $dataResult["exportunit"];

}else{

      echo '- ' ;
      echo  $dataResult["exportunit"];

}

 ?>
 </td>
 
 <td>
<button type="submit" class="btn btn-outline-danger">ลบ</button>
 </td>
</form>


<!-- <td align="center"><?php /* echo $dataResult["totalunp"]; */ ?></td> -->

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
