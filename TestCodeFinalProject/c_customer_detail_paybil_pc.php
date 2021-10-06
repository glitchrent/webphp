<?php
    require("conn.php");

    $poID = $_POST['txtpoid'];
    $slipname = $_FILES["txtslip"]["name"];


    move_uploaded_file($_FILES["txtslip"]["tmp_name"],"Slip/".$_FILES["txtslip"]["name"]);
    mysqli_query($check, $data ="UPDATE cuspo SET slip = '$slipname', postatus = 'รอการตรวจสอบ' WHERE poID='$poID'");
    


?>

<?php
// คำสั่งกลับหน้าแรกเมื่อทำงานเสร็จ
if($check){
    echo  "save <script>window.location='c_customer_detail_po.php'</script>";
    }else{
        echo "Fail";
    }

?>