<?php
    require("conn.php");

    $productID = $_POST['productID'];
    $productName = $_POST['productName'];
    $price = $_POST['price'];
    
    mysqli_query($check, "INSERT INTO cart (productID,productName,price) VALUES ('$productID','$productName','$price')");


?>

<?php 
//คำสั่งกลับหน้าแรกเมื่อทำงานเสร็จ
if($check){
    echo  "save <script>window.location='testcart.php'</script>";
    }else{
        echo "Fail";
    }

?>