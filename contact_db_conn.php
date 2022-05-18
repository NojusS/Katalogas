<?php

$sname = "localhost";
$uname = "root";
$pass = "";
$db_name = "bakis";

$connection = mysqli_connect($sname, $uname, $pass, $db_name);

if(!$connection) {
    echo "Prisijungti nepavyko";
} 
    $id = random_int(0, 999);
    $vardas = $_REQUEST['vardas'];
    $pavarde = $_REQUEST['pavarde'];
    $email = $_REQUEST['email'];
    $zinute = $_REQUEST['zinute'];

    $sql = "INSERT INTO contacts VALUES ('$id','$vardas','$pavarde','$email', '$zinute')";

    if(mysqli_query($connection, $sql)) {
        echo '<script>alert("Uzsakymas sekmingai pateiktas")</script>';
        header("Location: ./index.php");

    } else {
        echo "Kazkas nepavyko pabandykite dar karta, arba susisiekite su musu administracija info@nojausbaldai.lt $sql. " .mysqli_error($connection);
    }

    mysqli_close($connection);

?>