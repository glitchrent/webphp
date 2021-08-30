<?php
    require("conn.php");

    $productID = $_POST['productID'];
    $productName = $_POST['productName'];
    $productCategory = $_POST['productCategory'];
    $remainUnit = $_POST['remainUnit'];
    $unit = $_POST['unit'];
    $price = $_POST['price'];
    
    mysqli_query($check, $data ="UPDATE product SET productName ='$productName',productCategory = '$productCategory',remainUnit = '$remainUnit',unit='$unit',price='$price' WHERE productID=$productID");
    
?>

<?php 
//คำสั่งกลับหน้าแรกเมื่อทำงานเสร็จ
if($check){
    echo  "save <script>window.location='pd_index.php'</script>";
    }else{
        echo "Fail";
    }

?>