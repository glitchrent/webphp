<?php require("conn.php");  ?>
<?php require("ses_start.php");  ?>
<?php

if($_GET["Action"] == "Save")
{
	for($i=1;$i<=$_POST["hdnNo"];$i++)
	{	
		
		$calsql = "UPDATE product SET ";
		//$strSQL .="productID = '".$_POST["txtproductID$i"]."' ";
		//$strSQL .=",productName = '".$_POST["txtproductName$i"]."' ";
		$calsql .="remainUnit = remainUnit-'".$_POST["txtaddunit$i"]."' ";
		$calsql .="WHERE productID = '".$_POST["hdnproductID$i"]."' ";
		$dataQuery = mysqli_query($check, $calsql);  
		
		$calsql2 = "INSERT INTO userorder(productID,productName,productCategory,date,imstatus,exportunit,totalunp,usb_ID)VALUES('".$_POST["txtproductID$i"]."','".$_POST["txtproductName$i"]."','".$_POST["txtproductCategory$i"]."','".$_POST["txtdate$i"]."','".$_POST["txtimstatus$i"]."','".$_POST["txtaddunit$i"]."','".$_POST["totalunp$i"]."','".$_SESSION["username"]."')";
		$dataQuery2 = mysqli_query($check, $calsql2);

		$del = "DELETE FROM usercart ";
		$dataQuery4 = mysqli_query($check, $del);
		
	}


	$calsql3 = "INSERT INTO userorderbill(date,total,usb_ID,buystatus)VALUES('".$_POST["txtorderdate"]."','".$_POST["totalresult"]."','".$_SESSION["username"]."','".$_POST["buystatus"]."')";
		$dataQuery3 = mysqli_query($check, $calsql3);

}





// if($check){
//     echo  "save <script>window.location='subtract_stock.php'</script>";
//     }else{
//         echo "Fail";
//     }


?>