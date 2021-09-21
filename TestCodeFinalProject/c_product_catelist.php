<?php require("conn.php");   ?> 
<?php require("bootstrapscrip.php");   ?> 
<?php session_start(); ?> 
<html lang="en">
<head>
  <title>Bootstrap Example</title>
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
<center>
<br>

<div style="width:1275px;height: 200px; background-color: #E9765B;"  class="p-1 shadow p3 ">
<br>
<br>
<p class="fs-1">
ร้านขายอุปกรณ์ ฮาร์ดแวร์ก่อสร้าง</p>
</div>
<br>

</center>

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

if($_SESSION['username'] != NULL)
{

?>

<div style="width:80%; margin:0px auto;"> 
<br><a href="show.php">( ตะกร้า )</a><br><br>
</div> 


<?php 
    }

else{
?>

<?php
}
?>

    <?php
$namecate = $_GET['namecate'];

$strSQL = "SELECT * FROM product WHERE productCategory ='$namecate'";
$objQuery = mysqli_query($check, $strSQL) or die(mysql_error());
?>


<p>

<div style="width:88%; margin:0px auto; background-color: #E9765B;" class="fs-1 text-white"> 

<p><?php echo $namecate; ?></p>

</div> 



<div style="width:88%; margin:0px auto;"> 

<div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 g-4">

  <?php

  
  while($objResult = mysqli_fetch_array($objQuery))
  
  {


  ?>


<form action="order.php" method="post">
<div class="card border-Dark mb-1" style="max-width: 18rem;">
  <div class="card-header bg-transparent border-light"><img src="Picture/<?php echo $objResult["productPic"];?>" width="100%"></div>
  <div class="card-body text" >
    <h5 class="card-title" ><?php echo $objResult["productName"];?></h5>
    <p class="card-text"><?php echo $objResult["price"];?> บาท</p>
  </div>
  <div class="card-footer border-Dark" style="background-color: #FFAC8E;">
  
  <?php if($objResult["remainUnit"]!=0){
?>
  
  <input type="hidden" name="txtproductID" value="<?php echo $objResult["productID"];?>" size="2"> 
  <input type="hidden" name="txtQty" value="1" size="2"> 
  <input type="submit" class="btn btn-danger" value="รายละเอียด">
  <input type="submit" class="btn btn-success" value="เพิ่ม">

  <?php
} else {echo "สินค้าหมด";}
  ?>
</div>
</div>
</form>
  <?php
  }
  ?>

</div>

</div>



    </div>
<!-- ตารางกลาง -->



  </div>



</div>


<!-- <footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer> -->

</body>
</html>
