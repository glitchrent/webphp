<?php require("connect.php");  ?>  
<html>
<body>

<a href="admin_page.php?logout='1'">ออกจากระบบ</a>

<a href = "insert.php"> insert page </a>


<?php

$data = "SELECT * FROM product";
$result = mysqli_query($check, $data);
?>

<table border="1">
<tr>
<td>id</td>
<td>name</td>
<td>remainunit</td>
</tr>

<?php

foreach($result as $row){
?>
    <form action='testcaldb.php' method='post'>
    <tr>
    <td> <?php echo $row['productID']; ?> </td>
    <td> <?php echo $row['productName']; ?> </td>
    <td> <?php echo $row['remainUnit']; ?> </td>
    <td> <input type='int' name='update_score[$row[productid]]' value='' > </td>
    </tr>
<?php } ?>
<tr> <td> <button type='submit'>Update</button> </td> </tr>
    </form>
    
</table>


</body>
</html>