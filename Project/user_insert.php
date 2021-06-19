<?php require("connect.php");   ?> 


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

    
<form action="user_processinsert.php" method="post" >


<table>


   

        <tr> 
        <td>ชี่อผู้ใช้</td>
        <td><input type="text" name="username"></td>
        </tr>
        <tr> 
        <td>รหัสผ่าน</td>
        <td><input type="text" name="password"></td>
         </tr>
        <tr> 
        <td>ชื่อ</td>
        <td><input type="text" name="name"></td>
         </tr>
        <tr> 
        <td>นามสกุล</td>
        <td><input type="text" name="surname"></td>
         </tr>
        <tr> 
        <td>เบอร์</td>
        <td><input type="text" name="tel"></td>
         </tr>
         <tr> 
        <td>ที่อยู่</td>
        <td><input type="text" name="address"></td>
        </tr>
        <tr> 
        <td>สถานะ</td>
        <td><input type="text" name="role"></td>
        </tr>

         
         

       




</table>
<input type="submit" value="Complete">

</form>


    
    </body>
</html>