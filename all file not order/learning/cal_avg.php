<?php
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];
    $num4 = $_POST['num4'];
    $num5 = $_POST['num5'];
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
        <form action="cal_avg.php" method="POST">
            Number 1 : <input type="text" name="num1"><br><br>
            Number 2 : <input type="text" name="num2"><br><br>
            Number 3 : <input type="text" name="num3"><br><br>
            Number 4 : <input type="text" name="num4"><br><br>
            Number 5 : <input type="text" name="num5"><br><br>
            <input type="reset" value="Clear">
            <input type="submit" value="Cal Average"><br><br>
</from>


        <?php

        ?>
    </body>
    
</html>