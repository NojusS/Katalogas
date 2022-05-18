<head>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="./images/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<?php include_once('header.php'); ?>

<body>
<section class="preke">
    <div class="container">
    <div class="row">
        <div class="product-media-container col-lg-7 col-lg-reset col-md-7 col-md-reset col-sm-9 col-sm-reset col-xs-12- col-xs-reset">
            <div class="main-image">
                <a href="">
                    <img src="./images/baldai/kampas.jpeg" loading="lazy" alt="Kampas VALENTINO">
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-lg-reset col-md-4 col-md-reset col-sm-3 col-sm-reset col-xs-12 col-xs-reset">
        <div class="buy-area">
            <div class="product-name">
                <h1 class="prekes-pavadinimas">Kampas VALENTINO</h1>
            </div>
            <div class="product-price">
                <span class="price">970 €</span>
            </div>
            <div class="addtocart-area">
                <form action="#" class="product" method="post" autocomplete="off" >
                    <div class="pasirinkimu-blokas">
                        <div class="pasirinkimas">
                            <span class="pasirinkimo-pavadinimo-blokas">
                                <span class="pasirinkimo-pavadinimas">
                                    <strong>Pusės pasirinkimas</strong>
                                </span>
                            </span>
                            <div class="row">
                                <div class="puse">
                                    <label for="" class="side-label">
                                        <input type="radio" class="custom-radio" title="Dešinė pusė" checked="checked">
                                        <img class="sample-img" title="Dešinė pusė" width="32px" src="./images/desine.jpg" alt="">
                                        <span class="color-tooltip">Dešinė pusė</span>
                                    </label>
                                </div>
                                <div class="puse">
                                    <label for="" class="side-label">
                                        <input type="radio" class="custom-radio" title="Kairė pusė" checked="checked">
                                        <img class="sample-img" title="Kairė pusė" width="32px" src="./images/kair.jpg" alt="">
                                        <span class="color-tooltip">Kairė pusė</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="pasirinkimas audiniai">
                            <span class="pasirinkimo-pavadinimo-blokas">
                                <span class="pasirinkimo-pavadinimas">
                                    <strong>
                                        Audinio pasirinkimas
                                    </strong>
                                </span>
                            </span>
                            <div class="row">
                                <div class="audinys">
                                    <label for="" class="side-label">
                                        <input type="radio" class="custom-radio" title="Alfa 19" checked="checked">
                                        <img src="./images/audiniai/alfa19.jpg" alt="Alfa 19" class="sample-img" title="Alfa 19">
                                        <span class="color-tooltip">Alfa 19</span>
                                    </label>
                                </div>
                                <div class="audinys">
                                    <label for="" class="side-label">
                                        <input type="radio" class="custom-radio" title="Alfa 13" checked="checked">
                                        <img src="./images/audiniai/alfa13.jpg" alt="Alfa 13" class="sample-img" title="Alfa 13">
                                        <span class="color-tooltip">Alfa 13</span>
                                    </label>
                                </div>
                                <div class="audinys">
                                    <label for="" class="side-label">
                                        <input type="radio" class="custom-radio" title="Kronos9" checked="checked">
                                        <img src="./images/audiniai/kronos9.jpg" alt="Kronos9" class="sample-img" title="Kronos9">
                                        <span class="color-tooltip">Kronos9</span>
                                    </label>
                                </div>
                                <div class="audinys">
                                    <label for="" class="side-label">
                                        <input type="radio" class="custom-radio" title="Kronos20" checked="checked">
                                        <img src="./images/audiniai/kronos20.jpg" alt="Kronos20" class="sample-img" title="Kronos20">
                                        <span class="color-tooltip">Kronos20</span>
                                    </label>
                                </div>
                                <div class="audinys">
                                    <label for="" class="side-label">
                                        <input type="radio" class="custom-radio" title="Velluto" checked="checked">
                                        <img src="./images/audiniai/velutto.jpg" alt="Velluto" class="sample-img" title="Velluto">
                                        <span class="color-tooltip">Velluto</span>
                                    </label>
                                </div>
                            </div>
                        </div>   
                    </div>
                </form>
                <div class="uzklausa">
                    <span class="prekes-kodas"> Prekės kodas :<strong> VLT358969 </strong> </span><br><br>
                    <a class="orderButton" href="./order.php">Užsakymo forma</a><br><br>
                    <span class="info">Prekės kodą įveskite užklausos langelyje</span>
                </div>
                
            </div>
        </div>
        </div>
    </div>
    </div>
    
    <table>
<br>
  <tr>
    <th></th>
    <th scope="col">Prekės </th>
    <th scope="col">informacija</th>
  </tr>

  <tr>
    <td>Aukštis </td>
    <td> ir plotis</td>
    <td>Credit</td>
  </tr>

  <tr>
    <td>2</td>
    <td>May - August</td>
    <td>Pass</td>
  </tr>
    
  <tr>
    <td>2</td>
    <td>September - December</td>
    <td>Distinction</td>
  </tr>
</table>


</section>


</body>

<?php include_once('footer.php') ?>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/79542b29ff.js" crossorigin="anonymous"></script>