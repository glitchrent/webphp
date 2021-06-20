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
        $score = 82;
        if ($score >= 80) {
            echo "ดีมาก"; }
            elseif ($score >= 50) {
                echo "ผ่าน"; }
            else {
                echo "ตก";
            }
            ?>
    </body>
    
</html>