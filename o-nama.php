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
                <span class="header__content__block">O nama</span>
                <h1 class="header__content__title"></h1>
                <ul class="header__content__sub-title">
                    <li>Zanima Vas nas rad?</li>
                </ul>
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
                    <div class="col-md-8 about__content" style="padding-top: 0">
                        <p class="about__description" style="text-align: justify">Medena kraljica nastala je sa željom da pokažem kakvo prirodno bogatstvo imamo u BiH. Na našem području nastaje jedan od najcjenjenijih i najkvalitetnijh medova u Evropi.
                            Ljubav prema pčelama, njihovoj savršenoj organizaciji i preukusnim i zdravim proizvodima, bila je pokretač da završim obuku za pčelarku, te sam imala veliku sreću i zadovoljstvo da praktičan dio znanja dobijem od mog mentora rahmetli Osmana Hašimovića, zasigurno jednog od najboljih i najpriznatijih pčelara u srednjoj Bosni zadnjih nekoliko decenija. Osim znanja u radu sa pčelama, prenio mi je veliku ljubav prema pčelama ali i naučio da ih moram poštovati ako želim da dobijem kvalitetne proizvode.
                            Naše proizvode nudimo u Mednom dućanu u Visokom, a imate mogućnost dostave na adresu online narudžbom.

                            Moje pčelice putuju po našoj predivnoj zemlji, a sve u namjeri da obezbijedimo med sa različitih područja i različitih pašnjaka. Od Posavine do Hercegovine obilazimo udaljena i najljepša mjesta, odmaknuta od različitih zagađivača.

                            Pored proizvoda koje možete vidjeti na stranici, trudim se pratiti novitete i praviti nove kombinacije i okuse, a sve sa željom da svojim kupcima ponudim najbolje od pčelinjih proizvoda, da poboljšamo zdravlje svih nas i da se što je moguće više okrenemo prirodnim proizvodima koji su dobri za naš imunitet.

                            Dobro došli u moju Mednu priču za koju se nadam da će se i Vama dopasti i da ćemo skupa uživati u savršenim pčelinjim proizvodima, a trudit ću se da Vam u blogu pokažem i sva mjesta koja imam sreću da obilazim sa svojim vrijednim ljubimicama.
                            <br><br>Sabina Krivdić
                        </p>
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