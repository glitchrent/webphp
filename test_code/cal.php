<html>
<body>

<form action="cal.php" method="get">

<input name="num1"><br>

<input name="num2"><br>

<button type="submit">cal</button>


</form>

<?php

$num1=$_GET['num1'];
$num2=$_GET['num2'];

echo $num1+$num2;


?>

</body>
</html>