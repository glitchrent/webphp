<?php
$check = mysqli_connect("localhost","root","","warehouse");
if (!$check) {
die("Fail" . mysqli_connect_error());
}else {
    echo "Success Connect ♥ <br><br>";
} mysqli_set_charset($check, "utf8");
?>