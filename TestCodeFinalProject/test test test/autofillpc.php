<?php
  
// Get the user id 
$productName = $_REQUEST['productName'];
  
// Database connection
$con = mysqli_connect("localhost", "root", "", "warehouse");
  
if ($productName !== "") {
      
    // Get corresponding first name and 
    // last name for that user id    
    $query = mysqli_query($con, "SELECT price, 
    remainUnit FROM product WHERE productName='$productName'"); 
    if (!$query) {
        printf("Error: %s\n", mysqli_error($conn));
        exit();
    }

  
    $row = mysqli_fetch_array($query);
  
    // Get the first name
    $price = $row["price"];
  
    // Get the first name
    $remainUnit = $row["remainUnit"];
}
  
// Store it in a array
$result = array("$price", "$remainUnit");
  
// Send in JSON encoded form
$myJSON = json_encode($result);
echo $myJSON;
?>