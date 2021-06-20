<?php

require("connect.php");  

if($_GET["Action"] == "Save")
{

    for($i=1;$i<=$_POST["hdnLine"];$i++){
        

    }
}









/*


$num[] = $_POST['id'];

for ($i = 0; $i < count($num); $i++) {
    $all_num[] = implode(',', $num[$i]);
  }

foreach ($all_num as $id) {
    $number = $id;
}




foreach ($_POST['addunit'] as $addunit) {
    echo $addunit;
    echo "$number<br>";
}






//mysqli_query($check, $sql = "UPDATE product set remainUnit = remainUnit+$addunit WHERE productID=$num");
//echo "$num<br>";


//$id=$_POST['id'];
//$addunit=$_POST['addunit'];





/*

for ($i = 0; $i < count($num); $i++) {
    $all_num[] = implode(',', $num[$i]);
  }

  foreach ($all_num as $aa) {
        $number = $aa;
  }
        echo $number;





$id=$_GET['id'];
$addunit=$_GET['addunit'];

//$sql = "UPDATE product set remainUnit = remainUnit+$addunit WHERE productID=$id";
$result = mysqli_query($check, $sql);




?>



<?php echo $addunit; ?> <br>
<?php echo $id; ?> <br>



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