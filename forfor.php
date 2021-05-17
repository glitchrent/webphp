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
            for ($i=2; $i<=5; $i++){
                echo "รอบใหญ่ที่ $i <br>";
                for ($j=1; $j<3; $j++){
                    echo " รอบเล็กที่ $j ($i*$j) ,";
                }   // End for รอบเล็ก
                echo "<br><br>";
            } //End for รอบใหญ่
        ?>
    </body>
    
</html>