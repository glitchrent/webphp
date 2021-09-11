
<?php require("conn.php");   ?> 
<?php require("bootstrapscrip.php");   ?> 
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->



    <title>เพิ่มออร์เดอร์</title>
    </head>

    
<body>


<?php include 'header.php'; ?>

<div class="faidpage">

<div style="width:80%; margin:0px auto;"> 



<br>

<div class ="nav justify-content-end">
<form class="d-flex" method="get" id="form" enctype="multipart/form-data" action="" >
<div class="col-auto me-3">
      <table>
      <tr>
      <td><input class="form-control"  placeholder="พิมพ์ชื่อที่ต้องการค้นหา" type="text" name="search" value=""></td>
</tr>
</table>
</div>
<div class="col-sm">
      <input class="btn btn-success" type="submit" value="ค้นหา">
</div>
</form>
</div>


<?php  
$search=isset($_GET['search']) ? $_GET['search']:'';

$data = "SELECT *  FROM product WHERE productName Like '%$search%'";
$dataQuery = mysqli_query($check, $data);
?>

<form name="form" method="post" action="incre_stock_pc.php?Action=Save">
<table class="table table-striped">
  <tr>
    <td  align="center">รหัสสินค้า</td>
    <td  align="center">ชื่อสินค้า</td>
    <td  align="center"width="15%" >รูป</td>
    <td  align="center">ประเภท</td>
    <td  align="center">วันที่</td>
    <td  align="center"></td>
    <td  align="center">จำนวนคงเหลือ</td>
    <td  align="center">จำนวนที่เพิ่ม</td>
    <td  align="center"><input class="btn btn-primary" type="submit" name="submit" value="ยืนยัน"></td>
  </tr>

<?php
$i =0;
while($dataResult = mysqli_fetch_array($dataQuery))
{
	$i = $i + 1;
?>
  <tr>
  <td align="center">
	<input type="hidden" name="hdnproductID<?php echo $i;?>"  value="<?php echo $dataResult["productID"];?>">
  <input type="text" name="txtproductID<?php echo $i;?>" value="<?php echo $dataResult["productID"];?>" readonly>
	</td>
    <td align="center"><input type="text" name="txtproductName<?php echo $i;?>" value="<?php echo $dataResult["productName"];?>" readonly></td>
    <td><img src="Picture/<?php echo $dataResult["productPic"]; ?>" width="100%"></td>
    <td align="center"><?php echo $dataResult["productCategory"];?></td>
    <td align="center"><input type="date" name="txtdate<?php echo $i;?>" value="<?php echo date('Y-m-d');?>"><td>
    <input type="hidden" name="txtimstatus<?php echo $i;?>" value="นำเข้า">
    <td align="center"><?php echo $dataResult["remainUnit"];?></td>
    <td align="center"><input class="form-control" type="text" name="txtaddunit<?php echo $i;?>" value=""></td>
    <td></td>
  </tr>
<?php
}
?>
</table>
  
  <input type="hidden" name="hdnNo" value="<?php echo $i;?>">
</form>

</div> 
</div>
</body>
</html>