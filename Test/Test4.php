<!DOCTYPE html>
<html>
    <head>
        <title>Format</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="mystyle.css">
    </head>
    <body>
    <form action="Test4.php" method="POST">
        มิลลิวินาที :<input type = "Integer" name="num"><br><br>
        <input type="submit" value="คำนวน"><br><br>
        </form>

        <?php
        @ini_set('display_errors', '0');
        $millisec = $_POST['num'];
        $sec = $millisec/1000;
        $min = $millisec/60000;
        $hour = $millisec/3600000;
        $day = $millisec/86400000;
        $month = $millisec/2628000000;
        $year = $millisec/31536000000;
        echo $millisec;
        echo " มิลลิวินาที";
        echo "<br>";
        echo $millisec;
        echo " มิลลิวินาที";
        echo " = ";
        echo $sec;
        echo " วินาที";
        echo "<br>";
        echo $millisec;
        echo " มิลลิวินาที";
        echo " = ";
        echo $min;
        echo " นาที";
        echo "<br>";
        echo $millisec;
        echo " มิลลิวินาที";
        echo " = ";
        echo $hour;
        echo " ชั่วโมง";
        echo "<br>";
        echo $millisec;
        echo " มิลลิวินาที";
        echo " = ";
        echo $day;
        echo " วัน";
        echo "<br>";
        echo $millisec;
        echo " มิลลิวินาที";
        echo " = ";
        echo $month;
        echo " เดือน";
        echo "<br>";
        echo $millisec;
        echo " มิลลิวินาที";
        echo " = ";
        echo $year;
        echo " ปี";
        ?>
    </body>
    
</html>