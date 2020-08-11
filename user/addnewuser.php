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
                <span class="header__content__block">Dodajte novog zaposlenog</span>
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
                        <h3>Dodajte administratora stranice</h3>
                        <form action="insertuser.php" method="post">
                            <div>
                                <label for="first_name">First name</label>
                                <input type="text" name="first_name" id="first_name" required>
                            </div>
                            <div>
                                <label for="last_name">Last name</label>
                                <input type="text" name="last_name" id="last_name" required>
                            </div>
                            <div>
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" required>
                            </div>
                            <div>
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" required>
                            </div>
                            <input type="submit">
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