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
        $score = 70;
        if($score <= 49) {
            echo "เกรดที่ได้ : F"; 
        } elseif ($score>=50 and $score <=54) {
            echo "เกรดที่ได้ : D";
        } elseif ($score>=55 and $score <=59) {
            echo "เกรดที่ได้ : D+";
        } elseif ($score>=60 and $score <=64) {
            echo "เกรดที่ได้ : C";
        } elseif ($score>=65 and $score <=69) {
            echo "เกรดที่ได้ : C+";
        } elseif ($score>=70 and $score <=74) {
            echo "เกรดที่ได้ : B";
        } elseif ($score>=75 and $score <=79) {
            echo "เกรดที่ได้ : B+";
        } else {
            echo "เกรดที่ได้ : A";
        } 


        ?>
    </body>
    
</html>