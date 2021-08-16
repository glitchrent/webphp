<?php
    require("connect.php");

    $id=$_GET['iddel']; 
    
    mysqli_query($check,$sql = "DELETE FROM user WHERE username='$id'")

?>

<?php

//คำสั่งกลับหน้าแรกเมื่อทำงานเสร็จ
if($check){
    echo  "save <script>window.location='user_info.php'</script>";
    }else{
        echo "Fail";
    }

?>

