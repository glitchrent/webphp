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
        function area($base,$heigh){
            $result = 1/2*$base*$heigh;
            echo $result;
            return $result;
        }

        $a = 2; $b = 3;
        $traiangle1 = area($a,$b);
        echo "Area 1 = $traiangle1 <br>";

        $x = 10; $y = 5;
        $traiangle2 = area($x,$y);
        echo "Area 2 $traiangle2 <br>";
        ?>
    </body>
    
</html>