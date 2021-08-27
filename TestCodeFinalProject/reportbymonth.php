<?php require("conn.php");   ?> 

<html>
<body>
<?php


$data = "SELECT total,SUBSTR(date,1,7) AS date_test,SUM(total) total FROM orderbill WHERE date GROUP BY MONTH (date)";
$dataQuery=mysqli_query($check,$data);

?>


<?php
while ($dataResult = mysqli_fetch_assoc($dataQuery)) {
?>

<tr>
<td><?php echo $dataResult["date_test"];?> <?php echo $dataResult["total"]; ?></td> <br>
<tr>
    





<?php
  }   
?>

</body>

</html>