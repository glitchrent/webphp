
<?php require("conn.php");  ?>

<html>
<head>
  
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>


   <link rel="stylesheet" type="text/css" href="Project\mystyle.css">
   <script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.js"></script>

    <title>Format</title>
    </head>

    
<body>

<div style="width:80%; margin:0px auto;"> 

  <br>


<?php  
$data = "SELECT *  FROM cart";
$dataQuery = mysqli_query($check, $data);
?>

<form name="form" method="post" action="cartmultiinspc.php?Action=Save">
<table class="table table-striped">
  <tr>
    
    <a href = "clearcartpc.php?iddel=remove"><button type="button" class="btn btn-danger">ล้างสินค้าทั้งหมด</button></a>
  </tr>
<tr>
  <td>รหัสสินค้า</td>
  <td>ชื่อ</td>
  <td>วันที่ส่งออก</td>
  <td>จำนวนที่เหลือ</td>
  <td>จำนวน</td>
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

?>

  <tr>
    
  <td>

	<input type="hidden" name="hdnproductID<?php echo $i;?>"  value="<?php echo $dataResult["productID"];?>">

	<input type="text" readonly="readonly" name="txtproductID<?php echo $i;?>" value="<?php echo $dataResult["productID"];?>">

	</td>

    <td><input type="text" readonly="readonly" name="txtproductName<?php echo $i;?>" value="<?php echo $dataResult["productName"];?>"></td>
    <td><input type="date"  name="txtdate<?php echo $i;?>" value="<?php echo date('Y-m-d');?>"><td>
    
    <input type="hidden" name="txtimstatus<?php echo $i;?>" value="ส่งออก">
    <input type="hidden" name="" value="<?php echo $dataResult["remainUnit"];?>">
    ( สินค้าคงเหลือ <?php echo $dataResult["remainUnit"];?> )
    <td><input type="number" name="txtaddunit<?php echo $i;?>" id="txtaddunit<?php echo $i;?>" onkeyup="sumunp()" min="1" max="<?php echo $dataResult["remainUnit"];?>"></td>
    <td><input type="text" readonly="readonly" name="txtprice<?php echo $i;?>" id="txtprice<?php echo $i;?>" onkeyup="sumunp()" value="<?php echo $dataResult["price"];?>"></td>
    <td><input type="text" readonly="readonly" class="sumalltotal" name="totalunp<?php echo $i;?>" id="totalunp<?php echo $i;?>" value=""></td>
  </tr>
  
<?php
}
?>
<tr>
<td colspan="4"></td>
<input type="hidden" readonly="readonly" name="txtorderdate" value="<?php echo date('Y-m-d');?>">
<td><input class="btn btn-primary" type="submit" name="submit" value="ยืนยัน"></td>
<td>ราคารวมทั้งหมด </td>
<td><input type="number" readonly="readonly" name="totalresult" id="totalresult" /> บาท </td>

</tr>
</table>


  <input type="hidden" name="hdnNo" value="<?php echo $i;?>">
</form>



<a href ="testcart.php">กลับไปหน้าเลือกสินค้า</a>

</div> 

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