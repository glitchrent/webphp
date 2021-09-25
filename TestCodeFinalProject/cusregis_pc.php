<?php
    require('conn.php');

    if(trim($_POST["txtusername"]) == "")
    {
        echo "<script>";
        echo "alert(' โปรดใส่ชื่อ ');";
        echo "</script>";
        echo  "<script>window.location='cusregis.php'</script>";
        
        exit();
    }

    if(trim($_POST["txtpassword"]) == "")
    {
        echo "<script>";
        echo "alert(' โปรดใส่รหัสผ่าน ');";
        echo "</script>";
        echo  "<script>window.location='cusregis.php'</script>";

        exit();
    }

    if($_POST["txtpassword"] != $_POST["txtconpassword"])
    {
        echo "<script>";
        echo "alert(' รหัสผ่านไม่ตรงกัน ');";
        echo "</script>";
        echo  "<script>window.location='cusregis.php'</script>";
        
        exit();
    }

    if(trim($_POST["txtfirstname"]) == "")
    {
        echo "<script>";
        echo "alert(' กรุณากรอกชื่อ ');";
        echo "</script>";
        echo  "<script>window.location='cusregis.php'</script>";

        exit();
    }

    $strSQL = "SELECT * FROM customer WHERE username = '".trim($_POST['txtusername'])."' ";
    $objQuery = mysqli_query($check,$strSQL);
    $objResult = mysqli_fetch_array($objQuery);
    if($objResult)
    {
            echo "<script>";
            echo "alert(' มีชื่อผู้ใช้ซ้ำในระบบแล้ว กรุณากรอกใหม่อีกครั้ง');";
            echo "</script>";
            echo  "<script>window.location='cusregis.php'</script>";
    }
    else
    {

        $strSQL = "INSERT INTO customer (username,password,name,surname,tel,address) VALUES ('".$_POST["txtusername"]."', 
        '".$_POST["txtpassword"]."','".$_POST["txtfirstname"]."','".$_POST["txtlastname"]."','".$_POST["txttel"]."','".$_POST["txtaddress"]."')";
        $objQuery = mysqli_query($check,$strSQL);

        echo "<script>";
        echo "alert(' สมัครสมาชิกเสร็จสิ้น');";
        echo "</script>";

        echo  "<script>window.location='cuslogin.php'</script>";

    }

?>