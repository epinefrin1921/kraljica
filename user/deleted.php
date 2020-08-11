<?php

include('../assets/includes/db.php');
session_start();

if(!isset($_SESSION['id'])){
    header('Location: ../index.php');
    exit();
}
$query=mysqli_query($conn, 'select * from products where DateDeleted is not null');

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
                <span class="header__content__block">Arhivirani proizvodi</span>
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

    <?php while ($row=mysqli_fetch_assoc($query)): ?>

        <div class="wow fadeInUp proizvod" data-wow-delay="0.6s">

            <div>
                <img src="../images/<?= $row['IMAGE'] ?>" class="img-responsive" alt="Food Menu">
            </div>

            <div class="opisproizvoda">
                <div>
                    <h3 class="media-heading marka"><?= $row['PRICE'] ?>KM</h3>
                </div>

                <div class="cijena">
                    <div>
                        <h3 class="media-heading"><?= $row['NAME'] ?></h3>
                    </div>

                    <div>
                        <a href="../singleproduct.php?id=<?= $row['PID'] ?>">Pogledaj proizvod</a>

                        <?php if(isset($_SESSION['id'])): ?>
                            <a href="activateitem.php?id=<?= $row['PID'] ?>">Aktiviraj proizvod</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

        </div>
    <?php endwhile; ?>

    <?php
    include ('../assets/includes/footer.php');
    unset($_SESSION['msg']);
    ?>

</div>
<script src="../assets/jquery/jquery-3.2.1.min.js"></script>
<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>