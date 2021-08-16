<?php
    require("conn.php");

    //$productID = $_POST['productID'];
    $productName = $_POST['productName'];
    $productCategory = $_POST['productCategory'];
    $remainUnit = $_POST['remainUnit'];
    $unit = $_POST['unit'];
    $price = $_POST['price'];
    
    mysqli_query($check, "INSERT INTO product (productName,productCategory,remainUnit,unit,price) VALUES ('$productName','$productCategory','$remainUnit','$unit','$price')");


?>

<?php
//คำสั่งกลับหน้าแรกเมื่อทำงานเสร็จ
if($check){
    echo  "save <script>window.location='product.php'</script>";
    }else{
        echo "Fail";
    }

?>

