<?php require("conn.php");   ?> 


<?php


?>



<?php

$data = "SELECT *  FROM product ";
$dataQuery = mysqli_query($check, $data);

?>

<form method="psot" action="alerttest.php?Action=Save">

<?php
$i =0;
while ($dataResult = mysqli_fetch_assoc($dataQuery)) {
        $i = $i + 1;
?>

<input name="remainUnit<?php echo $i;?>" type="text" value="<?php echo $dataResult["remainUnit"]; ?>">
<?php
  }   
?>

<input type="hidden" name="hdnNo" value="<?php echo $i;?>">
<button type="submit" value="Complete">ยืนยัน</button>
</form>

