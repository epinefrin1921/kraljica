<?php

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Medni ducan - kontakt</title>
    <meta name="keywords" content="med medni ducan smjese pcele">
    <meta name="description" content="Medni ducan je radnja smjestena u Visokom. U ponudi imamo raznih vrsta meda, mednih smjesa i proizvoda.">

    <link rel="stylesheet" href="assets/fonts/flat-icon/flaticon.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/kontakt.css">
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
                    <a style="font-size: 50px;" class="navbar-brand" href="#">Medni dućan</a>
                </div>

                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">NASLOVNA</a></li>
                        <li><a href="o-nama.php">O NAMA</a></li>
                        <li><a href="shop.php">SHOP</a></li>
                        <li><a href="cart.php">KOPRICA</a></li>
                        <li><a href="blog.php">BLOG</a></li>
                        <li><a href="#">KONTAKT</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <img class="decoration" src="assets/images/bee-what-the-buzz-defining-health-buzz-words-cleanworkout-34.png" alt="">
    <img class="decoration2" src="assets/images/unnamed.png" alt="">

    <section class="about">
        <div class="container about__container--narrow">
            <div class="page-section">
                <h2 class="page-section__title">Kako do nas?</h2>
                <img class="page-section__title-style" src="assets/images/title-style.png" alt="">
                <p class="page-section__paragraph">Ako imate bilo kakvo pitanje, slobodno nas kontaktirajte </p>
                <div class="row gutters-80">
                    <div class="col-md-4">
                        <div class="about__image">
                            <img src="assets/images/kontakt.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-8 about__content">
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email adresa</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Unesite email">
                                <small id="emailHelp" class="form-text text-muted">Vasa email adresa je sigurna.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Vasa poruka</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Posalji</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="mapa">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d426.7359029839528!2d18.181120380054704!3d43.985725388637626!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475f2f26a28bc1d9%3A0x4dfef91aeb12bdfd!2sMedni%20du%C4%87an!5e0!3m2!1shr!2sba!4v1596828097881!5m2!1shr!2sba" width="100%" height="450" frameborder="0" style="border:0; z-index: 3" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>

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
