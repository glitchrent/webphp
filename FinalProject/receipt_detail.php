<html>
<?php require("conn.php");   ?> 
<?php require("bootstrapscrip.php");   ?> 
<head>
  
<style>

body {
    background-color: #fff
}

.padding {
    padding: 2rem !important
}

.card {
    margin-bottom: 30px;
    border: none;
    -webkit-box-shadow: 0px 1px 2px 1px rgba(154, 154, 204, 0.22);
    -moz-box-shadow: 0px 1px 2px 1px rgba(154, 154, 204, 0.22);
    box-shadow: 0px 1px 2px 1px rgba(154, 154, 204, 0.22)
}

.card-header {
    background-color: #fff;
    border-bottom: 1px solid #e6e6f2
}

h3 {
    font-size: 20px
}

h5 {
    font-size: 15px;
    line-height: 26px;
    color: #3d405c;
    margin: 0px 0px 15px 0px;
    font-family: 'Circular Std Medium'
}

.text-dark {
    color: #3d405c !important
}  
  </style>

</head>

<body>   
 

<a href="poconf_list.php"><input type="button" class="btn btn-outline-danger" value="ย้อนกลับ"></a>
<input type="button" class="btn btn-outline-info" value="ปริ้นใบเสร็จ" onclick="window.print()">
<?php 
$id=$_GET["id"];
$data = "SELECT orderbill.orderID, report.productName, report.totalunp, report.date, report.exportunit, orderbill.total, report.productID
FROM report 
INNER JOIN orderbill ON orderbill.date=report.date WHERE orderID=$id";
$dataQuery = mysqli_query($check,$data);

?>

<?php

$data2="SELECT * FROM orderbill WHERE orderID=$id";
$dataQuery2 = mysqli_query($check, $data2);
$dataOrder = mysqli_fetch_assoc($dataQuery2)

?>



<div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 padding">
     <div class="card">
         <div class="card-header p-4">
             <center><h2>ใบเสร็จสินค้า</h2></center>
           
         </div>
         <div class="card-body">
             <div class="row mb-4">
                 <div class="col-sm-6">
                     
                     <h3 class="text-dark mb-1">ร้านมั่นคง จงเจริญ</h3>
                     <div><h3 class="text-dark mb-1">ที่อยู่ 3 ซ.อนามัยงามเจริญ 33 แยก 2</h3></div>
                     <div><h3 class="text-dark mb-1">แขวงท่าข้าม เขตบางขุนเทียน กรุงเทพมหานคร 10600</h3></div>
                     
                     <div><h3 class="text-dark mb-1">เบอร์โทร : 02-117-3375</h3></div>
                 </div>

                 <div class="col-sm-6 ">
                     
                     <h3 class="text-dark mb-1">เลขที่ใบเสร็จ #<?php echo $dataOrder['orderID']?></h3>
                     <div><h3 class="text-dark mb-1"> 
                     วันที่สั่งซื้อ: 
                 <?php 
                 
$newdate =  date('d/m/Y เวลา H:i:s น.', strtotime($dataOrder['date']));

echo $newdate; 
                 
                 ?>

                     </h3></div>
                     <div><h3 class="text-dark mb-1">วันที่พิมพ์: <?php echo date("d/m/Y เวลา H:i:s น.");?></h3></div>
                 </div>
                 
             </div>
             <div class="table-responsive-sm">
                 <table class="table table-striped">
                     <thead>
                         
                     <tr>
    <td >ลำดับ</td>
    <td >รหัสสินค้า</td>
    <td >ชื่อสินค้า</td>
    
    <td >ราคา (บาท)</td>
    <td >จำนวน (ชิ้น)</td>
    <td >ราคารวมต่อชิ้น (บาท)</td>
    <td ></td>
  </tr>


                     </thead>
                     <tbody>

                    รายการสินค้า




                    <?php
$n=0;
while ($dataResult = mysqli_fetch_assoc($dataQuery)) {
    $n++
?>

<tr>
<td ><?php echo $n;?></td>
<td ><?php echo $dataResult["productID"];?></td>
<td ><?php echo $dataResult["productName"];?></td>
<td ><?php echo $dataResult["exportunit"];?></td>
<td ><?php echo number_format($dataResult["totalunp"]/$dataResult["exportunit"],2);?></td>
<td ><?php echo number_format($dataResult["totalunp"],2);?></td>
<td align="left">บาท</td>
</tr>

<?php } ?>




<tr>
<td colspan="4"></td>
<td>ราคารวมทั้งหมด : </td>
<td><?php echo number_format($dataOrder['total'],2);?></td>
<td >บาท</td>
</tr>
                         
                     </tbody>
                 </table>
             </div>


             
         </div>

     </div>
 </div>
</body>
</html>