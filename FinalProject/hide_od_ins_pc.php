<?php
    require("conn.php");

    $productID = $_POST['productID'];
    $productName = $_POST['productName'];
    $productCategory = $_POST['productCategory'];
    $price = $_POST['price'];
    $remainUnit = $_POST['remainUnit'];
    
    $duplicatecheck = " SELECT productID FROM cart WHERE productID = '$productID' ";

    $result1 = mysqli_query($check, $duplicatecheck) or die(mysqli_error());
    $num=mysqli_num_rows($result1);
 
    if($num > 0){
        echo "<script>";
        echo "alert(' สินค้าอยู่ในออร์เดอร์แล้ว !');";
        echo "window.history.back();";
        echo "</script>";
    }else{
        
        if ($remainUnit == 0){
            echo "<script>";
            echo "alert(' สินค้าหมดแล้ว กรุณาเพิ่มสต๊อกสินค้า !');";
            echo "window.history.back();";
            echo "</script>";

        }else{
            mysqli_query($check, "INSERT INTO cart (productID,productName,productCategory,price,remainUnit) VALUES ('$productID','$productName','$productCategory','$price','$remainUnit')");
        } 

    }
   


?>

<?php 
//คำสั่งกลับหน้าแรกเมื่อทำงานเสร็จ
if($check){
    echo  "save <script>window.location='subtract_stock.php'</script>";
    }else{
        echo "Fail";
    }

?>