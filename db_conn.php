<?php

$sname = "localhost";
$uname = "root";
$pass = "";
$db_name = "bakis";

$conn = mysqli_connect($sname, $uname, $pass, $db_name);

if(!$conn) {
    echo "Prisijungti nepavyko";
}

?>