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
        $age = 22;
        if($age >= 60) {
            echo "ผู้สูงอายุ"; {
        elseif ($age>=18 and $age <60){
            echo "คนทั่วไป";
        } else {
            echo "เยาวชน";
        }
        ?>
    </body>
    
</html>