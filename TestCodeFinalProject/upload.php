<?php
require("conn.php");
if(move_uploaded_file($_FILES["file"]["tmp_name"],"upload/".$_FILES["file"]["name"])){

  
$strSQL ="INSERT INTO testuppic";
$strSQL .="(picname) VALUES ('".$_FILES["file"]["name"]."')";
$objQuery = mysqli_query($check, $strSQL);		

}
  


// $dir = "uploads/";
// $fileImage = $dir . basename($_FILES["file"]["name"]);

// if (move_uploaded_file($_FILES["file"]["tmp_name"], $fileImage)){
//     echo "Yes";
// }else {
//     echo "No";
// }
?>