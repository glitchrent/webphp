<?php
    require("conn.php");

    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $tel = $_POST['tel'];
    $address = $_POST['address'];
    $role = $_POST['role'];

    
    mysqli_query($check, "INSERT INTO user (username,password,name,surname,tel,address,role) VALUES ('$username','$password','$name','$surname','$tel','$address','$role')");


?>

<?php
//คำสั่งกลับหน้าแรกเมื่อทำงานเสร็จ
if($check){
    echo  "save <script>window.location='mb_index.php'</script>";
    }else{
        echo "Fail";
    }

?>

