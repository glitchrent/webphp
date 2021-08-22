
<?php require("conn.php");  ?>

<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
   <link rel="stylesheet" type="text/css" href="Project\mystyle.css">


    <title>Format</title>
    </head>

    
<body>


  <br>


<?php  
$data = "SELECT *  FROM cart";
$dataQuery = mysqli_query($check, $data);
?>

<form name="form" method="post" action="cartmultiinspc.php?Action=Save">
<table class="table table-striped">
  <tr>
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
	<?php echo $dataResult["productID"];?>
	</td>
    <td><?php echo $dataResult["productName"];?></td>
    <td align="center"><?php echo $dataResult["price"];?></td>
    <td align="center"><input class="form-control" type="text" name="txtaddunit<?php echo $i;?>" value=""></td>
    <td></td>
  </tr>
<?php
}
?>
</table>
  
  <input type="hidden" name="hdnNo" value="<?php echo $i;?>">
</form>

</body>
</html>