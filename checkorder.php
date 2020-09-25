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
    <h1>Unesite kod narudzbe i pratite status</h1>
    <hr>
    <p>Neke informacvije</p>
</div>


<div class="wrappper">
    <form id="contact-form" method="post" action="order/checkorder.php">
        <input name="name" type="text" class="form-control" placeholder="Vaše ime" required>
        <input name="lastname" type="text" class="form-control" placeholder="Vaše prezime" required>
        <input name="code" type="text" class="form-control" placeholder="Broj narudzbe" required>

        <input id="click"  type="submit" class="form-control submit btn btn-dark" value="Pronadji narudzbu">
    </form>
</div>

<?php
include ('assets/includes/footer.php');
?>



</body>
</html>