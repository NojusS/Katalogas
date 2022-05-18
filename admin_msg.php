<?php

include "db_conn.php";

$sname = "localhost";
$uname = "root";
$pass = "";
$db_name = "bakis";

$conn = mysqli_connect($sname, $uname, $pass, $db_name);

if(!$conn) {
    echo "Prisijungti nepavyko";
}

$sql = "select * from contacts";
$result = mysqli_query($conn,$sql);

?>




<html>

<head>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="./images/favicon.png">
</head>

    <body class="listing">
        <h2 class="">Sveiki administratoriau</h2>
        <p>Žemiau pateiktos visos klientų žinutės</p>
        <a href="./admin_page.php">Grįžti į pagrindinį puslapį</a>
        <table
         id = "listas"
         width="100%"
         border="3" 
         cellspacing="15" 
         cellpadding= "15">
            <tr>
                <td>ID</td>
                <td>Vardas</td>
                <td>Pavarde</td>
                <td>El.paštas</td>
                <td>Žinutė</td>
                <td colspan = "2">Veiksmai</td>
            </tr>
            <?php

while ($row = mysqli_fetch_object($result)) {
    ?>

            <tr>
                <td><?php echo $row->id; ?></td>
                <td><?php echo $row->vardas; ?></td>
                <td><?php echo $row->pavarde; ?></td>
                <td><?php echo $row->email; ?></td>
                <td><?php echo $row->zinute; ?></td>
                <td> <a href="mailto:<?php echo $row->email;?>" class="btn btn-success">Susisiekti</a>
            </tr>

    <?php
}

?>
        </table>

    </body>
</html>