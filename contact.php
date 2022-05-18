<head>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="./images/favicon.png">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <style>

    .kontaktu-forma {
      padding: 15px 0;
      display: flex;
      flex-direction: column;
    }

    .submit {
      background: #9e503c;
      border: none;
      color: white;
      padding: 5px 0;
    }

    .submit:hover {
      background: #7e4030;
    }

    label {
      padding-top: 10px;
      margin-bottom: 0;
    }

  </style>


</head>

<?php include_once('header.php') ?>


<body>

<div class="contact container">
  <form class="kontaktu-forma" action="./contact_db_conn.php">
    <label for="fname">Vardas</label>
    <input required type="text" id="fname" name="vardas" placeholder=" Vardas*">

    <label for="lname">Pavardė</label>
    <input type="text" id="lname" name="pavarde" placeholder=" Pavardė">

    <label for="email">El. paštas</label>
    <input required type="email" id="email" name="email" placeholder="El. paštas*">

    <label for="subject">Žinutė</label>
    <textarea required id="subject" name="zinute" placeholder="Jūsų žinutė...*" style="height:200px"></textarea>

    <input class="submit" type="submit" value="Siųsti žinutę">
  </form>
</div>  

</body>


<?php include_once('footer.php') ?>


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/79542b29ff.js" crossorigin="anonymous"></script>