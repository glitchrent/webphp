<?php require("hide_error.php");   ?> 
<?php require("conn.php");   ?> 
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="cuspo1.css">
  <?php date_default_timezone_set('Asia/Bangkok');?>
<style>
    A{text-decoration:none}
  </style>
<?php require("banner.php");   ?> 
<center>
<div style="width:67%">
<header  class="p-1 shadow p3" style="background-color: #FF7E00;">

<div style="width:98%">
<nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #FF7E00;">



  <div class="container-fluid">
    <a class="navbar-brand" href="#">ร้านขายอุปกรณ์ ฮาร์ดแวร์ก่อสร้าง</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="c_product.php">สินค้าทั้งหมด</a>
        </li>

        

        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="c_contactus.php">ติดต่อเรา</a>
        </li>

        <li class="nav-item">
          
        </li>
      </ul>
    </div>
    
      
<?php 

if($_SESSION['username'] != NULL)
{

?>
    <span class="navbar-text">
    <a href="show.php"><button type="button" class="btn btn-primary">( ตะกร้า สินค้า )</button> &nbsp; </a> 
    </span>

<?php 
    }
?>

    <span class="navbar-text">
    
    
<?php 

if($_SESSION['username'] != NULL)
{

?>
      <div class="dropdown">
  <a class="btn btn-info dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
    <?php echo $_SESSION['username']; ?>
  </a>

  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <li><a class="dropdown-item text-black" href="c_customer_detail.php?id=<?php echo $_SESSION["cusID"];?>">ข้อมูลลูกค้า</a></li>
    <li><a class="dropdown-item text-black" href="c_customer_detail_po.php?id=<?php echo $_SESSION["cusID"];?>">รายละเอียดการสั่งซื้อ</a></li>
    <li><a class="dropdown-item text-black" href="logout.php">ออกจากระบบ</a></li>
  </ul>
</div>

<?php 
    }

else{
?>

<a href="cuslogin.php"><button type="button" class="btn btn-light btn-lg">เข้าสู่ระบบ / สมัครสมาชิก</button></a>

        
<?php
}
?>
    

      </span>

  </div>
  
</nav>
  </header>
  </div>
  </center>
  