<?php require("conn.php");   ?> 
<?php require("bootstrapscrip.php");   ?> 
<?php session_start(); ?> 
<html lang="en">
<head>
<title>ร้านขายอุปกรณ์ฮาร์ดแวร์ ก่อสร้าง</title>
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
      height: auto;
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
  
    <div class="col-sm-1 sidenav shadow p3" style="text ">


    
    <p style="background-color: #FF7E00;" class="text-white text-center ">
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

<div class="col-sm-7 text-center shadow p3 " style="background-color: #FFFFFF;"> 

<p>

<div style="width:88%; margin:0px auto; background-color: #FF7E00;" class="fs-1 text-white"> 

<p>ติดต่อเรา</p>

</div> 

<div style="width:88%; margin:0px auto;"> 
<h4 align="left"> <br> โทรศัพท์ 02-117-3375 <br>

ที่อยู่ 3 ซ.อนามัยงามเจริญ 33 แยก 2
แขวงท่าข้าม เขตบางขุนเทียน กรุงเทพมหานคร 10600 <br> <br></h> 

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31019.23198692297!2d100.44200502611159!3d13.633171544097488!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e2a3996785d14d%3A0x170ac34dfe03309d!2z4Lih4Lix4LmI4LiZ4LiE4LiH4LiI4LiH4LmA4LiI4Lij4Li04LiN!5e0!3m2!1sth!2sth!4v1633273403168!5m2!1sth!2sth" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

<br>
<br>

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
