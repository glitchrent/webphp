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
        $cars = array("Volvo","BMW","Toyota");
        $cars2[0]="Volvo";
        $cars2[1]="BMW";
        $cars2[2]="Toyota";
        $cars2[3]="Toyota";
        $cars2[4]="Toyota";
        echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . "<br>";
        echo "I like " . $cars2[0] . ", " . $cars2[1] . " and " . $cars2[2] . "<br>";
        for($i=0;$i<3;$i++){
            echo $cars2[$i] ."<br>";
        for($i=0;$i<count($cars2);$i++){
            echo $cars2[$i] ."<br>";
        }
    }
        $cars = array (
        array("Volvo",22,18),
        array("BMW",15,13),
        array("Saab",5,2),
        array("Land Rover",17,15),
        );

        echo $cars[0][0]." In stocl: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
        echo $cars[1][0]." In stocl: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
        echo $cars[2][0]." In stocl: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
        echo $cars[3][0]." In stocl: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";
        for($i=0;$i<4;$i++){
            for($j=0;$j<3;$j++){
                echo $cars[$i][$j] ." ";
            }
            echo "<br>";
        }



        ?>
    </body>
</html>