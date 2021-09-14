<?php require("conn.php");   ?> 
<?php require("bootstrapscrip.php");   ?> 



<?php



$data = "SELECT *  FROM product ";
$dataQuery = mysqli_query($check, $data);


?>

<table>

<?php
$i=1;
$n=10;
while ($dataResult = mysqli_fetch_assoc($dataQuery)) {
    if($i!=3){
        echo $dataResult["productID"]." ";
        echo $dataResult["productName"]."/";
        $i++;
    }else{

?>

<?php
    echo $dataResult["productID"]." ";
    echo $dataResult["productName"]."<br>";
        $i=1;
}

?>


<?php
  }   
?>


</table>
