<?php

include "db_conn.php";

if(isset($_GET['id'])) {
    $sql = "delete from orders where id = '".$_GET['id']."'";
    $result = mysqli_query($sql);
}

$sname = "localhost";
$uname = "root";
$pass = "";
$db_name = "bakis";

$conn = mysqli_connect($sname, $uname, $pass, $db_name);

if(!$conn) {
    echo "Prisijungti nepavyko";
}

$sql = "select * from orders";
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
        <p>Žemiau pateikti visi užsakymai</p>
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
                <td>Telefono numeris</td>
                <td>Baldas</td>
                <td>Miestas</td>
                <td>Gatvė</td>
                <td>Namo Numeris</td>
                <td>Buto Numeris</td>
                <td>Pastabos</td>
                <td>Užsakymo data</td>
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
                <td><?php echo $row->tel; ?></td>
                <td><?php echo $row->baldas; ?></td>
                <td><?php echo $row->miestas; ?></td>
                <td><?php echo $row->gatve; ?></td>
                <td><?php echo $row->namo_numeris; ?></td>
                <td><?php echo $row->buto_numeris; ?></td>
                <td><?php echo $row->pastabos; ?></td>
                <td><?php echo $row->data; ?></td>
                <td> <a href="developers.php?delete=<?php echo $row->id;?>" class="btn btn-danger">Istrinti</a>
            </tr>

    <?php
}

?>
        </table>

        <script>
            function deleteRow(r) {
                var i = r.parentNode.parentNode.rowIndex;
                document.getElementById("listas").deleteRow(i);
            }
        </script>

    </body>
</html>