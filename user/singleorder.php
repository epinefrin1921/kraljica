<?php
include('../assets/includes/db.php');
session_start();


$order=$_GET['id'];

if(is_null($order)){
    header('Location: ../error.php');
}

if(!isset($_SESSION['id']) and !isset($_SESSION['vaucher'])){
    header('Location: ../error.php');
    exit();
}
unset($_SESSION['vaucher']);

$query=mysqli_query($conn, 'select * from orders where OID='.$order);
$query2=mysqli_query($conn, 'select * from order_line where OrderID='.$order);
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
    <link rel="stylesheet" href="../css/cart.css">
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
                <span class="header__content__block">Pojedinacna narduzba</span>
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
                <h3>Informacije o klijentu:</h3>
                <div class="sekcija">
                    <p>Ime</p>
                    <p>Prezime</p>
                    <p>Adresa</p>
                    <p>Grad</p>
                    <p class="large">Telefon</p>
                    <p class="large">Email</p>
                </div>

                <?php while($row=mysqli_fetch_assoc($query)): ?>
                    <div class="sekcija">
                        <p><?= $row['FNAME'] ?></p>
                        <p><?= $row['LNAME'] ?></p>
                        <p><?= $row['Address']?></p>
                        <p><?= $row['City']?></p>
                        <p class="large"><?= $row['Phone'] ?></p>
                        <p class="large"><?= $row['email']?></p>
                    </div>
                    <h3>Vrijeme: <?= date( 'd.m.Y H:i:s',strtotime($row['OTIME']))?></h3>
                    <h3>Status : <?= $row['Status']?></h3>
                    <h3>Napomena: <?= $row['Extra']?></h3>
                    <h3>Jedinstveni broj: <?= $row['ORDERNO']?></h3>

                <?php
                endwhile; ?>
                <?php if(isset($_SESSION['id'])){ ?>

                    <p>Promijeni status: </p>
                    <form action="changestatus.php?id=<?=$order?>" method="post">
                        <select name="status" id="status" required>
                            <option value="" selected disabled hidden>Odaberite status</option>
                            <option value="cekanje">Čekanje</option>
                            <option value="poslano">Poslano</option>
                            <option value="zavrseno">Završeno</option>
                        </select>
                        <input type="submit" value="Promijeni">
                    </form>
                <?php } ?>
            </div>


        </div>
    </section>

    <section id="menu" >
        <div class="container">

            <?php
            $total=0;
            ?>

            <div class="row">

                <div class="lista">

                    <h3 style="text-align: center; width: 100%; margin-bottom: 30px">Informacije o proizvodima:</h3>

                    <div>
                        <div class="naslov" style="color: black">
                            <h3>Klijent</h3>
                            <h3>Kolicina</h3>
                            <h3>Cijena</h3>
                        </div>

                    </div>

                    <?php while($row2=mysqli_fetch_assoc($query2)): ?>
                        <div class="naslov" style="color: black">

                            <?php
                            $query3 = mysqli_query($conn, "select * from products where PID ='{$row2['ItemID']}'");
                            $row3= mysqli_fetch_assoc($query3);
                            $total_price=0;
                            $total_price+=$row2['Price']*$row2['Quantity'];
                            $total+=$total_price;
                            ?>

                            <h3><?= $row3['NAME'] ?></h3>
                            <h3><?= $row2['Quantity'] ?></h3>
                            <h3><?= $total_price ?>KM</h3>


                        </div>
                    <?php endwhile; ?>

                    <div class="total" style="color: black">
                        <h3>Ukupno:  <?= $total?> KM</h3>
                    </div>

                </div>

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