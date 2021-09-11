<?php require("conn.php");   ?> 
<form action="upload.php" method="post" enctype="multipart/form-data">
<input type="text" name="picname" placeholder="กรอกชื่อรูป">
<input type="file" name="file">
<input type="submit" value="upload" name="submit">
</form>

<?php

$data = "SELECT *  FROM testuppic ";
$dataQuery = mysqli_query($check, $data);

?>
<table border="1">
    <tr>
        <td>ลำดับ</td>
            <td>รูป</td>
</tr>
    
<?php
while ($dataResult = mysqli_fetch_assoc($dataQuery)) {
?>
<tr>
<td align="center"><?php echo $dataResult["picnum"]; ?></td>
<td align="center"><img src="upload/<?php echo $dataResult["picname"]; ?>" width="100%"></td>
</tr>
<?php
  }   
?>

</table>