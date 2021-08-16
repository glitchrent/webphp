<!DOCTYPE html>
<html>
    <head>
        <title>Format</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="mystyle.css">
    </head>
    <body>
    <form action="Test3.php" method="POST">
        number :<input type = "Integer" name="num"><br><br>
        <input type="submit" value="Cal"><br><br>
        </form>

        <?php
        $Number = $_POST['num'];
        $num1 = 36;
        $num3 = array("18");
        $num4 = 0.2;
        for ($i=1; $i<=$Number; $i++){
            $num2 = $num1/$i;
            if ($num2 != 80){
                echo ($num2%$num4)." ".$num2;
            } else {
                echo "";
            }
            echo "<br>";
        }
    ?>
    </body>
    
</html>