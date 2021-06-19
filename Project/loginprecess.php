<?php
    require("connect.php");


?>

<?php
session_start();
if(isset($_POST['username'])){
          $username = $_POST['username'];
          $password = ($_POST['password']);
          $sql="SELECT * FROM user Where username='".$username."' AND password='".$password."' ";


          $result = mysqli_query($check,$sql);


         if(mysqli_num_rows($result)==1){

              $row = mysqli_fetch_array($result);

              $_SESSION["username"] = $row["username"];
              $_SESSION["role"] = $row["role"];

              if($_SESSION["role"]=="1"){ 
                
                Header("Location: product_info.php");


              }

              if ($_SESSION["role"]=="2"){

                Header("Location: user_info.php");

              }

          }else{
            echo "<script>";
            echo "alert('username or password not correct');"; 
            echo "window.history.back()";
            echo "</script>";

          }

}else{


     Header("Location: login.php"); 

}


?>

<?php
//คำสั่งกลับหน้าแรกเมื่อทำงานเสร็จ
if($check){
    echo  "save <script>window.location='user_info.php'</script>";
    }else{
        echo "Fail";
    }

?>

