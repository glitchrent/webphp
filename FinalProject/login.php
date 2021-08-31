<?php require("conn.php");   ?> 
<?php require("bootstrapscrip.php");   ?> 

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


    <title>เข้าสู่ระบบ</title>


    </head>

    
    <body>






<body class="text-center">
    
<main class="form-signin">
  <form action="login_pc.php" method="post" >
    <img class="mb-4" src="warehouse.gif" alt="" width="100" height="85">
    <h1 class="h3 mb-3 fw-normal">เข้าสู่ระบบ</h1>

    <div class="form-floating">
      <input name="username" type="text" class="form-control" id="floatingInput" placeholder="Username">
      <label for="floatingInput">User</label>
    </div>
    <div class="form-floating">
      <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <button name="login_user" class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">welcome</p>
  </form>
</main>

      
    </body>
</html>