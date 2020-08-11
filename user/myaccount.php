<?php

include('../assets/includes/db.php');
session_start();


if(!isset($_SESSION['id'])){
header('Location: ../index.php');
exit();
}

$id=$_SESSION['id'];

$query=mysqli_query($conn, 'select * from users where UID = '.$id);
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
                <span class="header__content__block">Dobrodosli, <?= $row['FNAME'] ?></span>
                <h1 class="header__content__title"></h1>
                <ul class="header__content__sub-title">
                    <li>Upravljajte stranicom <span class="padding">&#45;</span></li>
                    <li>Pogledajte narudzbe <span class="padding">&#45;</span></li>
                    <li>Dodajte kolicinu</li>
                </ul>
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

    <?php
    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
    }
    ?>

    <div class="forma container">
        <h3>Uredite profil</h3>
        <form action="savemyaccount.php?id=<?=$id?>" method="post">
            <div>
                <label for="first_name">Ime</label>
                <input type="text" name="first_name" id="first_name" required value="<?= $row['FNAME'] ?>">
            </div>
            <div>
                <label for="last_name">Prezime</label>
                <input type="text" name="last_name" id="last_name" required value="<?=$row['LNAME']?>">
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required value="<?=$row['EMAIL']?>">
                <div>
                    <label for="password">Lozinka</label>
                    <input type="password" name="password" id="password">
                </div>
            </div>
            <input type="submit" value="Sacuvaj">
        </form>

    </div>
    <?php
    include ('../assets/includes/footer.php');
    unset($_SESSION['msg']);
    ?>

</div>
<script src="../assets/jquery/jquery-3.2.1.min.js"></script>
<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>