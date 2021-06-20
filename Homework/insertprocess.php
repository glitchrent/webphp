<?php

require('connect.php');

$EmployeeID   = $_POST['EmployeeID'];
$Title   = $_POST['Title'];
$Name   = $_POST['Name'];
$Sex   = $_POST['Sex'];
$Education   = $_POST['Education'];
$Start_Date   = $_POST['Start_Date'];
$Salary   = $_POST['Salary'];
$DepartmentName = $_POST['DepartmentName'];
$sql = "
 INSERT INTO employee
 VALUES ('$EmployeeID','$Title','$Name','$Sex','$Education','$Start_Date','$Salary','$DepartmentName');
 ";
$objQuery = mysqli_query($conn, $sql);
if ($objQuery) {
 echo "New record Inserted successfully";
} else {
 echo "Error : Input";
}
mysqli_close($conn);
?>