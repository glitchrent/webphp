<?php require("conn.php");   ?> 
<?php require("bootstrapscrip.php");   ?> 
<?php
session_start();

  $Total = 0;
  $SumTotal = 0;

  $strSQL = "
	INSERT INTO cuspo (poDate,name,surname,tel,address,cusID,postatus)
	VALUES
	('".date("Y-m-d H:i:s")."','".$_POST["txtname"]."','".$_POST["txtsurname"]."' ,'".$_POST["txttel"]."','".$_POST["txtaddress"]."','".$_POST["txtcusID"]."','".$_POST["postatus"]."') 
  ";
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
			  
			$_SESSION["strproductID"][$i] = "";
			$_SESSION["strQty"][$i] = "";
	  }
  }


mysqli_close($check);



header("location:product.php");
?>