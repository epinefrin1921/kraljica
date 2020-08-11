<?php
include('../assets/includes/db.php');
session_start();


if(!isset($_SESSION['id'])){
    header('Location: ../index.php');
    exit();
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Medni ducan</title>
    <meta name="keywords" content="med medni ducan smjese pcele">
    <meta name="description" content="Medni ducan je radnja smjestena u Visokom. U ponudi imamo raznih vrsta meda, mednih smjesa i proizvoda.">

    <link rel="stylesheet" href="../assets/fonts/flat-icon/flaticon.css">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="icon" type="image/png" href="../assets/images/favicon%20(3).ico">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700&family=Montserrat:wght@400;500;700&family=Sacramento&display=swap" rel="stylesheet">
</head>
<body>
<div id="content-wrapper">
    <header class="header header--bg">
        <div class="container">
            <?php
            include ('../assets/includes/header.php');
            ?>
            <div class="header__content text-center">
                <span class="header__content__block">Dodajte novi proizvod</span>
                <h1 class="header__content__title"></h1>
            </div>
            <div class="social-icon pull-right">
                <ul>
                    <li><a href="https://www.facebook.com/medniducanvisoko/"><i class="flaticon-facebook-letter-logo"></i></a></li>
                </ul>
            </div>
        </div>
    </header>
    <?php
    include ('../assets/includes/adminheader.php');
    ?>

    <section class="brand-logo brand-logo--bg">
        <div class="container">
            <div class="row">
                <div class="brand-logo__wrapper">
                    <div class="forma container">
                        <h3>Dodajte novi proizvod</h3>
                        <form action="insertproduct.php" method="post" enctype="multipart/form-data">
                            <div>
                                <label for="name">Ime proizvoda</label>
                                <input type="text" name="name" id="name" required>
                            </div>
                            <div>
                                <label for="cijena">Cijena</label>
                                <input type="number" name="cijena" id="cijena" required step="0.5">
                            </div>
                            <div>
                                <label for="kolicina">Pocetna kolicina</label>
                                <input type="number" name="kolicina" id="kolicina" required step="1">
                            </div>
                            <div>
                                <label for="text">Opis</label>
                                <textarea name="text" id="text" required rows="10" cols="60">Kratki opis proizvoda</textarea>
                            </div>
                            <div>
                                <label for="kategorija">Kategorija</label>
                                <select name="kategorija" id="kategorija" required>
                                    <option value="" selected disabled hidden>Odaberite kategoriju</option>
                                    <option value="med">Med</option>
                                    <option value="smjesa">Smjesa</option>
                                    <option value="medni proizvod">Medni proizvod</option>

                                </select>
                            </div>
                            <label for="image">Slika:</label>
                            <input type="file" placeholder="Image" id="image" name="image" required>

                            <input type="submit" value="Ubaci u bazu">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php
    include ('../assets/includes/footer.php');
    ?>

</div>
<script src="../assets/jquery/jquery-3.2.1.min.js"></script>
<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>