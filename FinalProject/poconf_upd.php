<?php
    require("conn.php");

    
    $id=$_GET['id']; 
    $substatus="ยืนยันแล้ว";

    mysqli_query($check,$sql = "UPDATE cuspo SET postatus = '$substatus' WHERE poID='$id'")

?>

<?php

//คำสั่งกลับหน้าแรกเมื่อทำงานเสร็จ
if($check){
    echo  "save <script>window.location='poconf_list.php'</script>";
    }else{
        echo "Fail";
    }

?>

