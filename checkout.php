<?php
session_start();
include ('assets/includes/db.php');
$title="Checkout - Kraljica";
$total = $_GET['total'];
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
    <h1>Unesite podatke i uzivajte u picu u roku od 48h.</h1>
    <hr>
    <p>Narucite sigurno i jednostavno, platite pouzecu</p>
</div>

<div class="wrappper" id="checkout">
        <form id="formcheckout" method="post" action="order/placeorder.php">
            <input name="name" type="text" class="form-control" placeholder="Vaše ime" required>
            <input name="lastname" type="text" class="form-control" placeholder="Vaše prezime" required>
            <input name="address" type="text" class="form-control" placeholder="Adresa" required>
            <input name="city" type="text" class="form-control" placeholder="Grad" required>
            <input name="phone" type="text" class="form-control" placeholder="Broj telefona" required>
            <input name="email" type="email" class="form-control" placeholder="Email" required>
            <input name="extra" type="text" class="form-control" placeholder="Posebna napomena">

            <div class="ukupno">
                <div class="checkout">
                    <h3>Ukupno: <?= $total ?>KM</h3>
                    <p>Dostava: 10KM</p>
                    <h2>Ukupno sa dostavom:  <?= $total+10 ?>KM </h2>
                    <hr>
                </div>
            </div>

            <input id="click" class="btn btn-dark form-control submit" onclick="return confirm('Da li ste sigurni? Vasa narudžba će biti poslana na adresu!');" type="submit"  value="Naruči">
        </form>
</div>


<?php
include ('assets/includes/footer.php');
?>



</body>
</html>

