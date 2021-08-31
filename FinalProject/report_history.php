<?php require("conn.php");   ?> 
<?php require("bootstrapscrip.php");   ?> 
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

<br>

<!-- body ######################################################################################   -->

<?php

$search=isset($_GET['search']) ? $_GET['search']:'';
$searchdate=isset($_GET['searchdate']) ? $_GET['searchdate']:'';

$data = "SELECT *  FROM report WHERE productName Like '%$search%' AND date Like '%$searchdate%' ORDER BY reportID DESC ";
$dataQuery = mysqli_query($check, $data);

?>



<div style="width:80%; margin:0px auto;"> 



<div class ="nav justify-content-end">
<form class="d-flex" method="get" id="form" enctype="multipart/form-data" action="" >
<div class="col-auto me-3">
      <table>
      <tr>
      <td><input class="form-control"  placeholder="พิมพ์ชื่อที่ต้องการค้นหา" type="text" name="search" value=""></td>
      <td><input class="form-control"  placeholder="" type="date" name="searchdate" value=""></td>
</tr>
</table>
</div>
<div class="col-sm">
      <input class="btn btn-success" type="submit" value="ค้นหา">
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
<td align="center"><?php echo $dataResult["reportID"]; ?></td>
<td align="center"><?php echo $dataResult["productID"]; ?></td>
<td align="center"><?php echo $dataResult["productName"]; ?></td>
<td align="center"><?php 

$newdate =  date('d-m-Y', strtotime($dataResult['date']));

echo $newdate; ?></td>


<td align="center">
<?php

$testtext = $dataResult['imstatus'];
if ($testtext == "นำเข้า"){
      echo  '<text style="color:#03B400;"> นำเข้า </text> ';
}else{
      echo '<text style="color:RED;"> ส่งออก </text> ';
}

 ?></td> 
<td><?php

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
 <a href = "rp_his_del_pc.php?iddel=<?php echo $dataResult["reportID"];?>">
<button type="button" class="btn btn-outline-danger">ลบ</button></a>
 </td>



<!-- <td align="center"><?php /* echo $dataResult["totalunp"]; */ ?></td> -->

</tr>

<?php
  }   
?>

</table>

</div>

<!-- body -->
</body>

</html>
