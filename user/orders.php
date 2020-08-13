<?php

include('../assets/includes/db.php');
session_start();


if(!isset($_SESSION['id'])){
    header('Location: ../index.php');
    exit();
}

$id=$_SESSION['id'];

$query=mysqli_query($conn, 'select * from orders where Status="cekanje" order by OID desc ');
$query2=mysqli_query($conn, 'select * from orders where Status="poslano" order by OID desc');
$query3=mysqli_query($conn, 'select * from orders where Status="zavrseno" order by OID desc');

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
                <span class="header__content__block">Upravljajte uposlenicima</span>
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

    <section id="menu" class="parallax-section">
        <div class="orders">

            <div class="row" style="text-align: center">
                <h3>Narudžbe na čekanju:</h3>
                <div class="sekcija">

                    <p>Klijent</p>
                    <p>Adresa</p>
                    <p>Datum</p>
                    <p>Cijena</p>
                    <p>Status</p>
                    <p>Detalji</p>

                </div>

                <?php while($row=mysqli_fetch_assoc($query)): ?>
                    <div class="sekcija">
                        <p><?= $row['FNAME']." ".$row['LNAME'] ?></p>
                        <p><?= $row['Address']?></p>
                        <p><?= date( 'd.m.Y H:i:s',strtotime($row['OTIME']))?></p>
                        <p><?= $row['Total'] ?></p>
                        <p><?= $row['Status']?></p>
                        <p><a href="singleorder.php?id=<?=$row['OID']?>">Detalji</a></p>
                    </div>
                <?php endwhile; ?>

            </div>

            <div class="row" style="text-align: center">
                <h3>Narudžbe u slanju:</h3>
                <div class="sekcija">

                    <p>Klijent</p>
                    <p>Adresa</p>
                    <p>Datum</p>
                    <p>Cijena</p>
                    <p>Status</p>
                    <p>Detalji</p>

                </div>

                <?php while($row=mysqli_fetch_assoc($query2)): ?>
                    <div class="sekcija">
                        <p><?= $row['FNAME']." ".$row['LNAME'] ?></p>
                        <p><?= $row['Address']?></p>
                        <p><?= date( 'd.m.Y H:i:s',strtotime($row['OTIME']))?></p>
                        <p><?= $row['Total'] ?></p>
                        <p><?= $row['Status']?></p>
                        <p><a href="singleorder.php?id=<?=$row['OID']?>">Detalji</a></p>
                    </div>
                <?php endwhile; ?>

            </div>

            <div class="row" style="text-align: center">
                <h3>Završene narudžbe:</h3>
                <div class="sekcija">

                    <p>Klijent</p>
                    <p>Adresa</p>
                    <p>Datum</p>
                    <p>Cijena</p>
                    <p>Status</p>
                    <p>Detalji</p>

                </div>

                <?php while($row=mysqli_fetch_assoc($query3)): ?>
                    <div class="sekcija">
                        <p><?= $row['FNAME']." ".$row['LNAME'] ?></p>
                        <p><?= $row['Address']?></p>
                        <p><?= date( 'd.m.Y H:i:s',strtotime($row['OTIME']))?></p>
                        <p><?= $row['Total'] ?></p>
                        <p><?= $row['Status']?></p>
                        <p><a href="singleorder.php?id=<?=$row['OID']?>">Detalji</a></p>
                    </div>
                <?php endwhile; ?>

            </div>

        </div>
    </section>

    <?php
    include ('../assets/includes/footer.php');
    unset($_SESSION['msg']);
    ?>

</div>
<script src="../assets/jquery/jquery-3.2.1.min.js"></script>
<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>