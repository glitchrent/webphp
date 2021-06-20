<!DOCTYPE html>
<html>
    <head>
        <title>Format</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="mystyle.css">
    </head>
    <body>
        <?php
            for ($i=1; $i<=10; $i++){
                echo $i;
                if ($i%2 == 0){
                    echo " เป็นเลขคู่";
                } else {
                    echo " เป็นเลขคี่";
                }
                echo "<br>";
            }
        ?>
    </body>
    
</html>