<?php
require("connect.php");

$productID = $_POST['productID'];
$productName = $_POST['productName'];
$productCategory = $_POST['productCategory'];
$remainUnit = $_POST['remainUnit'];
$costprice = $_POST['costprice'];
$saleprice = $_POST['saleprice'];
    

$sql ="UPDATE product SET productName ='$productName',productCategory = '$productCategory',remainUnit = '$remainUnit',costprice='$costprice',saleprice='$saleprice' WHERE productID=$productID";



$result=mysqli_query($check,$sql);

if($result){
    echo  "It's True <script>window.location='index.php'</script>";
    }else{
        echo "Fail";
    }


?>