<!DOCTYPE html>
<html>
    <head>
        <title>Format</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="mystyle.css">
    </head>
    <body>
    <table border="0">
        <?php
            for ($a=1; $a<=12; $a++){
                echo "<tr>";
                for ($b=2; $b<=6; $b++){
                echo "<td>";
                echo $b ;
                echo "&nbsp;";
                echo " x ";
                echo "&nbsp;";
                echo 0+$a ;
                echo "&nbsp;";
                echo " = ";
                echo "&nbsp;";
                echo $a*$b ;
                echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                echo "</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>
<br>
    <table border="0">
        <?php
            for ($a=1; $a<=12; $a++){
                echo "<tr>";
                for ($b=2; $b<=6; $b++){
                echo "<td>";
                echo 8-$b ;
                echo "&nbsp;";
                echo " x ";
                echo "&nbsp;";
                echo 0+$a ;
                echo "&nbsp;";
                echo " = ";
                echo "&nbsp;";
                echo (8-$b)*$a ;
                echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                echo "</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>
    </body>
    
</html>