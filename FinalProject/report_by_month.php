<?php require("conn.php");   ?> 
<?php require("bootstrapscrip.php");   ?> 
<html>
  <head><title>รายงานตามเดือน</title></head>

  


<body>




<?php include 'header.php'; ?>




<div class="faidpage">

<br>
<?php


$data4 = "SELECT totalunp,SUBSTR(date,1,7) AS date_test,SUM(totalunp) totalunp FROM report WHERE date GROUP BY MONTH (date) ORDER BY date ASC";
$dataQuery=mysqli_query($check,$data4);

?>




<div style="width:80%; margin:0px auto;"> 




<?php
$sql = "SELECT SUBSTR(date,1,7),totalunp AS date_test,SUM(totalunp) totalunp FROM report WHERE date GROUP BY MONTH (date) ORDER BY date ASC";

$res_c = mysqli_query($check,$sql);
 
if (!$res_c) {
    die('<p><strong style="color:#FF0000">!! Invalid query:</strong> ' . $mysqli->error.'</p>');
}
?>
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript">

$(function () {
    $('#barchart').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'ยอดขายรายเดือน'
        },
/*        subtitle: {
            text: ''
        },*/
        xAxis: {
            categories: [
   <?php
   $c_field = $res_c->field_count-1;
    $c=0; while($row = $res_c->fetch_array(MYSQLI_NUM)){ $c++; ?>
   <?php if($c>1){ ?>,<?php } 
   $data[] = $row[$c_field]; 
   ?>
                '<?php echo htmlspecialchars(addslashes(str_replace("\t","",str_replace("\n","",str_replace("\r","",$row[0]))))); ?>'
   <?php } ?>
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'ยอดขาย'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:15px">{point.key}</span><br>',
            pointFormat:  '<span style="font-size:20px">{series.name} : </span>',
            footerFormat: '<span style="font-size:15px">{point.y}</span>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.1,
                borderWidth: 0,
    dataLabels: {
     enabled: true
    }
   }
        },
  credits: {
   enabled: false
  },
        series: [{
            name: 'ยอดขาย',
            data: [<?php echo join(',',$data); ?>]
 
        }]
    });
});
</script>
<!--แสดงกราฟ-->
<div id="barchart"></div>






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