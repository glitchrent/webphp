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
        function formatMoney($number, $fractional=false) {
            if ($fractional) {
                $number = sprintf('%.2f', $number);
            }
            while (true) {
                $replaced = preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $number);
                if ($replaced != $number) {
                    $number = $replaced;
                } else { break;  }
            }
            return $number;
        }// End Function formatMoney
        $a = 19000000/7;
        echo $a;                    echo "<br>"; // ปกติ
        echo formatMoney($a, true); echo "<br>"; // จัดรูปแบบ
        
        ?>
    </body>
    
</html>