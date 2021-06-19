<?php require("connect.php");  ?>
<?php

if($_GET["Action"] == "Save")
{
	for($i=1;$i<=$_POST["hdnLine"];$i++)
	{
		$strSQL = "UPDATE product SET ";
		$strSQL .="productID = '".$_POST["txtCustomerID$i"]."' ";
		$strSQL .=",productName = '".$_POST["txtName$i"]."' ";
		$strSQL .=",productCategory = '".$_POST["txtEmail$i"]."' ";
		$strSQL .=",remainUnit = remainUnit+'".$_POST["txtBudget$i"]."' ";
		$strSQL .="WHERE productID = '".$_POST["hdnCustomerID$i"]."' ";
		$dataQuery = mysqli_query($check, $strSQL);
	}

}

if($check){
    echo  "save <script>window.location='testcal.php'</script>";
    }else{
        echo "Fail";
    }


?>