<?php
    require("conn.php");

    //$productID = $_POST['productID'];
    $productName = $_POST['productName'];
    $productCategory = $_POST['productCategory'];
    $remainUnit = $_POST['remainUnit'];
    $unit = $_POST['unit'];
    $price = $_POST['price'];
    $productPic = $_FILES["productPic"]["name"];
    move_uploaded_file($_FILES["productPic"]["tmp_name"],"Picture/".$_FILES["productPic"]["name"]);
    mysqli_query($check, "INSERT INTO product (productName,productPic,productCategory,remainUnit,unit,price) VALUES ('$productName','$productPic','$productCategory','$remainUnit','$unit','$price')");

?>



<?php
//คำสั่งกลับหน้าแรกเมื่อทำงานเสร็จ
if($check){
    echo  "save <script>window.location='pd_index.php'</script>";
    }else{
        echo "Fail";
    }

?>

