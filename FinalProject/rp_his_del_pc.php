<?php
    require("conn.php");

    $id=$_GET['iddel']; 
    
    mysqli_query($check,$sql = "DELETE FROM report WHERE reportID='$id'")

?>

<?php

//คำสั่งกลับหน้าแรกเมื่อทำงานเสร็จ
if($check){
    echo  "save <script>window.location='report_history.php'</script>";
    }else{
        echo "Fail";
    }

?>

