<head>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="./images/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<?php include_once('header.php') ?>


<body>
    <div class="order">
        <div class="container">

        <h3>Užsakymo pateikimo forma</h3>

        <form action="./order_db_conn.php" method="post" >
            <label for="fname">Vardas</label>
            <input required class="vardas" type="text" id="fname" name="firstname" placeholder="Jūsų vardas..">

            <label for="lname">Pavardė</label>
            <input required class="pavarde" type="text" id="lname" name="lastname" placeholder="Jūsų pavardė.."><br>

            <label for="email">El. paštas</label>
            <input required class="email" type="email" id="email" name="email" placeholder="Jūsų el.paštas.."><br>

            <label for="phone">Telefono numeris</label>
            <input required type="tel" id="phone" name="phone" placeholder="+370...." >

            <label for="baldas">Baldas</label>
            <select required id="baldas" name="baldas">
            <option value="KampasValentino VLT358969">Kampas VALENTINO VLT358969</option>
            <option value="Sofa - lova MONACO">Sofa - lova MONACO</option>
            <option value="KampasGarry">Kampas GARRY</option>
            </select>

            <label for="miestas">Miestas</label>
            <select required name="miestas" id="miestas">
                <option value="Vilnius">Vilnius</option>
                <option value="Kaunas">Kaunas</option>
                <option value="Šiauliai">Šiauliai</option>
                <option value="Klaipėda">Klaipėda</option>
            </select>

            <label for="gatve">Gatvė</label>
            <input required type="text" name="gatve" id="gatve" placeholder="Gatvė">

            <label for="namoNumeris">Namo Numeris</label>
            <input required type="number" name="namoNumeris" id="namoNumeris" placeholder="Namo numeris">

            <label for="butoNumeris">Buto Numeris</label>
            <input required type="number" id="butoNumeris" name="butoNumeris" placeholder="Buto numeris"><br>

            <label for="pastabos">Pastabos</label>
            <textarea id="pastabos" name="pastabos" placeholder="Pastabos užsakymui.." style="height:200px"></textarea>

            <input class="patvirtintiUzsakyma" type="submit" value="Pateikti užklausą">
        </form>
        </div>
    </div>

</body>


<?php include_once('footer.php') ?>


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/79542b29ff.js" crossorigin="anonymous"></script>