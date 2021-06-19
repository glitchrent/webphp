<?php require("connect.php");  ?>  


<!DOCTYPE html>
<html>
    <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">


        <title>Format</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="Project\mystyle.css">
    </head>
    <body>
  
<?php

$id=$_GET['id'];
$data="SELECT * FROM user WHERE username='$id'";
$dataQuery = mysqli_query($check,$data);
$dataTranfer=mysqli_fetch_assoc($dataQuery)

?>


<form action="user_processupdate.php" method="post" >

<input type="hidden"  value="<?php echo $dataTranfer["username"];?>"name ="username">

<table>


   


        <tr> 
        <td>รหัสผ่าน</td>
        <td><input type="text" name="password" value="<?php echo $dataTranfer['password']?>"></td>
         </tr>
        <tr> 
        <td>ชื่อ</td>
        <td><input type="text" name="name" value="<?php echo $dataTranfer['name']?>"></td>
         </tr>
        <tr> 
        <td>นามสกุล</td>
        <td><input type="text" name="surname" value="<?php echo $dataTranfer['surname']?>"></td>
         </tr>
        <tr> 
        <td>เบอร์</td>
        <td><input type="text" name="tel" value="<?php echo $dataTranfer['tel']?>"></td>
         </tr>
         <tr> 
        <td>ที่อยู่</td>
        <td><input type="text" name="address" value="<?php echo $dataTranfer['address']?>"></td>
         </tr>
         <tr> 
        <td>สถานะ</td>
        <td><input type="text" name="role" value="<?php echo $dataTranfer['role']?>"></td>
         </tr>
         
         

       




</table>
<input type="submit" value="Complete">

</form>


    
    </body>
</html>