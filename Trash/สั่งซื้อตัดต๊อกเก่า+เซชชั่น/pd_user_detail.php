<?php require("conn.php");   ?> 
<?php require("bootstrapscrip.php");   ?> 
<?php require("ses_start.php");   ?> 




<?php

echo $_SESSION['username']; 

?>



<?php

$id = $_SESSION['username'];

$data = "SELECT *  FROM userbuy WHERE usb_id = $id";
$dataQuery = mysqli_query($check, $data);

?>

<?php
while ($dataResult = mysqli_fetch_assoc($dataQuery)) {
?>

<tr>
<td><?php echo $dataResult["usb_username"]; ?></td>
<td><?php echo $dataResult["usb_password"]; ?></td>
<td><?php echo $dataResult["usb_name"]; ?></td>
<td><?php echo $dataResult["usb_surname"]; ?></td>
<td><?php echo $dataResult["usb_tel"]; ?></td>
<td><?php echo $dataResult["usb_address"]; ?></td>
<td><?php echo $dataResult["usb_role"]; ?></td>
<tr>


<?php
}

?>

<a href="pd_user.php">หน้าหลัก</a>


<a href="ses_des.php">ออกจากระบบ</a>