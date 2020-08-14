<?php
session_start();
include ('assets/includes/db.php');

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
    <link rel="stylesheet" href="css/cart.css">
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

            <div class="header__content text-center" style="padding-top: 90px">
                <span class="header__content__block">Provjeri status narudzbe</span>
                <h1 class="header__content__title"></h1>
            </div>

        </div>
    </header>


        <section class="brand-logo brand-logo--bg">
            <div class="container">
                <div class="row">
                    <div class="brand-logo__wrapper">
                        <div id="naslov-order">
                            <h2>Potvrdite narudžbu</h2>
                            <h4>Unesite podatke i uživajte u medu u roku od 24h!</h4>
                        </div>
                        <div>
                            <form id="contact-form" method="post" action="order/checkorder.php">
                                <input name="name" type="text" class="form-control" placeholder="Vaše ime" required>
                                <input name="lastname" type="text" class="form-control" placeholder="Vaše prezime" required>
                                <input name="code" type="text" class="form-control" placeholder="Broj narudzbe" required>

                                <input id="click"  type="submit" class="form-control submit" value="Naruči">
                            </form>
                        </div>


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
