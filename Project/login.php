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


admin 1234 / member 1234 <br>  <br>

    <form action="loginprecess.php" method="post" >

<table>


   

        <tr> 
        <td>User</td>
        <td><input type="text" name="username"></td>
        </tr>
        <tr> 
        <td>Password</td>
        <td><input type="text" name="password"></td>
         </tr>



</table>
        <input type="submit" value="โลจิน" name="login_user">

</form>

      
    </body>
</html>