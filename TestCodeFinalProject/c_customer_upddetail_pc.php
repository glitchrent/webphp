<?php
    require("conn.php");

    $username = $_POST['txtusername'];
    $name = $_POST['txtname'];
    $surname = $_POST['txtsurname'];
    $tel = $_POST['txttel'];
    $address = $_POST['txtaddress'];


    
    mysqli_query($check, $data ="UPDATE customer SET name = '$name',surname='$surname',tel='$tel',address='$address' WHERE username='$username'");


?>

<?php
// คำสั่งกลับหน้าแรกเมื่อทำงานเสร็จ
if($check){
    echo  "save <script>window.location='c_customer_detail.php'</script>";
    }else{
        echo "Fail";
    }

?>