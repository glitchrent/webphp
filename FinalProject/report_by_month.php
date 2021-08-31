<?php require("conn.php");   ?> 
<?php require("bootstrapscrip.php");   ?> 
<html>
  <head><title>รายงานตามเดือน</title></head>
<body>




<?php include 'header.php'; ?>

<br>
<?php


$data = "SELECT totalunp,SUBSTR(date,1,7) AS date_test,SUM(totalunp) totalunp FROM report WHERE date GROUP BY MONTH (date) ORDER BY date ASC";
$dataQuery=mysqli_query($check,$data);

?>




<div style="width:80%; margin:0px auto;"> 
<table class="table table-striped">

<tr>
<td align="center">ปี-เดือน</td>
<td align="center">ยอดขายตามรายเดือน</td>
</tr>

<?php
while ($dataResult = mysqli_fetch_assoc($dataQuery)) {
?>

<tr>
<td align="center"><?php echo $dataResult["date_test"];?></td> 
<td align="center"><?php echo $dataResult["totalunp"]; ?></td>
</tr>
    

<?php
  }   
?>
</table>

</div>
</body>

</html>