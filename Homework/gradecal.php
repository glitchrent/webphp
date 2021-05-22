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
        $score = 80;
        if($score <= 49) {
            echo "F"; 
        } elseif ($score>=50 and $score <=54) {
            echo "D";
        } elseif ($score>=55 and $score <=59) {
            echo "D+";
        } elseif ($score>=60 and $score <=64) {
            echo "C";
        } elseif ($score>=65 and $score <=69) {
            echo "C+";
        } elseif ($score>=70 and $score <=74) {
            echo "B";
        } elseif ($score>=75 and $score <=79) {
            echo "B+";
        } else {
            echo "A";
        } 


        ?>
    </body>
    
</html>