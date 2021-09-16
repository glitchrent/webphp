<?php
//session_start();
//session_destroy();
?>
<?php session_start(); ?> 
<?php require("conn.php");   ?> 
<?php require("bootstrapscrip.php");   ?> 

<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>


<?php require("cusheader.php");   ?> 


<?php
$namecate = $_GET['namecate'];

$strSQL = "SELECT * FROM product WHERE productCategory ='$namecate'";
$objQuery = mysqli_query($check, $strSQL) or die(mysql_error());
?>

<div style="width:80%; margin:0px auto;"> 
<br><?php echo $namecate = $_GET['namecate']; ?>
<br><a href="show.php">ตะกร้า</a><br><br>
</div> 

<center>
<div style="width:80%; margin:0px auto;"> 
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3">
  <?php

  
  while($objResult = mysqli_fetch_array($objQuery))
  
  {


  ?>


<form action="order.php" method="post">
<div class="card border-Dark mb-3" style="max-width: 18rem;">
  <div class="card-header bg-transparent border-Dark"><img src="Picture/<?php echo $objResult["productPic"];?>" width="100%"></div>
  <div class="card-body text">
    <h5 class="card-title"><?php echo $objResult["productName"];?></h5>
    <p class="card-text"><?php echo $objResult["price"];?> บาท</p>
  </div>
  <div class="card-footer bg-transparent border-Dark">
  
  <?php if($objResult["remainUnit"]!=0){
?>
  
  <input type="hidden" name="txtproductID" value="<?php echo $objResult["productID"];?>" size="2"> 
  <input type="text" name="txtQty" value="1" size="2"> 
  <input type="submit" class="btn btn-outline-success" value="เพิ่ม">

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


</center>




<?php
mysqli_close($check);
?>
</body>
</html>

