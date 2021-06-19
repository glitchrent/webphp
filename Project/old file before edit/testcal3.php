<?php require("connect.php");  ?>  
<html>
<body>

<a href="admin_page.php?logout='1'">ออกจากระบบ</a>

<a href = "insert.php"> insert page </a>


<?php

$data = ' SELECT *  FROM product; ';
$dataQuery = mysqli_query($check, $data);

?>


<form action="testcaldb.php?Action=Save" method="POST"  >

<table class="table table-striped" border="1">

<tr>

<td>รหัสสินค้า</td> 
<td>ชื่อสินค้า</td>
<td>จำนวนที่เหลือ</td>
<td></td>

</tr>

<?php

while ($dataResult = mysqli_fetch_assoc($dataQuery)) {
?>

<tr>

<td> <input name ='id' type="text"  value="<?php echo $dataResult["productID"];?>"> </td>
<td> <?php echo $dataResult['productName']; ?> </td>
<td> <?php echo $dataResult['remainUnit']; ?> </td>
<td> <input type="int" name="addunit[]" value=""> </td>


</tr>




<?php  }   ?>

<tr>
<td><button type="submit">gogo</button></td>
</tr>

</table>




<input type="hidden" name="hdnLine" value="<?php echo $i;?>">
</form>











</body>
</html>