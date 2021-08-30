<?php
    require("conn.php");

    $productName = $_POST['productName'];

    
    mysqli_query($check, "INSERT INTO textmulti (productName) VALUES ('$productName')");
        


?>


<?php /*
//คำสั่งกลับหน้าแรกเมื่อทำงานเสร็จ
if($check){
    echo  "save <script>window.location='testinsmultitext.php'</script>";
    }else{
        echo "Fail";
    }
*/
?>