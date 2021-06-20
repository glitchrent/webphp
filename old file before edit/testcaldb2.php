<?php require("connect.php");   ?> 

<?php

print_r($_POST);

foreach($_POST['update_score'] as $item=>$value){
    $sql ="UPDATE product SET remainUnit=$value WHERE productID=$item";
    $result = mysqli_query($check, $sql) or die ("Error : $sql " . mysqli_error());
}

echo $sql;


?>



<?php   /*
//คำสั่งกลับหน้าแรกเมื่อทำงานเสร็จ 
if($check){
    echo  "save <script>window.location='testcal.php'</script>";
    }else{
        echo "Fail";
    }


    break;
*/
?>