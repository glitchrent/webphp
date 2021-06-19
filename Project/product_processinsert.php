<?php
    require("connect.php");

    //$productID = $_POST['productID'];
    $productName = $_POST['productName'];
    $productCategory = $_POST['productCategory'];
    $remainUnit = $_POST['remainUnit'];
    $costprice = $_POST['costprice'];
    $saleprice = $_POST['saleprice'];
    
    mysqli_query($check, "INSERT INTO product (productName,productCategory,remainUnit,costprice,saleprice) VALUES ('$productName','$productCategory','$remainUnit','$costprice','$saleprice')");


?>

<?php
//คำสั่งกลับหน้าแรกเมื่อทำงานเสร็จ
if($check){
    echo  "save <script>window.location='product_info.php'</script>";
    }else{
        echo "Fail";
    }

?>

