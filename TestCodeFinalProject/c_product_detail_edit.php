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

<?php require("c_cusheader.php");   ?> 

<br>


<div class="container-fluid ">    

  <div class="row content justify-content-center " >


  <!-- ตางรางซ้าย -->
  
    <div class="col-sm-1 sidenav shadow p3" style="text">


    
    <p style="background-color: #E9765B;" class="text-white text-center ">
    หมวดหมู่สินค้า

  </p>
        
<?php  
$data = "SELECT *  FROM pdcategory";
$dataQuery = mysqli_query($check, $data);
?>
        


<?php
while($dataResult = mysqli_fetch_array($dataQuery))
{ 
?>

<p class="fs-6"><a class="text-black" href="c_product_catelist.php?namecate=<?php echo $dataResult["categoryName"];  ?>">○ <?php echo $dataResult["categoryName"];  ?></a></p>

            <?php } ?>

           
</div>
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
<img src="Picture/<?php echo $objResult["productPic"];?>" width="100%">
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
<form action="testdecrip_pc.php" method="post" >

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

<input type="submit" value="save">

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
