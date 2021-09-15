<?php require("ses_start.php");   ?> 
<?php
    require("conn.php");

    $productID = $_POST['productID'];
    $productName = $_POST['productName'];
    $productCategory = $_POST['productCategory'];
    $price = $_POST['price'];
    $remainUnit = $_POST['remainUnit'];
    $udb_ID = $_SESSION['username'];


    $duplicatecheck = " SELECT productID FROM usercart WHERE productID = '$productID' ";

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
            mysqli_query($check, "INSERT INTO usercart (productID,productName,productCategory,price,remainUnit,usb_ID) VALUES ('$productID','$productName','$productCategory','$price','$remainUnit','$udb_ID')");
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