
<?php require("connect.php");   ?> 

<!DOCTYPE html>
<html>
    <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="mystyle.css">
    
        <title>Format</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="mystyle.css">
    </head>
    <body>






<?php

$data = ' SELECT *  FROM user; ';
$dataQuery = mysqli_query($check, $data);


?>

<table border="1">
<tr>

<td> ชี่อผู้ใช้</td> 
<td> รหัสผ่าน</td>
<td> ชื่อ</td>
<td> นามสกุล</td>
<td> เบอร์</td>
<td> ที่อยู่</td>
<td> สถานะ</td>

</tr>

<?php

while ($dataResult = mysqli_fetch_assoc($dataQuery)) {
?>

<tr>

<td> <?php echo $dataResult["username"]; ?> </td>
<td> <?php echo $dataResult["password"]; ?> </td>
<td> <?php echo $dataResult["name"]; ?> </td>
<td> <?php echo $dataResult["surname"]; ?> </td>
<td> <?php echo $dataResult["tel"]; ?> </td>
<td> <?php echo $dataResult["address"]; ?> </td>
<td> <?php echo $dataResult["role"]; ?> </td>
<td><a href = "user_update.php?id=<?php echo $dataResult["username"];?>">Update</a></td>
<td><a href = "user_processdel.php?iddel=<?php echo $dataResult["username"];?>">Del</a></td>

</tr>




<?php  }   ?>

</table>


    </body>
</html>