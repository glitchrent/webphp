<?php
    require("connect.php");

    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $tel = $_POST['tel'];
    $address = $_POST['address'];
    $role = $_POST['role'];

    
    mysqli_query($check, $data ="UPDATE user SET username ='$username',password = '$password',name = '$name',surname='$surname',tel='$tel',address='$address',role='$role' WHERE username='$username'");


?>

<?php
//คำสั่งกลับหน้าแรกเมื่อทำงานเสร็จ
if($check){
    echo  "save <script>window.location='user_info.php'</script>";
    }else{
        echo "Fail";
    }

?>