<?php
    require("connect.php");

    $id=$_GET["iddel"]; 
    
    mysqli_query($check,$sql = "DELETE FROM product WHERE productID=$id")

?>

<?php

//คำสั่งกลับหน้าแรกเมื่อทำงานเสร็จ
if($check){
    echo  "save <script>window.location='index.php'</script>";
    }else{
        echo "Fail";
    }

?>

