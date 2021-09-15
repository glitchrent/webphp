<?php
    require("conn.php");
?>


<?php
session_start();
if(isset($_POST['username'])){
          $username = $_POST['username'];
          $password = ($_POST['password']);
          $sql="SELECT * FROM customer Where username='".$username."' AND password='".$password."' ";


          $result = mysqli_query($check,$sql);


         if(mysqli_num_rows($result)==1){

              $row = mysqli_fetch_array($result);

              $_SESSION["username"] = $row["username"];
              $_SESSION["cusID"] = $row["cusID"];

              if($_SESSION["username"]!= NULL){ 
                
                Header("Location: product.php");


              }


          }else{
            echo "<script>";
            echo "alert('ชื่อผู้ใช้ หรือ รหัสผ่านไม่ถูกต้อง กรุณากรอกใหม่');"; 
            echo "window.history.back()";
            echo "</script>";

          }

}else{


     Header("Location: login.php"); 

}


?>

