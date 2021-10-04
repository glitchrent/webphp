<?php
    require("conn.php");

    $productID = $_POST['productID'];
    $productDetail = $_POST['detail'];


    mysqli_query($check, $data ="UPDATE product SET productDetail='$productDetail' WHERE productID=$productID");
    echo "<script>";
    echo "alert(' บันทึกข้อมูลสำเร็จ');";
    echo "</script>";
    
?>

<?php 
//คำสั่งกลับหน้าแรกเมื่อทำงานเสร็จ
if($check){
    echo  "save <script>window.location='c_product_detail_edit.php?id=$productID'</script>";
    }else{
        echo "Fail";
    }

?>