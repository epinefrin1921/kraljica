<?php

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
      <nav class="navbar">

        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a style="font-size: 50px" class="navbar-brand" href="#">Medni dućan</a>
        </div>

        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="#">NASLOVNA</a></li>
            <li><a href="o-nama.php">O NAMA</a></li>
            <li><a href="shop.php">SHOP</a></li>
            <li><a href="cart.php">KOPRICA</a></li>
            <li><a href="blog.php">BLOG</a></li>
            <li><a href="kontakt.php">KONTAKT</a></li>
          </ul>
        </div>
      </nav>
      <div class="header__content text-center">
        <span class="header__content__block">Dobrodošli</span>
        <h1 class="header__content__title"></h1>
        <ul class="header__content__sub-title">
          <li>MED <span class="padding">&#45;</span></li>
          <li>SMJESE <span class="padding">&#45;</span></li>
          <li>MEDNI PROIZVODI</li>
        </ul>
        <a class="header__button" href="#">Kupite online</a>
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
              <p class="about__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
              <p class="about__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
              <p class="about__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>

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


  <footer class="footer footer--bg">
    <div class="container text-center">
      <h1 class="footer__title">Medni ducan</h1>
      <ul class="footer__contact-information">
        <li><a href="tel:5555555555"><i class="material-icons">phone</i> +387603461615</a></li>
        <li><a href="mailto:sshariar458@gmail.com"><i class="material-icons">email</i> info@s-kraljica.ba</a></li>
        <li><a href="#"><i class="material-icons">location_on</i> Čaršijska, Visoko 71300</a></li>
      </ul>
    </div>
    <hr style="border: 0;border-top: 1px solid #525B60;display:block;margin-top: 40px;">
    <div class="container text-center">
      <div class="social-icon">
        <ul>
          <li><a href="https://www.facebook.com/medniducanvisoko/"><i class="flaticon-facebook-letter-logo"></i></a></li>
        </ul>
      </div>
      <p class="footer__paragraph">Developed by <a href="https://www.linkedin.com/in/nedim-ajdin/">Nedim Ajdin</a></p>
    </div>
  </footer>
</div>
  <script src="assets/jquery/jquery-3.2.1.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>  