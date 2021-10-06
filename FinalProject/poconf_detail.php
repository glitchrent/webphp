<html>
<?php require("conn.php");   ?> 
<?php require("bootstrapscrip.php");   ?> 
<head>
  
<style>
@media print 
{ 
#non-printable { display: none; } 
#printable { display: block; } 
} 

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
 
<div id="non-printable">
<a href="poconf_list.php"><input type="button" class="btn btn-outline-danger" value="ย้อนกลับ"></a>
<input type="button" class="btn btn-outline-info" value="ปริ้นใบเสร็จ" onclick="window.print()">
</div>
<?php

$id=$_GET['id'];

$strSQL = "SELECT * FROM cuspo WHERE poID = $id ";
$objQuery = mysqli_query($check, $strSQL)  or die(mysql_error());
$objResult = mysqli_fetch_array($objQuery);
?>



<div class="offset-xl-2 col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 padding">
     <div class="card">

         <div class="card-header p-4">

             <center><h2>ใบสั่งซื้อสินค้า</h2></center>

             <div class="row mb-4">

             <div class="col-sm-6">
                     
                     
                     <h3 class="text-dark mb-1">ร้านมั่นคง จงเจริญ</h3>
                     <div><h3 class="text-dark mb-1">ที่อยู่ 3 ซ.อนามัยงามเจริญ 33 แยก 2</h3></div>
                     <div><h3 class="text-dark mb-1">แขวงท่าข้าม เขตบางขุนเทียน กรุงเทพมหานคร 10600</h3></div>
                     
                     <div><h3 class="text-dark mb-1">เบอร์โทร : 02-117-3375</h3></div>
                 </div>
                 
                 <div class="col-sm-6 ">
                 <h3 class="mb-1">เลขที่ใบสั่งซื้อสินค้า #<?php echo $objResult["poID"];?></h3>
                 <h3 class="mb-0">
                 วันที่สั่งซื้อ : 

                <?php $newdate =  date('d/m/Y เวลา H:i:s น.', strtotime($objResult["poDate"]));
                echo $newdate; ?>
                 <br>
                 วันที่พิมพ์ : <?php echo date("d/m/Y เวลา H:i:s น.");?>
                 </h3>
                 </div>


            
             
             </div>
             
         </div>
         <div class="card-body">

             <div class="row mb-4">
                 
          

                 <div class="col-sm-6 ">
                     <h3 class="mb-1">ข้อมูลลูกค้า :</h3>
                     <h3 class="text-dark mb-1">ชื่อ <?php echo $objResult["name"];?> <?php echo $objResult["surname"];?></h3>
                     <div><h3 class="text-dark mb-1">ที่อยู่ 3 ซ.อนามัยงามเจริญ 33 แยก 2</h3></div>
                     <div><h3 class="text-dark mb-1">แขวงท่าข้าม เขตบางขุนเทียน กรุงเทพมหานคร 10600</h3></div>
                     
                     
                     <div><h3 class="text-dark mb-1">เบอร์โทร : <?php echo $objResult["tel"];?></h3></div>
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
$Total = 0;
$SumTotal = 0;

$strSQL2 = "SELECT * FROM cuspo_detail WHERE poID = $id ";
$objQuery2 = mysqli_query($check,$strSQL2)  or die(mysql_error());

while($objResult2 = mysqli_fetch_array($objQuery2))
{  $n++;
		$strSQL3 = "SELECT * FROM product WHERE productID = '".$objResult2["productID"]."' ";
		$objQuery3 = mysqli_query($check,$strSQL3)  or die(mysql_error());
		$objResult3 = mysqli_fetch_array($objQuery3);
		$Total = $objResult2["qty"] * $objResult3["price"];
		$SumTotal = $SumTotal + $Total;
?>



    
  <tr>
    <td><?php echo $n;?></td>
		<td><?php echo $objResult2["productID"];?></td>
		<td><?php echo $objResult3["productName"];?></td>
    
		<td><?php echo number_format($objResult3["price"],2);?></td>
		<td><?php echo $objResult2["qty"];?></td>
		<td><?php echo number_format($Total,2);?></td>
    <td>บาท</td>
    </tr>

    <?php
 }
  ?>
  <tr>  
    <td colspan="4"></td>
      <td>ราคารวมทั้งหมด : </td>
      <td><?php echo number_format($SumTotal,2);?></td>
      <td>บาท</td>
</tr>
                         
                     </tbody>
                 </table>
             </div>


             
         </div>

     </div>
 </div>
</body>
</html>