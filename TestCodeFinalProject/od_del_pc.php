<?php
    require("conn.php");

    $id=$_GET['iddel']; 
    
    mysqli_query($check,$sql = "DELETE FROM usercart WHERE productID='$id'")

?>

<?php

//คำสั่งกลับหน้าแรกเมื่อทำงานเสร็จ
if($check){
    echo  "save <script>window.location='od_list.php'</script>";
    }else{
        echo "Fail";
    }

?>

