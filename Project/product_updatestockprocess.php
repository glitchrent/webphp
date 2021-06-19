<?php require("connect.php");  ?>
<?php

if($_GET["Action"] == "Save")
{
	for($i=1;$i<=$_POST["hdnNo"];$i++)
	{
		$calsql = "UPDATE product SET ";
		//$strSQL .="productID = '".$_POST["txtproductID$i"]."' ";
		//$strSQL .=",productName = '".$_POST["txtproductName$i"]."' ";
		//$strSQL .=",productCategory = '".$_POST["txtproductCategory$i"]."' ";
		$calsql .="remainUnit = remainUnit+'".$_POST["txtaddunit$i"]."' ";
		$calsql .="WHERE productID = '".$_POST["hdnproductID$i"]."' ";
		$dataQuery = mysqli_query($check, $calsql);
	}

}

if($check){
    echo  "save <script>window.location='product_updatestock.php'</script>";
    }else{
        echo "Fail";
    }


?>