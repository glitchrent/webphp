<!DOCTYPE html>
<html>
    <head>
        <title>Format</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="mystyle.css">
    </head>
    <body>
    <form action="gradecalform.php" method="POST">
        score :<input type = "Integer" name="score"><br><br>
        <input type="submit" value="Cal"><br><br>
        </form>

        <Table>
        <?php
        @ini_set('display_errors', '0');
        $score = $_POST['score'];

        if($score <= 49) {
            $grade = "เกรดที่ได้ : F";
        }elseif ($score <= 55) {
            $grade = "เกรดที่ได้ : D";

        }elseif ($score <= 59) {
            $grade = "เกรดที่ได้ : D+";

        }elseif ($score <= 65) {
            $grade = "เกรดที่ได้ : C";

        }elseif ($score <= 69) {
            $grade = "เกรดที่ได้ : C+";

        }elseif ($score <= 75) {
            $grade = "เกรดที่ได้ : B";

        }elseif ($score <= 79) {
            $grade = "เกรดที่ได้ : B+";

        }elseif ($score >= 80) {
            $grade = "เกรดที่ได้ : A";

        }else{
            $grade = "idk";
        }
        echo $grade;
        
        echo "<br/>";

        echo "<tr>";
        ?>

        
    </body>
    
</html>