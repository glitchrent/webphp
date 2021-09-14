<?php
    require("conn.php");

    $id=$_POST['reportID']; 

    if($_GET["Action"] == "Save")
{
        if($_POST["imstatus"] == "นำเข้า")
        {
            $calsql = "UPDATE product SET ";
            $calsql .="remainUnit = remainUnit-'".$_POST["exportunit"]."' ";
            $calsql .="WHERE productID = '".$_POST["productID"]."' ";
            $dataQuery = mysqli_query($check, $calsql);
    
            $dataQuery2 = mysqli_query($check,$sql = "DELETE FROM report WHERE reportID='$id'");

    }else {
        $dataQuery2 = mysqli_query($check,$sql = "DELETE FROM report WHERE reportID='$id'");
    }


    
} 

?>

<?php

//คำสั่งกลับหน้าแรกเมื่อทำงานเสร็จ
if($check){
    echo  "save <script>window.location='report_history_c.php'</script>";
    }else{
        echo "Fail";
    }

?>

