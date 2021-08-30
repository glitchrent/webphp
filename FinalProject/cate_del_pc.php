<?php
    require("conn.php");

    $id=$_GET['iddel']; 
    
    mysqli_query($check,$sql = "DELETE FROM pdcategory WHERE cateID='$id'")

?>

<?php

//คำสั่งกลับหน้าแรกเมื่อทำงานเสร็จ
if($check){
    echo  "save <script>window.location='cate_index.php'</script>";
    }else{
        echo "Fail";
    }

?>

