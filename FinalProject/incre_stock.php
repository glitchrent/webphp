
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

<div style="width:80%; margin:0px auto;"> 



  <br>

  <form class="d-flex" method="get" id="form" enctype="multipart/form-data" action="" >

<input  class="form-control me-2"  placeholder="พิมพ์ชื่อสินค้าที่ต้องการค้นหา" type="text" name="search" value="">
<input class="btn btn-outline-success" type="submit" value="ค้นหา">

</form>

<?php  
$search=isset($_GET['search']) ? $_GET['search']:'';

$data = "SELECT *  FROM product WHERE productName Like '%$search%'";
$dataQuery = mysqli_query($check, $data);
?>

<form name="form" method="post" action="incre_stock_pc.php?Action=Save">
<table class="table table-striped">
  <tr>
    <td  align="center">  </td>
    <td  align="center">  </td>
    <td  align="center">  </td>
    <td  align="center">  </td>
    <td  align="center">  </td>
    <td  align="center">  </td>
    <td  align="center">  </td>
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
    <input type="text" name="txtproductID<?php echo $i;?>" value="<?php echo $dataResult["productID"];?>">
	</td>
    <td><input type="text" name="txtproductName<?php echo $i;?>" value="<?php echo $dataResult["productName"];?>"></td>
    <td align="center"><?php echo $dataResult["productCategory"];?></td>
    <td><input type="text" readonly = "readonly" name="txtdate<?php echo $i;?>" value="<?php echo date('Y-m-d');?>"><td>
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
</body>
</html>