<?php require("hide_error.php");   ?> 
<?php require("conn.php");   ?> 
<div style="width:100%; margin:0px auto;"> 

<header class="p-2" style="background-color: #FFA43D;">
<nav class="navbar navbar-expand-lg navbar-light" style="width:80%; margin:0px auto; background-color: #FFA43D;">
  <div class="container-fluid ">
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
        
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">ร้านขายอุปกรณ์ ฮาร์ดแวร์ก่อสร้าง</a>
        </li>

 

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle"  href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            สินค้า
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="product.php">ดูสินค้าทั้งหมด</a></li>

          </ul>
        </li>

        
<?php  
$data = "SELECT *  FROM pdcategory";
$dataQuery = mysqli_query($check, $data);
?>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle"  href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            ประเภทสินค้า
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

<?php
while($dataResult = mysqli_fetch_array($dataQuery))
{ 
?>


            <li><a class="dropdown-item" href="product_catelist.php?namecate=<?php echo $dataResult["categoryName"];  ?>"><?php echo $dataResult["categoryName"];  ?></a></li>



<?php } ?>

          </ul>
        </li>




      </ul>



<?php 

if($_SESSION['username'] != NULL)
{

?>
      <ul class="navbar-nav ">
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle"  href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?php echo $_SESSION['username']; ?>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="customer_detail.php?id=<?php echo $_SESSION["cusID"];?>">ข้อมูลลูกค้า</a></li>
          <li><a class="dropdown-item" href="customer_detail_po.php?id=<?php echo $_SESSION["cusID"];?>">รายละเอียดการสั่งซื้อ</a></li>
          <li><a class="dropdown-item" href="logout.php">ออกจากระบบ</a></li>
          </ul>
        </li>
      </ul>
     

<?php 
    }

else{
?>
  
  <ul class="navbar-nav ">
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle"  href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            เข้าสู่ระบบ / สมัครสมาชิก
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="cuslogin.php">เข้าสู่ระบบ</a></li>
          <li><a class="dropdown-item" href="cusregis.php">สมัครสมาชิก</a></li>
          </ul>
        </li>
      </ul>
     

<?php
}
?>
    

     
      
    </div>
  </div>
</nav>

</header>



</div>  
