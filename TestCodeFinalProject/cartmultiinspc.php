<?php require("conn.php");  ?>
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
		
		$calsql2 = "INSERT INTO report(productID,productName,date,imstatus,exportunit,totalunp)VALUES('".$_POST["txtproductID$i"]."','".$_POST["txtproductName$i"]."','".$_POST["txtdate$i"]."','".$_POST["txtimstatus$i"]."','".$_POST["txtaddunit$i"]."','".$_POST["totalunp$i"]."')";
		$dataQuery2 = mysqli_query($check, $calsql2);

		$del = "DELETE FROM cart ";
		$dataQuery4 = mysqli_query($check, $del);
		
	}


	$calsql3 = "INSERT INTO orderbill(date,total)VALUES('".$_POST["txtorderdate"]."','".$_POST["totalresult"]."')";
		$dataQuery3 = mysqli_query($check, $calsql3);

}





if($check){
    echo  "save <script>window.location='cartmultiins.php'</script>";
    }else{
        echo "Fail";
    }


?>