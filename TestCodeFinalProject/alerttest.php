<?php require("conn.php");   ?> 

<?php $get_remainunit = (isset($_GET['remainUnit'])) ? $_GET['remainUnit'] : ''; ?>

<?php
if($_GET["Action"] == "Save")
{
	for($i=1;$i<=$_GET["hdnNo"];$i++)
	{


if($get_remainunit <= 5)
{
  echo '<script language="javascript">';
  echo 'alert("เติมก่อนไอ้ชิปหาย")';
  echo '</script>';
  echo $get_remainunit;
  }     

    }
}
  ?>


