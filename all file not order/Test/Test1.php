<!DOCTYPE html>
<html>
    <head>
        <title>Format</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="mystyle.css">
    </head>
    <body>
    <form action="Test1.php" method="POST">
        score :<input type = "Integer" name="num"><br><br>
        <input type="submit" value="Cal"><br><br>
        </form>

        <?php

        $number = $_POST['num'];

            for ($i=1; $i<=10; $i++){
                echo ($i*2)^$number;
                echo "<br>";
            }
        
        ?>
    </body>
    
</html>