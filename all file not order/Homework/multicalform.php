<!DOCTYPE html>
<html>
    <head>
        <title>Format</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="mystyle.css">
    </head>
    <body>

    <form action="multicalform.php" method="POST">
        Insert number form fill :<input type = "Integer" name="number"><br><br>
        <input type="submit" value="Cal"><br><br>
        </form>

        <?php
        @ini_set('display_errors', '0');
        $number = $_POST['number'];
        for ($x = 1; $x <= 12; $x++) {
            $muliti = $_POST["number"]*$x;
            if ($x%2){
                echo "$_POST[number] x $x = $muliti</p>";
            }
            else{		
                echo "$_POST[number] x $x = $muliti</p>";
            }
            
        }

        ?>
    </body>
    
</html>