<?php require("conn.php");   ?> 
<?php require("bootstrapscrip.php");   ?> 
<html>
  <head><title>รายงานตามเดือน</title></head>

  


<body>




<?php include 'header.php'; ?>




<div class="faidpage">

<br>
<?php


$data4 = "SELECT totalunp,SUBSTR(date,1,10) AS date_test,SUM(totalunp) totalunp FROM report WHERE date GROUP BY DAY (date) ORDER BY date ASC";
$dataQuery=mysqli_query($check,$data4);

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
</div>
</body>


</html>