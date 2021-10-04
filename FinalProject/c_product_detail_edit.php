<?php require("conn.php");   ?> 
<?php require("bootstrapscrip.php");   ?> 
<?php session_start(); ?> 
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="cuspo.css">
  <?php date_default_timezone_set('Asia/Bangkok');?>


  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    

    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 16px;
      background-color: #FFFFFF;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 10px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }

    A{text-decoration:none}
  </style>

<body >

<?php include 'header.php'; ?>

<center>
  <br>
<a href = "c_product_list_edit.php">
<button type="button" class="btn btn-danger">ย้อนกลับ</button></a>
  </center>



<br>


<div class="container-fluid ">    

  <div class="row content justify-content-center " >


  <!-- ตางรางซ้าย -->
 
<!-- ตางรางซ้าย -->



<!-- ตารางกลาง -->

    <div class="col-sm-7 text-center shadow p3  " style="background-color: #FFFFFF;"> 

      <?php
      $id = $_GET['id'];
$strSQL = "SELECT * FROM product WHERE productID = $id";
$objQuery = mysqli_query($check, $strSQL) or die(mysql_error());
$objResult = mysqli_fetch_array($objQuery)
?>


<p>

<div style="width:88%; margin:0px auto; background-color: #E9765B;" class="fs-1 text-white"> 

<p><?php echo $objResult["productName"];?></p>

</div> 



<div style="width:88%; margin:0px auto;"> 

<table border="1" class="table">
  <tr>
<td rowspan="20" width="600px">
<img src="../FinalProject/Picture/<?php echo $objResult["productPic"];?>" width="100%">
</td>
</tr>

<tr>
<td>
  
</td>
</tr>
<tr>
<td width="150px">
  <h4 >รหัสสินค้า </h4>
</td>
<td>
<h4><?php echo $objResult["productID"];?></h4>
</td>
</tr>
<tr>
<td>
<h4>ประเภทสินค้า </h4>
</td>
<td>
<h4><?php echo $objResult["productCategory"];?></h4>
</td>
</tr>
<tr>
<td>
<h4>ราคา </h4>
</td>
<td>
<h4><?php echo $objResult["price"];?> บาท</h4>
</td>
</tr>
<tr>
<td>
<h4>จำนวนคงเหลือ </h4>
</td>
<td>
<h4><?php echo $objResult["remainUnit"];?> <?php echo $objResult["unit"];?></h4>
</td>
</tr>

</table>

<table  border="1" class="table">
<tr>
  <td>
  <h3>รายละเอียดสินค้า</h3>
</td>
</tr>
<tr>
  <td>
    
 
<script src="//cdn.ckeditor.com/4.16.2/full/ckeditor.js"></script>
<form action="c_product_detail_edit_pc.php" method="post" >
<input type="submit" value="บันทึก"> <a href="../TestCodeFinalProject/c_product_detail.php?id=<?php echo $objResult["productID"];?>" target="_blank">ดูตัวอย่าง</a><br><br>
<input type="hidden" name="productID" value="<?php echo $objResult["productID"];?>">
<textarea name="detail" id="editor1" rows="120px"> <?php echo $objResult["productDetail"];?></textarea>
<script>
// Replace the <textarea id="editor1"> with a CKEditor
// instance, using default configuration.
CKEDITOR.replace('detail',{
        height: 1000
    });
function CKupdate() {
for (instance in CKEDITOR.instances)
CKEDITOR.instances[instance].updateElement();
}
</script>



</form>



    <td>
</tr>
</table>

    </div>
<!-- ตารางกลาง -->



  </div>



</div>


<!-- <footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer> -->

</body>
</html>
