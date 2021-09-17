<?php
    require("conn.php");

    $comment = $_POST['detail'];
    mysqli_query($check, "INSERT INTO testdexctrip (despo) VALUES ('$comment')");

?>



<?php
//คำสั่งกลับหน้าแรกเมื่อทำงานเสร็จ
if($check){
    echo  "save <script>window.location='testdecrip.php'</script>";
    }else{
        echo "Fail";
    }

?>

