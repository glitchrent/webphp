<?php 
session_start();

$_SESSION['username']=$_POST['username'];

 if($_SESSION['username'] == 1){
     echo "<script>window.location='pd_user.php'</script>";
 }else {
     echo "<script>window.location='pd_user.php'</script>";
 }


?>