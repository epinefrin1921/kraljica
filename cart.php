<?php
session_start();
include ('assets/includes/db.php');
$title="Korpica - Kraljica"

?>

<!doctype html>
<html lang="en">
<?php
include ('assets/includes/header.php');
?>
<body>

<?php
include ('assets/includes/navbar.php');
?>

<div class="wrappper naslovshop">
    <h1>Vasa korpica</h1>
    <hr>
    <p>Narucite sigurno i jednostavno, platite pouzecu</p>
</div>

<div class="korpa wrappper">
    <div class="naslovkorpica">
        <h3>Proizvod</h3>
        <h3>Naziv</h3>
      <h3>Kolicina</h3>
        <h3>Cijena</h3>

        <h3>Izmjeni kolicinu</h3>
      <h3>Uredi</h3>
    </div>
<hr>

    <?php if(!isset($_SESSION['products']) or is_null($_SESSION['products']) or count($_SESSION['products'])==0){ ?>
        <div class="naslov">
            <h3 >Korpica je prazna!</h3>
        </div>

    <?php } else if(isset($_SESSION['products'])){?>

    <?php $total=0; ?>


    <?php foreach($_SESSION['products'] as $item): ?>

        <?php
        $query = mysqli_query($conn, "select * from products where PID ='{$item[0]}'");
        $row= mysqli_fetch_assoc($query);
        $total_price=0;
        $total_price+=$row['PRICE']*$item[1];
        $total+=$total_price;
        ?>


            <div class="stavka">
                <img src="assets/images/medovaca.jpg">
                <p><?= $row['NAME'] ?></p>
                <p><?= $item[1]?></p>
                <p><?= $row['PRICE']?>KM</p>
                <p>
                    <form id="forma" action="order/updatecart.php?id=<?= $row['PID'] ?>" method="post">
                        <input type="number" step="1" min="1" placeholder="Kolicina" id="quantity" name="quantity"  required value="<?= $item[1] ?>" max="<?= $row['QUANTITY'] ?>">
                        <input class="btn btn-success btn-sm" id="submit" type="submit" value="Promijeni" >
                    </form>
                </p>
                <p><a href="order/deletefromcart.php?id=<?= $row['PID'] ?>" style="text-align: right">Izbriši</a></p>

            </div>
            <hr>


    <?php endforeach; ?>


    <div class="ukupno">
        <div class="checkout">
            <h3>Ukupno: <?= $total ?>KM</h3>
            <p>Dostava: 10KM</p>
            <h2>Ukupno sa dostavom:  <?= $total+10 ?>KM </h2>
            <hr>
            <a class="btn btn-dark btn-lg" id="linkplacanje" href="checkout.php?total=<?= $total ?>">Idi na placanje</a>
        </div>
    </div>

    <?php } ?>
</div>


<?php
include ('assets/includes/footer.php');
?>



</body>
</html>







