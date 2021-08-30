<?php
    require("conn.php");

    //$cateID = $_POST['cateID'];
    $categoryName = $_POST['categoryName'];
    
    mysqli_query($check, "INSERT INTO pdcategory (categoryName) VALUES ('$categoryName')");

?>

<?php
//คำสั่งกลับหน้าแรกเมื่อทำงานเสร็จ
if($check){
    echo  "save <script>window.location='cate_index.php'</script>";
    }else{
        echo "Fail";
    }

?>

