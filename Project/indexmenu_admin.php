<?php require("connect.php");   ?> 

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="Project\mystyle.css">

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

    
    <body>









<body class="text-center">
    
<main class="form-signin">
  <form action="" method="post" >
    <img class="mb-4" src="warehouse.gif" alt="" width="100" height="85">
    <h1 class="h3 mb-3 fw-normal">เข้าสู่ระบบ</h1>

    <div class="form-floating">
    <a href="product_info.php">
    <button name="button" class="w-100 btn btn-lg btn-primary" type="button">คลังสินค้า</button>
    </a>
    <br><br>

    </div>
    <div class="form-floating">
    <a href="user_info.php">
    <button name="button" class="w-100 btn btn-lg btn-success" type="button">พนักงาน</button>
    </a>
    <br><br>

    </div>
    <a href="index_admin.php?logout='1'">
    <button name="button" class="w-100 btn btn-lg btn-danger" type="button">ออกจากระบบ</button>
    </a> 
    <p class="mt-5 mb-3 text-muted">welcome</p>
  </form>
</main>

      
    </body>
</html>