<?php 

session_start();
include "db_conn.php";

if(isset($_POST['username']) && isset($_POST['password'])) {

    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return data;
    }
}

$uname = ($_POST['uname']);
$pass = ($_POST['password']);

if(empty($uname)) {
    header("Location: index.php?error=Prisijungimo varda ivesti butina");
    exit();
}

else if(empty($pass)) {
    header("Location: index.php?error=Slaptazodi ivesti butina");
    exit();
}

$sql = "SELECT * FROM admin WHERE prisijungimo_vardas='$uname' AND slaptazodis= '$pass'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    if($row['prisijungimo_vardas'] === $uname && $row['slaptazodis'] === $pass) {
        echo "Sekmingai prisijungete";
        $_SESSION['prisijungimo_vardas'] = $row['prisijungimo_vardas'];
        $_SESSION['id'] = $row['id'];
        header("Location: admin_page.php");
        exit();
    }
    else {
        header("Location: index.php?error=Neteisingas prisijungimo vardas arba slaptazodis");
        exit();
    }
} else {
    header("Location: index.php");
}