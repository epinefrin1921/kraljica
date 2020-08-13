<?php
include ('assets/includes/db.php');
session_start();

$query=mysqli_query($conn, "select * from products where DateDeleted is null and CATEGORY='med'");
$query2=mysqli_query($conn, "select * from products where DateDeleted is null and CATEGORY='smjesa'");
$query3=mysqli_query($conn, "select * from products where DateDeleted is null and CATEGORY='medni proizvod'");

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

        </div>
        <section class="skill">
            <div class="container skill__container--narrow">
                <div class="page-section">
                    <h2 class="page-section__title page-section__title--white">Nasa ponuda</h2>
                    <img class="page-section__title-style" src="assets/images/title-style-white.png" alt="">
                    <p class="page-section__paragraph page-section__paragraph--white"> </p>

                </div>
            </div>
        </section>
    </header>


    <section class="portfolio">
        <div class="container">
            <div class="page-section">
                <h2 class="page-section__title">Medovi</h2>
                <img class="page-section__title-style" src="assets/images/title-style.png" alt="">

                <div class="row gutters-40">

                    <?php while($row=mysqli_fetch_assoc($query)): ?>
                    <div class="col-md-4">
                        <div class="portfolio__single-section" data-order="1">
                            <?php
                            $incart=0;

                            if (isset($_SESSION['products'])){
                                foreach($_SESSION['products'] as $index=>$item){
                                    if($item[0]==$row['PID']){
                                        $incart=$item[1];
                                    }}};
                            ?>

                            <img class="portfolio__single-section__image img-responsive" src="images/<?= $row['IMAGE'] ?>" alt="">
                            <div class="portfolio__single-section__overlay" style="width: 100%">
                                <div class="overlay-content" style="width: 100%">
                                    <h4><?= $row['NAME'] ?> - <?= $row['PRICE'] ?>KM</h4>
                                    <p>Na stanju: <?= $row['QUANTITY']-$incart ?></p>
                                    <p>U korpici: <?= $incart ?></p>

                                    <div>
                                        <form action="order/cart.php?id=<?= $row['PID'] ?>" method="post" style="width: 100%">
                                            <input type="number" step="1" min="1" placeholder="Kolicina" id="quantity" name="quantity"  required max="<?= $row['QUANTITY']-$incart ?>" style="width: 40%">
                                            <input class="btn btn-success btn-sm" id="submit" type="submit" value="Dodaj">
                                        </form>
                                    </div>

                                    <?php if(isset($_SESSION['id'])): ?>

                                    <a href="user/updateproducts.php?id=<?= $row['PID'] ?>">Uredi proizvod</a>

                                    <?php endif; ?>
                                </div>
                                <div class="portfolio__single-section__search-icon">
                                    <a href="singleproduct.php?id=<?= $row['PID'] ?>"><img src="assets/images/search-icon.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
            <div class="page-section">
                <h2 class="page-section__title">Smjese</h2>
                <img class="page-section__title-style" src="assets/images/title-style.png" alt="">

                <div class="row gutters-40">

                    <?php while($row=mysqli_fetch_assoc($query2)): ?>
                        <div class="col-md-4">
                            <div class="portfolio__single-section" data-order="1">
                                <?php
                                $incart=0;

                                if (isset($_SESSION['products'])){
                                    foreach($_SESSION['products'] as $index=>$item){
                                        if($item[0]==$row['PID']){
                                            $incart=$item[1];
                                        }}};
                                ?>

                                <img class="portfolio__single-section__image img-responsive" src="images/<?= $row['IMAGE'] ?>" alt="">
                                <div class="portfolio__single-section__overlay" style="width: 100%">
                                    <div class="overlay-content" style="width: 100%">
                                        <h4><?= $row['NAME'] ?> - <?= $row['PRICE'] ?>KM</h4>
                                        <p>Na stanju: <?= $row['QUANTITY']-$incart ?></p>
                                        <p>U korpici: <?= $incart ?></p>

                                        <div>
                                            <form action="order/cart.php?id=<?= $row['PID'] ?>" method="post" style="width: 100%">
                                                <input type="number" step="1" min="1" placeholder="Kolicina" id="quantity" name="quantity"  required max="<?= $row['Quantity']-$incart ?>" style="width: 40%">
                                                <input class="btn btn-success btn-sm" id="submit" type="submit" value="Dodaj">
                                            </form>
                                        </div>

                                        <?php if(isset($_SESSION['id'])): ?>

                                            <a href="user/updateproducts.php?id=<?= $row['PID'] ?>">Uredi proizvod</a>

                                        <?php endif; ?>
                                    </div>
                                    <div class="portfolio__single-section__search-icon">
                                        <a href="singleproduct.php?id=<?= $row['PID'] ?>"><img src="assets/images/search-icon.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
            <div class="page-section">
                <h2 class="page-section__title">Medni proizvodi</h2>
                <img class="page-section__title-style" src="assets/images/title-style.png" alt="">

                <div class="row gutters-40">

                    <?php while($row=mysqli_fetch_assoc($query2)): ?>
                        <div class="col-md-4">
                            <div class="portfolio__single-section" data-order="1">
                                <?php
                                $incart=0;

                                if (isset($_SESSION['products'])){
                                    foreach($_SESSION['products'] as $index=>$item){
                                        if($item[0]==$row['PID']){
                                            $incart=$item[1];
                                        }}};
                                ?>

                                <img class="portfolio__single-section__image img-responsive" src="images/<?= $row['IMAGE'] ?>" alt="">
                                <div class="portfolio__single-section__overlay" style="width: 100%">
                                    <div class="overlay-content" style="width: 100%">
                                        <h4><?= $row['NAME'] ?> - <?= $row['PRICE'] ?>KM</h4>
                                        <p>Na stanju: <?= $row['QUANTITY']-$incart ?></p>
                                        <p>U korpici: <?= $incart ?></p>

                                        <div>
                                            <form action="order/cart.php?id=<?= $row['PID'] ?>" method="post" style="width: 100%">
                                                <input type="number" step="1" min="1" placeholder="Kolicina" id="quantity" name="quantity"  required max="<?= $row['Quantity']-$incart ?>" style="width: 40%">
                                                <input class="btn btn-success btn-sm" id="submit" type="submit" value="Dodaj">
                                            </form>
                                        </div>

                                        <?php if(isset($_SESSION['id'])): ?>

                                            <a href="user/updateproducts.php?id=<?= $row['PID'] ?>">Uredi proizvod</a>

                                        <?php endif; ?>
                                    </div>
                                    <div class="portfolio__single-section__search-icon">
                                        <a href="singleproduct.php?id=<?= $row['PID'] ?>"><img src="assets/images/search-icon.png" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
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
