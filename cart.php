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
                <span class="header__content__block">Korpica</span>
                <h1 class="header__content__title"></h1>
            </div>

            <?php if(!isset($_SESSION['products']) or is_null($_SESSION['products']) or count($_SESSION['products'])==0){ ?>
                <div class="naslov">
                    <h3 >Korpica je prazna!</h3>
                </div>

            <?php } else if(isset($_SESSION['products'])){?>

                <?php $total=0; ?>

            <div class="naslov">
                <h3>Naziv</h3>
                <h3>Kolicina</h3>
                <h3>Cijena</h3>
                <h3>Izmjeni kolicinu</h3>
                <h3>Uredi</h3>
            </div>

                <?php foreach($_SESSION['products'] as $item): ?>

                    <?php
                    $query = mysqli_query($conn, "select * from products where PID ='{$item[0]}'");
                    $row= mysqli_fetch_assoc($query);
                    $total_price=0;
                    $total_price+=$row['PRICE']*$item[1];
                    $total+=$total_price;
                    ?>

                    <div class="naslov">
                        <h3><?= $row['NAME'] ?></h3>
                        <h3><?= $item[1]?></h3>
                        <h3><?= $row['PRICE'] ?>KM</h3>
                        <h3>
                            <form id="forma" action="order/updatecart.php?id=<?= $row['PID'] ?>" method="post">
                                <input type="number" step="1" min="1" placeholder="Kolicina" id="quantity" name="quantity"  required value="<?= $item[1] ?>" max="<?= $row['QUANTITY'] ?>">
                                <input class="btn btn-success btn-sm" id="submit" type="submit" value="Promijeni" >
                            </form>
                        </h3>
                        <h3><a href="order/deletefromcart.php?id=<?= $row['PID'] ?>" style="text-align: right">Izbriši</a></h3>
                    </div>


                <?php endforeach; ?>

                <div class="total">
                    <h3>Ukupno:  <?= $total?> KM</h3>
                </div>


            <?php } ?>

        </div>
    </header>


    <?php if(!isset($_SESSION['products']) or is_null($_SESSION['products']) or count($_SESSION['products'])==0){ ?>
        <div class="wrap" style="text-align: center; margin: 40px;">
            <h3><a href="shop.php">Natrag na shop?</a></h3>
        </div>

    <?php } else if(isset($_SESSION['products'])){?>
    <section class="brand-logo brand-logo--bg">
        <div class="container">
            <div class="row">
                <div class="brand-logo__wrapper">
                    <div id="naslov-order">
                        <h2>Potvrdite narudžbu</h2>
                        <h4>Unesite podatke i uživajte u medu u roku od 24h!</h4>
                    </div>
                    <div>
                        <form id="contact-form" method="post" action="order/placeorder.php">
                            <input name="name" type="text" class="form-control" placeholder="Vaše ime" required>
                            <input name="lastname" type="text" class="form-control" placeholder="Vaše prezime" required>
                            <input name="address" type="text" class="form-control" placeholder="Adresa" required>
                            <input name="city" type="text" class="form-control" placeholder="Grad" required>
                            <input name="phone" type="text" class="form-control" placeholder="Broj telefona" required>
                            <input name="email" type="email" class="form-control" placeholder="Email" required>
                            <input name="extra" type="text" class="form-control" placeholder="Posebna napomena">

                            <input id="click" onclick="return confirm('Da li ste sigurni? Vasa narudžba će biti poslana na adresu!');" type="submit" class="form-control submit" value="Naruči">
                        </form>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <?php }; ?>

    <?php
    include ('assets/includes/footer.php');
    ?>

</div>
<script src="assets/jquery/jquery-3.2.1.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
