<?php require("conn.php");  ?>
<?php


    $poid=$_GET["id"];
    $substatus="กำลังเตรียมการจัดส่ง";
    $calsql3 = "UPDATE cuspo SET postatus = '$substatus' WHERE poID='$poid'";
    $dataQuery3 = mysqli_query($check, $calsql3);







if($check){
    echo  "save <script>window.location='poconf_list.php'</script>";
    }else{
        echo "Fail";
    }






?>