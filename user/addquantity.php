<?php
session_start();
include('../assets/includes/db.php');

if(!isset($_SESSION['id'])){
    header('Location: ../index.php');
    exit();
}

$id=$_GET['id'];

$query=mysqli_query($conn, 'select * from products where PID= '.$id);

$row=mysqli_fetch_assoc($query);

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
                <span class="header__content__block">Dodajte kolicinu</span>
            </div>
            <div class="social-icon pull-right">
                <ul>
                    <li><a href="https://www.facebook.com/medniducanvisoko/"><i class="flaticon-facebook-letter-logo"></i></a></li>
                </ul>
            </div>
        </div>
    </header>

    <div class="opisproizvoda">
        <div>
            <h3 class="media-heading marka"><?= $row['NAME'] ?></h3>
            <h3 class="media-heading marka">Na stanju: <?= $row['QUANTITY'] ?></h3>
        </div>

        <div class="cijena">
            <div>
                <h3 class="media-heading"><?= $row['NAME'] ?></h3>
            </div>

            <div>
                <form action="savequantity.php?id=<?= $id ?>" method="post">
                    <label>
                        <input type="number" step="1" min="1" placeholder="Kolicina" name="quantity" id="quantity">
                    </label>
                    <input class="btn btn-success btn-sm" id="submit" type="submit" value="Dodaj">
                </form>

            </div>
        </div>
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
    include ('../assets/includes/footer.php');
    ?>

</div>
<script src="../assets/jquery/jquery-3.2.1.min.js"></script>
<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>