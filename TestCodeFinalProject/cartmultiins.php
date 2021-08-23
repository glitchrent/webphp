
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
<tr>
  <td>รหัส</td>
  <td>ชื่อ</td>
  <td>จำนวนที่จะส่งออก</td>
  <td>ราคา</td>
  <td>ราคารวมต่อชิ้น</td>
      
</tr>

  
<?php
$i =0;
while($dataResult = mysqli_fetch_array($dataQuery))
{
	$i = $i + 1;
?>

<?php 
/*
$sum = $_POST["price"] * $_POST["txtaddunit"];
$total += $sum;
*/
?>

  <tr>
    
  <td>

	<input type="hidden" name="hdnproductID<?php echo $i;?>"  value="<?php echo $dataResult["productID"];?>">

	<input type="text" name="txtproductID<?php echo $i;?>" value="<?php echo $dataResult["productID"];?>">

	</td>

    <td><input type="text" name="txtproductName<?php echo $i;?>" value="<?php echo $dataResult["productName"];?>"></td>
  
    <td><input type="text" name="txtaddunit<?php echo $i;?>" value=""></td>

    <td><input type="text" name="txtprice<?php echo $i;?>" value="<?php echo $dataResult["price"];?>"></td>

    <td><input type="text" id="txtaddunit" onkeyup="sumunp()" ></td>
    <td><input type="text" id="txtprice" onkeyup="sumunp()" value="<?php echo $dataResult["price"];?>"></td>
    <td><input type="text" id="totalunp" ></td>
  </tr>
<?php
}
?>
</table>


  <input type="hidden" name="hdnNo" value="<?php echo $i;?>">
</form>
<!--
<a href = "clearcartpc.php?iddel=remove"><button type="button">ล้างตะกร้า</button></a>
-->


</body>

<script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.js"></script>

    <script type="text/javascript">
        function sumunp() {
            var txtaddunit = document.getElementById('txtaddunit').value;
            var txtprice = document.getElementById('txtprice').value;
            var result = parseInt(txtaddunit) * parseInt(txtprice);
            if (!isNaN(result)) {
                document.getElementById('totalunp').value = result;
            }
        }
    </script>


</html>