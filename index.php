
<head>
    <link rel="stylesheet" href="style.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="./images/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<?php 

include_once('header.php');

?>
    

    <section class="banner">
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="./images/coveris.jpg" alt="Minkštas kampas Karina U">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="./images/banner2.png" alt="Minkštas kampas Valentino U">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
        </div>
    </section>
    <section class="contentas">
        <div class="container">
            <div class="col-lg-12 col-lg-reset col-md-12 col-md-reset col-sm-12 col-sm-reset col-xs-12 col-xs-reset">
                <div class="section-title">
                    <h3 class="mod-title">
                        <span>Prekių katalogas</span>
                    </h3>
                </div>
                <div class="mod-content">
                    <div class="group">
                        <div class="product">
                            <div class="row">
                            <div class="product-block col-lg-2 col-lg-reset col-md-3 col-md-reset col-sm-3 col-sm-reset col-xs-6 col-xs-reset">
                                <div class="spacer">
                                    <div class="spacer-img">
                                        <div class="ProductImage">
                                            <a href="./minksti.php" title="Minkšti baldai">
                                                <img src="./images/minksti-baldai.jpg" alt="Minkšti baldai" class="feuturedProductImage">
                                            </a>
                                        </div>
                                    </div>
                                    <!-- <div class="clear">&nbsp;</div> -->
                                    <h3>
                                        <a href="./minksti.php">Mikšti baldai</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="product-block col-lg-2 col-lg-reset col-md-3 col-md-reset col-sm-3 col-sm-reset col-xs-6 col-xs-reset">
                                <div class="spacer">
                                    <div class="spacer-img">
                                        <div class="ProductImage">
                                            <a href="/" title="Kietieji svetainės baldai">
                                                <img src="./images/svetaine.jpg" alt="Minkšti baldai" class="feuturedProductImage">
                                            </a>
                                        </div>
                                    </div>
                                    <!-- <div class="clear">&nbsp;</div> -->
                                    <h3>
                                        <a href="/">Kietieji svetainės baldai</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="product-block col-lg-2 col-lg-reset col-md-3 col-md-reset col-sm-3 col-sm-reset col-xs-6 col-xs-reset">
                                <div class="spacer">
                                    <div class="spacer-img">
                                        <div class="ProductImage">
                                            <a href="vaikukambario.php" title="Vaikų kambarys">
                                                <img src="./images/vaiku.jpg" alt="Minkšti baldai" class="feuturedProductImage">
                                            </a>
                                        </div>
                                    </div>
                                    <!-- <div class="clear">&nbsp;</div> -->
                                    <h3>
                                        <a href="/">Vaikų kambarys</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="product-block col-lg-2 col-lg-reset col-md-3 col-md-reset col-sm-3 col-sm-reset col-xs-6 col-xs-reset">
                                <div class="spacer">
                                    <div class="spacer-img">
                                        <div class="ProductImage">
                                            <a href="/" title="Klasikiniai baldai">
                                                <img src="./images/klasikiniai.jpg" alt="Minkšti baldai" class="feuturedProductImage">
                                            </a>
                                        </div>
                                    </div>
                                    <!-- <div class="clear">&nbsp;</div> -->
                                    <h3>
                                        <a href="/">Klasikiniai baldai</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="product-block col-lg-2 col-lg-reset col-md-3 col-md-reset col-sm-3 col-sm-reset col-xs-6 col-xs-reset">
                                <div class="spacer">
                                    <div class="spacer-img">
                                        <div class="ProductImage">
                                            <a href="/" title="Miegamojo baldai">
                                                <img src="./images/miegamojo.jpg" alt="Minkšti baldai" class="feuturedProductImage">
                                            </a>
                                        </div>
                                    </div>
                                    <!-- <div class="clear">&nbsp;</div> -->
                                    <h3>
                                        <a href="/">Miegamojo</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="product-block col-lg-2 col-lg-reset col-md-3 col-md-reset col-sm-3 col-sm-reset col-xs-6 col-xs-reset">
                                <div class="spacer">
                                    <div class="spacer-img">
                                        <div class="ProductImage">
                                            <a href="/" title="Virtuvės baldai">
                                                <img src="./images/virtuves.jpg" alt="Minkšti baldai" class="feuturedProductImage">
                                            </a>
                                        </div>
                                    </div>
                                    <!-- <div class="clear">&nbsp;</div> -->
                                    <h3>
                                        <a href="/">Virtuvės baldai</a>
                                    </h3>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="naujienos">
                    <div class="section-title">
                        <h3 class="mod-title">
                            <span>Naujienos</span>
                        </h3>
                    </div>
                    <div class="mod-content">
                        <div class="group">
                            <div class="product">
                                <div class="row">
                                <div class="vm_block col-lg-3 col-lg-reset col-md-3 col-md-reset col-sm-3 col-sm-reset col-xs-12 col-xs-reset">
                                    <div class="spacer">
                                        <div class="spacer-img">
                                            <div class="mProductImage">
                                                <a href="./single_product.php" title="Kampas VALENTINO L">
                                                    <img src="./images/baldai/valentinoL.jpg" alt="Valentino L">
                                                </a>
                                            </div>
                                        </div>
                                        <h3>
                                            <a href="./single_product.php">Kampas VALENTINO L</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="vm_block col-lg-3 col-lg-reset col-md-3 col-md-reset col-sm-3 col-sm-reset col-xs-12 col-xs-reset">
                                    <div class="spacer">
                                        <div class="spacer-img">
                                            <div class="mProductImage">
                                                <a href="" title="Sofa - lova MONACO">
                                                    <img src="./images/baldai/monaco.jpg" alt="Sofa - lova MONACO">
                                                </a>
                                            </div>
                                        </div>
                                        <h3>
                                            <a href="/">Sofa - lova MONACO</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="vm_block col-lg-3 col-lg-reset col-md-3 col-md-reset col-sm-3 col-sm-reset col-xs-12 col-xs-reset">
                                    <div class="spacer">
                                        <div class="spacer-img">
                                            <div class="mProductImage">
                                                <a href="" title="Kampas RALF">
                                                    <img src="./images/baldai/ralf.jpg" alt="Kampas RALF">
                                                </a>
                                            </div>
                                        </div>
                                        <h3>
                                            <a href="/">Kampas RALF</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="vm_block col-lg-3 col-lg-reset col-md-3 col-md-reset col-sm-3 col-sm-reset col-xs-12 col-xs-reset">
                                    <div class="spacer">
                                        <div class="spacer-img">
                                            <div class="mProductImage">
                                                <a href="" title="Kampas GARRY">
                                                    <img src="./images/baldai/garry.jpg" alt="Kampas GARRY">
                                                </a>
                                            </div>
                                        </div>
                                        <h3>
                                            <a href="/">Kampas GARRY</a>
                                        </h3>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="perkamiausios-prekes">
                    <div class="section-title">
                        <h3 class="mod-title">
                            <span>Perkamiausios prekės</span>
                        </h3>
                    </div>
                    <div class="mod-content">
                        <div class="group">
                            <div class="product">
                                <div class="row">
                                <div class="vm_block col-lg-3 col-lg-reset col-md-3 col-md-reset col-sm-3 col-sm-reset col-xs-12 col-xs-reset">
                                    <div class="spacer">
                                        <div class="spacer-img">
                                            <div class="mProductImage" style="display: inline;">
                                                <a href="/" title="Sofa - lova SOFIA">
                                                    <img 
                                                    class="feuturesProductImage" loading="lazy" src="./images/baldai/sofia.jpg" alt="Sofa - lova SOFIA">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <h3>
                                            <a href="/">Sofa - lova SOFIA</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="vm_block col-lg-3 col-lg-reset col-md-3 col-md-reset col-sm-3 col-sm-reset col-xs-12 col-xs-reset">
                                    <div class="spacer">
                                        <div class="spacer-img">
                                            <div class="mProductImage" style="display: inline;">
                                                <a href="/" title="Kampas VALENTINO">
                                                    <img 
                                                    class="feuturesProductImage" loading="lazy" src="./images/baldai/valentino.jpg" alt="Kampas VALENTINO">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <h3>
                                            <a href="/">Kampas VALENTINO</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="vm_block col-lg-3 col-lg-reset col-md-3 col-md-reset col-sm-3 col-sm-reset col-xs-12 col-xs-reset">
                                    <div class="spacer">
                                        <div class="spacer-img">
                                            <div class="mProductImage" style="display: inline;">
                                                <a href="/" title="DORIAN">
                                                    <img 
                                                    class="feuturesProductImage" loading="lazy" src="./images/baldai/dorian.jpg" alt="DORIAN">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <h3>
                                            <a href="/">DORIAN</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="vm_block col-lg-3 col-lg-reset col-md-3 col-md-reset col-sm-3 col-sm-reset col-xs-12 col-xs-reset">
                                    <div class="spacer">
                                        <div class="spacer-img">
                                            <div class="mProductImage" style="display: inline;">
                                                <a href="/" title="Kampas Bergamo U">
                                                    <img 
                                                    class="feuturesProductImage" loading="lazy" src="./images/baldai/bergamo u.jpg" alt="Kampas Bergamo U">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <h3>
                                            <a href="/">Kampas Bergamo U</a>
                                        </h3>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="product">
                                <div class="row">
                                <div class="vm_block col-lg-3 col-lg-reset col-md-3 col-md-reset col-sm-3 col-sm-reset col-xs-12 col-xs-reset">
                                    <div class="spacer">
                                        <div class="spacer-img">
                                            <div class="mProductImage" style="display: inline;">
                                                <a href="/" title="Sofa - lova VEGAS">
                                                    <img 
                                                    class="feuturesProductImage" loading="lazy" src="./images/baldai/vegas.jpg" alt="Sofa - lova VEGAS">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <h3>
                                            <a href="/">Sofa - lova VEGAS</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="vm_block col-lg-3 col-lg-reset col-md-3 col-md-reset col-sm-3 col-sm-reset col-xs-12 col-xs-reset">
                                    <div class="spacer">
                                        <div class="spacer-img">
                                            <div class="mProductImage" style="display: inline;">
                                                <a href="/" title="Komplektas TANGO">
                                                    <img 
                                                    class="feuturesProductImage" loading="lazy" src="./images/baldai/tango.jpg" alt="Komplektas TANGO">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <h3>
                                            <a href="/">Komplektas TANGO</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="vm_block col-lg-3 col-lg-reset col-md-3 col-md-reset col-sm-3 col-sm-reset col-xs-12 col-xs-reset">
                                    <div class="spacer">
                                        <div class="spacer-img">
                                            <div class="mProductImage" style="display: inline;">
                                                <a href="/" title="Kampas SEMPRE">
                                                    <img 
                                                    class="feuturesProductImage" loading="lazy" src="./images/baldai/sempre.jpg" alt="Kampas SEMPRE">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <h3>
                                            <a href="/">Kampas SEMPRE</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="vm_block col-lg-3 col-lg-reset col-md-3 col-md-reset col-sm-3 col-sm-reset col-xs-12 col-xs-reset">
                                    <div class="spacer">
                                        <div class="spacer-img">
                                            <div class="mProductImage" style="display: inline;">
                                                <a href="/" title="Kampas Karina U">
                                                    <img 
                                                    class="feuturesProductImage" loading="lazy" src="./images/baldai/karina-u.jpg" alt="Kampas Karina U">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <h3>
                                            <a href="/">Kampas Karina U</a>
                                        </h3>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="rekomenduojamos">
        <div class="container">
            <div class="col-lg-12 col-lg-reset col-md-12 col-md-reset col-sm-12 col-sm-reset col-xs-12 col-xs-reset">
                <div class="category-view">
                    <h1 class="category-name"></h1>
                </div>
                <div class="browse-view">
                    <div class="feutured-view">
                        <h4>Rekomenduojamos prekės</h4>
                        <div class="row">
                            <div class="product vm_block col-lg-3 col-lg-reset col-md-3 col-md-reset col-sm-3 col-sm-reset col-xs-12 col-xs-reset">
                                <div class="spacer  product-container">
                                    <div class="product-media-container spacer-img">
                                        <a href="/" title="Komplektas REGLAINER">
                                            <img src="./images/baldai/komplektasREGLAINER.jpg" alt="Komplektas Reglainer" class="browseProductImage" loading="lazy">
                                        </a>
                                    </div>
                                    <div class="product-description-container">
                                        <h2>
                                            <a href="/">Komplektas REGLAINER</a>
                                        </h2>
                                    </div>
                                    <div class="product-price">
                                        <span class="Price">
                                            2720 €
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="product vm_block col-lg-3 col-lg-reset col-md-3 col-md-reset col-sm-3 col-sm-reset col-xs-12 col-xs-reset">
                                <div class="spacer product-container">
                                    <div class="product-media-container spacer-img">
                                        <a href="/" title="Kampas Karina U">
                                            <img src="./images/baldai/karina-u.jpg" alt="Kampas KARINA U" class="browseProductImage" loading="lazy">
                                        </a>
                                    </div>
                                    <div class="product-description-container">
                                        <h2>
                                            <a href="/">Kampas KARINA U</a>
                                        </h2>
                                    </div>
                                    <div class="product-price">
                                        <span class="Price">
                                            1090 €
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="product vm_block col-lg-3 col-lg-reset col-md-3 col-md-reset col-sm-3 col-sm-reset col-xs-12 col-xs-reset">
                                <div class="spacer product-container">
                                    <div class="product-media-container spacer-img">
                                        <a href="/" title="Komplektas VALENTINO">
                                            <img src="./images/baldai/komplektasValentino.png" alt="Komplektas VALENTINO" class="browseProductImage" loading="lazy">
                                        </a>
                                    </div>
                                    <div class="product-description-container">
                                        <h2>
                                            <a href="/">Komplektas VALENTINO</a>
                                        </h2>
                                    </div>
                                    <div class="product-price">
                                        <span class="Price">
                                            1890 €
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="product vm_block col-lg-3 col-lg-reset col-md-3 col-md-reset col-sm-3 col-sm-reset col-xs-12 col-xs-reset">
                                <div class="spacer product-container">
                                    <div class="product-media-container spacer-img">
                                        <a href="/" title="Kontinentinė lova COLUMBIA">
                                            <img src="./images/baldai/columbia.jpg" alt="Kontinentinė lova COLUMBIA" class="browseProductImage" loading="lazy">
                                        </a>
                                    </div>
                                    <div class="product-description-container">
                                        <h2>
                                            <a href="/">Kontinentinė lova COLUMBIA</a>
                                        </h2>
                                    </div>
                                    <div class="product-price">
                                        <span class="Price">
                                            590 €
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="horizontal-separator"></div>
                        <div class="row">    
                            <div class="product vm_block col-lg-3 col-lg-reset col-md-3 col-md-reset col-sm-3 col-sm-reset col-xs-12 col-xs-reset">
                                <div class="spacer product-container">
                                    <div class="product-media-container spacer-img">
                                        <a href="/" title="Kampas VALENTINO">
                                            <img src="./images/baldai/kampasVALENTINA.jpg" alt="Kampas VALENTINO" class="browseProductImage" loading="lazy">
                                        </a>
                                    </div>
                                    <div class="product-description-container">
                                        <h2>
                                            <a href="/">Kampas VALENTINO</a>
                                        </h2>
                                    </div>
                                    <div class="product-price">
                                        <span class="Price">
                                            970 €
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="product vm_block col-lg-3 col-lg-reset col-md-3 col-md-reset col-sm-3 col-sm-reset col-xs-12 col-xs-reset">
                                <div class="spacer product-container">
                                    <div class="product-media-container spacer-img">
                                        <a href="/" title="Komplektas CHESTERFIELD">
                                            <img src="./images/baldai/komplektasCHESTERFIELD.jpg" alt="Komplektas CHESTERFIELD" class="browseProductImage" loading="lazy">
                                        </a>
                                    </div>
                                    <div class="product-description-container">
                                        <h2>
                                            <a href="/">Komplektas CHESTERFIELD</a>
                                        </h2>
                                    </div>
                                    <div class="product-price">
                                        <span class="Price">
                                            2970 €
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="product vm_block col-lg-3 col-lg-reset col-md-3 col-md-reset col-sm-3 col-sm-reset col-xs-12 col-xs-reset">
                                <div class="spacer product-container">
                                    <div class="product-media-container spacer-img">
                                        <a href="/" title="Stalas KEN">
                                            <img src="./images/baldai/stalasKEN.jpg" alt="Stalas KEN" class="browseProductImage" loading="lazy">
                                        </a>
                                    </div>
                                    <div class="product-description-container">
                                        <h2>
                                            <a href="/">Stalas KEN</a>
                                        </h2>
                                    </div>
                                    <div class="product-price">
                                        <span class="Price">
                                            290 €
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="product vm_block col-lg-3 col-lg-reset col-md-3 col-md-reset col-sm-3 col-sm-reset col-xs-12 col-xs-reset">
                                <div class="spacer product-container">
                                    <div class="product-media-container spacer-img">
                                        <a href="/" title="Fotelis STELLA">
                                            <img src="./images/baldai/fotelisSTELLA.jpg" alt="Fotelis STELLA" class="browseProductImage" loading="lazy">
                                        </a>
                                    </div>
                                    <div class="product-description-container">
                                        <h2>
                                            <a href="/">Fotelis STELLA</a>
                                        </h2>
                                    </div>
                                    <div class="product-price">
                                        <span class="Price">
                                            310 €
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

<?php

include_once('footer.php');

?>



    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/79542b29ff.js" crossorigin="anonymous"></script>