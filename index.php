<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Medni ducan</title>
  <meta name="keywords" content="med medni ducan smjese pcele">
  <meta name="description" content="Medni ducan je radnja smjestena u Visokom. U ponudi imamo raznih vrsta meda, mednih smjesa i proizvoda.">

  <link rel="stylesheet" href="assets/fonts/flat-icon/flaticon.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="icon" type="image/png" href="assets/images/favicon%20(3).ico">
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700&family=Montserrat:wght@400;500;700&family=Sacramento&display=swap" rel="stylesheet">
</head>
<body>
<div id="content-wrapper">
  <header class="header header--bg">
    <div class="container">

        <?php
        include ('assets/includes/header.php');
        ?>


      <div class="header__content text-center">
        <span class="header__content__block">Dobrodošli</span>
        <h1 class="header__content__title"></h1>
        <ul class="header__content__sub-title">
          <li>MED <span class="padding">&#45;</span></li>
          <li>SMJESE <span class="padding">&#45;</span></li>
          <li>MEDNI PROIZVODI</li>
        </ul>
        <a class="header__button" href="shop.php">Kupite online</a>
      </div>
      <div class="social-icon pull-right">
        <ul>
          <li><a href="https://www.facebook.com/medniducanvisoko/"><i class="flaticon-facebook-letter-logo"></i></a></li>
        </ul>
      </div>
    </div>
  </header>

  <section class="about">
    <div class="container about__container--narrow">
      <div class="page-section">
        <h2 class="page-section__title">Ko smo mi?</h2>
          <img class="page-section__title-style" src="assets/images/title-style.png" alt="">
          <p class="page-section__paragraph">Upoznajte nas i nas rad </p>
          <div class="row gutters-80">
            <div class="col-md-4">
              <div class="about__image">
                <img src="assets/images/profilrr.jpg" alt="">
              </div>
            </div>
            <div class="col-md-8 about__content">
              <p class="about__description">Medena kraljica nastala je sa željom da pokažem kakvo prirodno bogatstvo imamo u BiH. Na našem području nastaje jedan od najcjenjenijih i najkvalitetnijh medova u Evropi. </p>
              <p class="about__description">Moje pčelice putuju po našoj predivnoj zemlji, a sve u namjeri da obezbijedimo med sa različitih područja i različitih pašnjaka. Od Posavine do Hercegovine obilazimo udaljena i najljepša mjesta, odmaknuta od različitih zagađivača. </p>
              <p class="about__description">Dobro došli u moju Mednu priču za koju se nadam da će se i Vama dopasti i da ćemo skupa uživati u savršenim pčelinjim proizvodima, a trudit ću se da Vam u blogu pokažem i sva mjesta koja imam sreću da obilazim sa svojim vrijednim ljubimicama. </p>

            </div>
          </div>
      </div>
    </div>
  </section>

  <section class="skill skill--bg">
    <div class="container skill__container--narrow">
      <div class="page-section">
        <h2 class="page-section__title page-section__title--white">Proizvodi</h2>
        <img class="page-section__title-style" src="assets/images/title-style-white.png" alt="">
        <p class="page-section__paragraph page-section__paragraph--white"> </p>
        <div class="row gutters-60">
          <div class="col-md-4">
            <div class="thumbnail text-center">
              <img src="assets/images/med.jpg" alt="">
              <h2 class="skill__single-part__title">Med</h2>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width:100%;background-color:#FFAC1B;">
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="thumbnail text-center">
              <img src="assets/images/smjese.jpg" alt="">
              <h2 class="skill__single-part__title">Smjese</h2>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width:100%;background-color:#C99AFF;">
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="thumbnail text-center">
              <img src="assets/images/proizvodi.jpg" alt="">
              <h2 class="skill__single-part__title">Proizvodi od meda</h2>
              <div class="progress">
                <div class="progress-bar" role="progressbar" style="width:100%;background-color: #7FB7FA;">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="portfolio">
    <div class="container">
      <div class="page-section">
        <h2 class="page-section__title">Nas izbor</h2>
        <img class="page-section__title-style" src="assets/images/title-style.png" alt="">
        <div class="row gutters-40">
          <div class="col-md-4">
            <div class="portfolio__single-section" data-order="1">
              <img class="portfolio__single-section__image img-responsive" src="assets/images/ljekobilje.jpg" alt="">
              <div class="portfolio__single-section__overlay">
                <div class="overlay-content">
                  <h4>LjEKOBILJE</h4>
                  <p>Prirodni med</p>
                </div>
                <div class="portfolio__single-section__search-icon">
                  <a href="#"><img src="assets/images/search-icon.png" alt=""></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="portfolio__single-section " data-order="2">
              <img class="portfolio__single-section__image img-responsive" src="assets/images/malina.jpg" alt="">
              <div class="portfolio__single-section__overlay">
                <div class="overlay-content">
                  <h4>MALINA I MED</h4>
                  <p>Prirodni med mijesan sa malinama</p>
                </div>
                <div class="portfolio__single-section__search-icon">
                  <a href="#"><img src="assets/images/search-icon.png" alt=""></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="portfolio__single-section " data-order="3">
              <img class="portfolio__single-section__image img-responsive" src="assets/images/proizvodi.jpg" alt="">
              <div class="portfolio__single-section__overlay">
                <div class="overlay-content">
                  <h4>SVIJECA</h4>
                  <p>Svijeca sa prirodnim voskom</p>
                </div>
                <div class="portfolio__single-section__search-icon">
                  <a href="#"><img src="assets/images/search-icon.png" alt=""></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row gutters-40">
          <div class="col-md-4">
            <div class="portfolio__single-section " data-order="4">
              <img class="portfolio__single-section__image img-responsive" src="assets/images/med2.jpg" alt="">
              <div class="portfolio__single-section__overlay">
                <div class="overlay-content">
                  <h4>MED U SACU</h4>
                  <p>Med u sacu</p>
                </div>
                <div class="portfolio__single-section__search-icon">
                  <a href="#"><img src="assets/images/search-icon.png" alt=""></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="portfolio__single-section " data-order="5">
              <img class="portfolio__single-section__image img-responsive" src="assets/images/cokomed.jpg" alt="">
              <div class="portfolio__single-section__overlay">
                <div class="overlay-content">
                  <h4>COKOMED</h4>
                  <p>Med i cokolada</p>
                </div>
                <div class="portfolio__single-section__search-icon">
                  <a href="#"><img src="assets/images/search-icon.png" alt=""></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="portfolio__single-section " data-order="6">
              <img class="portfolio__single-section__image img-responsive" src="assets/images/med1.jpg" alt="">
              <div class="portfolio__single-section__overlay">
                <div class="overlay-content">
                  <h4>MED U SACU</h4>
                  <p>Prirodan med</p>
                </div>
                <div class="portfolio__single-section__search-icon">
                  <a href="#"><img src="assets/images/search-icon.png" alt=""></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="brand-logo brand-logo--bg">
    <div class="container">
      <div class="row">
        <div class="brand-logo__wrapper">

        </div>
      </div>
    </div>
  </section>


    <?php
    include ('assets/includes/footer.php');
    ?>

</div>
  <script src="assets/jquery/jquery-3.2.1.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>  