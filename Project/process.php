<?php require("connect.php");   ?> 


<?php

    $productName = $_POST['productName'];
    $productCategory = $_POST['productCategory'];
    $remainUnit = $_POST['remainUnit'];
    $costprice = $_POST['costprice'];
    $saleprice = $_POST['saleprice'];
    
    mysqli_query($check, "INSERT INTO product (productName,productCategory,remainUnit,costprice,saleprice) VALUES ('$productName','$productCategory','$remainUnit','$costprice','$saleprice')");


?>

<?php
if($check){
    echo  "save <script>window.location='index.php'</script>";
    }else{
        echo "Fail";
    }
?>

