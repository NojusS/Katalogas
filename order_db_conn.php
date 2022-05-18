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
    $vardas = $_REQUEST['firstname'];
    $pavarde = $_REQUEST['lastname'];
    $email = $_REQUEST['email'];
    $tel = $_REQUEST['phone'];
    $baldas = $_REQUEST['baldas'];
    $miestas = $_REQUEST['miestas'];
    $gatve = $_REQUEST['gatve'];
    $namoNumeris = $_REQUEST['namoNumeris'];
    $butoNumeris = $_REQUEST['butoNumeris'];
    $pastabos = $_REQUEST['pastabos'];

    $sql = "INSERT INTO orders VALUES ('$id','$vardas','$pavarde','$email','$tel','$baldas','$miestas','$gatve','$namoNumeris','$butoNumeris','$pastabos', NOW())";

    if(mysqli_query($connection, $sql)) {
        echo '<script>alert("Uzsakymas sekmingai pateiktas")</script>';
        header("Location: ./index.php");

    } else {
        echo "Kazkas nepavyko pabandykite dar karta, arba susisiekite su musu administracija info@nojausbaldai.lt $sql. " .mysqli_error($connection);
    }

    mysqli_close($connection);

?>