<?php require("conn.php");   ?> 
<?php require("bootstrapscrip.php");   ?> 
<?php 
    session_start();

    if (!isset($_SESSION['username'])) {
        header('location: login.php');

    }


    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }


?>


<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
  
        <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }
</style>


<!-- Custom styles for this template -->
<link href="signin.css" rel="stylesheet">


    <title>เมนู</title>


    </head>

    
    




<body class="text-center">
    
<main class="form-signin">
  <form action="" method="post" >

  <div class="faidpage">

    <img class="mb-4" src="werehicon.gif" alt="" width="190" height="170">
    <h1 class="h3 mb-3 fw-normal">เลือกเมนู</h1>

    <div class="form-floating">
    <a href="pd_index.php">
    <button name="button" class="w-100 btn btn-lg btn-primary" type="button">คลังสินค้า</button>
    </a>
    <br><br>

    </div>
    <div class="form-floating">
    <a href="cus_index.php">
    <button name="button" class="w-100 btn btn-lg btn-success" type="button">ข้อมูลลูกค้า</button>
    </a>
    <br><br>

    </div>
    <a href="pd_index.php?logout='1'">
    <button name="button" class="w-100 btn btn-lg btn-danger" type="button">ออกจากระบบ</button>
    </a> 
    <p class="mt-5 mb-3 text-muted">ยินดีต้อนรับ</p>

</div>

  </form>
</main>

      
    </body>
</html>