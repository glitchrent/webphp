<?php

$firstname = $_POST['firstname'];
$password = $_POST['password'];
$comment = $_POST['comment'];

?>




<!DOCTYPE html>
<html>
    <head>
        <title>Format</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="mystyle.css">
    </head>
    <body>
        ส่งข้อมูลผ่าน Form (Get)
        <form action="formget.php" method="POST">
        First Name : <input type="text" name="firstname"><br><br>
        Password : <input type="password" name="password"><br><br>
        Comment : <textarea name="comment"></textarea><br><br>
        <input type="submit" value="SEND"><br><br>
        </form>

        <?php
        if(isset($firstname)){
            echo "ข้อมูลที่รับเข้ามา";
            echo '<br>';
            echo $password;
            echo '<br>';
            echo $comment;

        }// End isset
        else {
            echo "ไม่มีข้อมูล";
        }
        ?>
    </body>
    
</html>