<?php
    require("conn.php");

    $id=$_GET['iddel']; 
    
    mysqli_query($check,$sql = "DELETE FROM customer WHERE cusID='$id'")

?>

<?php

//คำสั่งกลับหน้าแรกเมื่อทำงานเสร็จ
if($check){
    echo  "save <script>window.location='cus_index.php'</script>";
    }else{
        echo "Fail";
    }

?>

