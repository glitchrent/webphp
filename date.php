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
        date_default_timezone_get("Asia/Bangkok");
        $time = date("d/m/Y");
        echo "วันนี้วันที่ ".$time."<br>";
        echo "เวลา ".date("H:i.s");
        echo "<br>";
        ?>
    </body>
    
</html>