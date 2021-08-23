<?php require("conn.php");  ?> 

<head>
<script src="jquery-3.5.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<!-- สคลิปเพิ่มช่องกรอกสินค้า  -->
<script type="text/javascript">


    $(document).ready(function(){

        var html = '<tr><td><input class="form-control" type="text" name="productID[]" ></td><td><input type="text" list="datalistOptions" name="productName[]" id="productName" onkeyup="GetDetail(this.value)" value=""><datalist id="datalistOptions"> </datalist></td><td><input class="form-control" type="text" name="remainUnit[]" id="remainUnit" ></td></td><td><input class="form-control" type="date" name="date[]" ></td><td><input class="form-control" type="text" name="price" id="price" ></td><td><input class="form-control" type="text" name="" ></td><td><input type="button" name="remove" id="remove" value="remove"></td></tr>';

        var x = 1;

        $("#add").click(function(){
            $("#table_field").append(html);
        });
        $("#table_field").on('click','#remove',function(){
            $(this).closest('tr').remove();
        });
    });
</script>

<!-- สคลิปเพิ่มช่องกรอกสินค้า  -->

</head>

<body>

<!-- ฟอร์มกรอก  -->

<form class="insert-form" id="insert_form" method="post" action="">
    <table id="table_field">
        <tr>
            <td>รหัสสินค้า</td>
            <td>ชื่อสินค้า</td>
            <td>จำนวน</td>
            <td>วันที่</td>
            <td>ราคา</td>
            <td>ราคารวมต่อชิ้น</td>
        <tr>
<!-- คำสั่ง insert กับ update ข้อมูล  -->
    <?php

    if (isset($_POST['save'])) {
        $productName = $_POST['productName'];
        $exportunit = $_POST['exportunit'];
        $productID = $_POST['productID'];
        $date = $_POST['date'];

        foreach ($productName as $key => $value){
            $save = "INSERT INTO report(productName,productID,exportunit,date)VALUES('".$value."','".$productID[$key]."','".$exportunit[$key]."','".$date[$key]."')";
            $query = mysqli_query($check,$save) or die(mysqli_error($check));
            $save2 = "UPDATE product SET remainUnit = remainUnit-'".$exportunit[$key]."' WHERE productName ='".$value."' ";
            $query2 = mysqli_query($check,$save2) or die(mysqli_error($check));
        }
    }
    ?>
<!-- คำสั่ง insert กับ update ข้อมูล  -->

        <tr>    


<!-- ลิสรายการสินค้า  -->
<?php
$data = "SELECT *  FROM product";
$dataQuery = mysqli_query($check, $data);
?>
<td><input class="form-control" type="text" name="productID[]" ></td>
<td><input type='text' list="datalistOptions" name="productName[]" id='productName' onkeyup="GetDetail(this.value)" value=""></td>
<datalist id="datalistOptions">
<?php
while ($dataResult = mysqli_fetch_assoc($dataQuery)) {
?>
  <option value="<?php echo $dataResult["productName"]; ?>">

<?php
  }   
?>
</datalist>
<!-- ลิสรายการสินค้า  -->


<td><input class="form-control" type="text" name="remainUnit[]" id="remainUnit" ></td>
<td><input class="form-control" type="date" name="date[]" ></td>
<td><input class="form-control" type="text" name="price" id="price" ></td>
<td><input class="form-control" type="text" name="" ></td>
<td><input type="button" name="addd" id="add" value="Add"></td>
</tr>
</tabel>
<table>
<tr>
    <td>ราคารวม <input class="form-control" type="text" name="" ></td>
</tr>
</table>
<input type="submit" name="save" id="save" value="Save Data">
</form>

<!-- ฟอร์มกรอก  -->

<!-- table data  -->
<?php

$data = "SELECT *  FROM product";
$dataQuery = mysqli_query($check, $data);

?>

<table border="1">

<tr>
<td  align="center" >รหัสสินค้า</td> 
<td  align="center" >ชื่อสินค้า</td>
<td  align="center" >ประเภทสินค้า</td>
<td  align="center" >จำนวน</td>
<td  align="center" >หน่วย</td>
<td  align="center" >ราคา</td>
</tr>

<?php
while ($dataResult = mysqli_fetch_assoc($dataQuery)) {
?>

<tr>
<td align="center"><?php echo $dataResult["productID"]; ?></td>
<td align="center"><?php echo $dataResult["productName"]; ?></td>
<td align="center"><?php echo $dataResult["productCategory"]; ?></td>
<td align="center"><?php echo $dataResult["remainUnit"]; ?></td>
<td align="center"><?php echo $dataResult["unit"]; ?></td>
<td align="center"><?php echo $dataResult["price"]; ?></td>

</tr>

<?php
  }   
?>

</table>

<!-- table data  -->
<br>
<!-- table data  -->
<?php

$data = "SELECT *  FROM report";
$dataQuery = mysqli_query($check, $data);

?>
<table border="1">

<tr>
<td>reportID</td> 
<td>productID</td>
<td>productName</td>
<td>date</td>
<td>exportunit</td>
</tr>

<?php
while ($dataResult = mysqli_fetch_assoc($dataQuery)) {
?>

<tr>
<td><?php echo $dataResult["reportID"]; ?></td>
<td><?php echo $dataResult["productID"]; ?></td>
<td><?php echo $dataResult["productName"]; ?></td>
<td><?php echo $dataResult["date"]; ?></td>
<td><?php echo $dataResult["exportunit"]; ?></td>

</tr>

<?php
  }   
?>

</table>

<!-- table data  -->





</body>

<!-- script auto fill -->
<script>
  
  function GetDetail(str) {
      if (str.length == 0) {
          document.getElementById("price").value = "";
          document.getElementById("remainUnit").value = "";
          return;
      }
      else {

          var xmlhttp = new XMLHttpRequest();
          xmlhttp.onreadystatechange = function () {

              if (this.readyState == 4 && 
                      this.status == 200) {
                    
                  var myObj = JSON.parse(this.responseText);
                    
                  document.getElementById("price").value = myObj[0];
                    
                  document.getElementById("remainUnit").value = myObj[1];
              }
          };

          xmlhttp.open("GET", "autofillpc.php?productName=" + str, true);
            
          xmlhttp.send();
      }
  }
</script>

<!-- script auto fill -->
</html>