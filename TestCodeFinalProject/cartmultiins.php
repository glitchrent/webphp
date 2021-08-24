
<?php require("conn.php");  ?>

<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
   <link rel="stylesheet" type="text/css" href="Project\mystyle.css">
   <script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.js"></script>

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
    
    <a href = "clearcartpc.php?iddel=remove"><button type="button">ล้างตะกร้า</button></a>
  </tr>
<tr>
  <td>รหัส</td>
  <td>ชื่อ</td>
  <td>จำนวนที่จะส่งออก</td>
  <td>ราคา</td>
  <td></td>
      
</tr>

  
<?php
$i =0;
while($dataResult = mysqli_fetch_array($dataQuery))
{
	$i = $i + 1;
?>

<?php 

?>

  <tr>
    
  <td>

	<input type="hidden" name="hdnproductID<?php echo $i;?>"  value="<?php echo $dataResult["productID"];?>">

	<input type="text" name="txtproductID<?php echo $i;?>" value="<?php echo $dataResult["productID"];?>">

	</td>

    <td><input type="text" name="txtproductName<?php echo $i;?>" value="<?php echo $dataResult["productName"];?>"></td>
    <td><input type="text" name="txtaddunit<?php echo $i;?>" id="txtaddunit<?php echo $i;?>" onkeyup="sumunp()"></td>
    <td><input type="text" name="txtprice<?php echo $i;?>" id="txtprice<?php echo $i;?>" onkeyup="sumunp()" value="<?php echo $dataResult["price"];?>"></td>
    <td><input type="text" class="sumalltotal" name="totalunp<?php echo $i;?>" id="totalunp<?php echo $i;?>" value=""></td>
  </tr>
<?php
}
?>
<tr>
<td><input type="number" name="totalresult" id="totalresult" /></td>
<td><input class="btn btn-primary" type="submit" name="submit" value="ยืนยัน"></td>
</tr>
</table>


  <input type="hidden" name="hdnNo" value="<?php echo $i;?>">
</form>






</body>

<script src= "autocal.js" charset="utf-8"></script>




<!-- 
    <script type="text/javascript">
        function sumunp() {

            for(n=1;n<=5;n++){
            
            var txtaddunit = document.getElementById('txtaddunit'+n).value;
            var txtprice = document.getElementById('txtprice'+n).value;
            var result = parseInt(txtaddunit) * parseInt(txtprice);
            if (!isNaN(result)) {
                document.getElementById('totalunp'+n).value = result;
            }
        }
        }
    </script>

<script type="text/javascript">

var textboxes = document.querySelectorAll(".sumalltotal");
textboxes.forEach(function(box) {
  box.addEventListener("", sumAll);
});

function sumAll() {
  var total = 0;
  textboxes.forEach(function(box) {
    var val;
    if (box.value == "") val = 0;
    else val = parseInt(box.value);
    total += val;
  });
  document.getElementById("totalresult").value = total;
}

<input type="submit" name="" value="คำนวณเงิน" onclick="sumAll()" />
</script> -->

</html>