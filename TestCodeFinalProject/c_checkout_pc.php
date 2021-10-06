<?php require("conn.php");   ?> 
<?php require("bootstrapscrip.php");   ?> 
<?php
session_start();

  $Total = 0;
  $SumTotal = 0;
  $strSQL = "
	INSERT INTO cuspo (poDate,name,surname,tel,address,cusID,postatus,slip)
	VALUES
	('".date("Y-m-d H:i:s")."','".$_POST["txtname"]."','".$_POST["txtsurname"]."' ,'".$_POST["txttel"]."','".$_POST["txtaddress"]."','".$_POST["txtcusID"]."','".$_POST["postatus"]."','".$_FILES["txtslip"]["name"]."') 
  ";
  move_uploaded_file($_FILES["txtslip"]["tmp_name"],"Slip/".$_FILES["txtslip"]["name"]);
  mysqli_query($check,$strSQL) or die(mysql_error());
	
  $strOrderID = mysqli_insert_id($check);

  for($i=0;$i<=(int)$_SESSION["intLine"];$i++)
  {
	  if($_SESSION["strproductID"][$i] != "")
	  {
			  $strSQL = "
				INSERT INTO cuspo_detail (poID,productID,qty)
				VALUES
				('".$strOrderID."','".$_SESSION["strproductID"][$i]."','".$_SESSION["strQty"][$i]."') 
			  ";

			  

			  mysqli_query($check,$strSQL) or die(mysql_error());
			  
			  $strSQL2 = "
			  
			  UPDATE product SET remainUnit = remainUnit- '".$_SESSION["strQty"][$i]."' WHERE productID = '".$_SESSION["strproductID"][$i]."'
		  ";
		  		mysqli_query($check,$strSQL2) or die(mysql_error());

			$_SESSION["strproductID"][$i] = "";
			$_SESSION["strQty"][$i] = "";


	  }
  }
  

mysqli_close($check);




header("location:c_product.php");
?>