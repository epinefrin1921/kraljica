<?php
session_start();
include('assets/includes/db.php');


$id=$_GET['id'];

if($statement=$conn->prepare("select * from products where PID=?")){
    $statement->bind_param('s',$id);

    $statement->execute();

    $statement->bind_result($ID, $Name, $Description, $Cat, $Price, $Quantity, $Image, $Date);

    $statement->fetch();
}
else
{
    $error = $conn->errno . ' ' . $conn->error;
    echo $error;
}
if(is_null($ID)){
    header('Location: ../error.php');
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
                <a class="header__button" href="#">Kupite online</a>
            </div>
            <div class="social-icon pull-right">
                <ul>
                    <li><a href="https://www.facebook.com/medniducanvisoko/"><i class="flaticon-facebook-letter-logo"></i></a></li>
                </ul>
            </div>
        </div>
    </header>


        <div class="proizvod">
            <div>
                <img src="images/<?= $Image ?>" class="img-responsive" alt="Food Menu">
            </div>
            <div class="opis">
                <h3 class="media-heading"><?= $Name ?></h3>
                <p><?= $Description ?></p>
                <p>Na stanju: <?= $Quantity?></p>
                <h3 class="media-heading marka"><?= $Price ?>KM</h3>
                <form action="order/cart.php?id=<?= $ID ?>" method="post" style="width: 100%">
                    <input type="number" step="1" min="1" placeholder="Kolicina" id="quantity" name="quantity"  required max="<?= $row['QUANTITY']-$incart ?>" style="width: 40%">
                    <input class="btn btn-success btn-sm" id="submit" type="submit" value="Dodaj">
                </form>
            </div>
        </div>
    <div>
        <?php if(isset($_SESSION['id'])): ?>
            <a href="user/deleteproducts.php?id=<?= $ID ?>">Izbriši</a>
            <a href="user/updateproducts.php?id=<?= $ID?>">Uredi</a>
            <a href="user/addquantity.php?id=<?= $ID ?>">Dodaj novu kolicinu</a>
        <?php endif; ?>
    </div>




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