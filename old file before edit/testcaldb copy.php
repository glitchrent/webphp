<?php require("connect.php");  ?>
<?php

if($_GET["Action"] == "Save")
{
	for($i=1;$i<=$_POST["hdnNo"];$i++)
	{
		$strSQL = "UPDATE product SET ";
		$strSQL .="productID = '".$_POST["txtproductID$i"]."' ";
		$strSQL .=",productName = '".$_POST["txtproductName$i"]."' ";
		$strSQL .=",productCategory = '".$_POST["txtproductCategory$i"]."' ";
		$strSQL .=",remainUnit = remainUnit+'".$_POST["txtaddunit$i"]."' ";
		$strSQL .="WHERE productID = '".$_POST["hdnproductID$i"]."' ";
		$dataQuery = mysqli_query($check, $strSQL);
	}

}

if($check){
    echo  "save <script>window.location='testcal.php'</script>";
    }else{
        echo "Fail";
    }


?>