<?php require("conn.php");   ?> 
<?php require("bootstrapscrip.php");   ?> 

<?php /*
$data = "SELECT productName,imstatus,exportunit,SUM(exportunit) exportunit FROM report WHERE productID GROUP BY productName";
$dataQuery = mysqli_query($check,$data);
*/
?>

<?php 
$data = "SELECT productName,imstatus,exportunit,SUM(IF(imstatus='ส่งออก',exportunit,NULL)) AS expsumall FROM report WHERE productID GROUP BY productName";
$dataQuery = mysqli_query($check,$data);

?>


<?php
while ($dataResult = mysqli_fetch_assoc($dataQuery)) {
?>

<tr>
<td><?php echo $dataResult["productName"];?> <?php echo $dataResult["imstatus"]; ?> <?php echo $dataResult["expsumall"]; ?> </td> <br>
<tr>

<?php } ?>



