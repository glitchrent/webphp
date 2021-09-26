<?php require("conn.php");  ?>
<?php

if($_GET["Action"] == "Save")
{
	for($i=1;$i<=$_POST["hdnNo"];$i++)
	{	
		
		// $calsql = "UPDATE product SET ";
		// //$strSQL .="productID = '".$_POST["txtproductID$i"]."' ";
		// //$strSQL .=",productName = '".$_POST["txtproductName$i"]."' ";
		// $calsql .="remainUnit = remainUnit-'".$_POST["txtaddunit$i"]."' ";
		// $calsql .="WHERE productID = '".$_POST["hdnproductID$i"]."' ";
		// $dataQuery = mysqli_query($check, $calsql);  
		
		$calsql2 = "INSERT INTO report(productID,productName,productCategory,date,imstatus,exportunit,totalunp)VALUES('".$_POST["txtproductID$i"]."','".$_POST["txtproductName$i"]."','".$_POST["txtproductCategory$i"]."','".$_POST["txtdate$i"]."','".$_POST["txtimstatus$i"]."','".$_POST["txtaddunit$i"]."','".$_POST["totalunp$i"]."')";
		$dataQuery2 = mysqli_query($check, $calsql2);

		
	}

    $poid=$_POST["txtpoid"];
    $substatus="ยืนยันแล้ว";
    $calsql3 = "UPDATE cuspo SET postatus = '$substatus' WHERE poID='$poid'";
    $dataQuery3 = mysqli_query($check, $calsql3);


}




if($check){
    echo  "save <script>window.location='poconf_list.php'</script>";
    }else{
        echo "Fail";
    }






?>