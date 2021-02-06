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

<div class="container py-5">
    <div class="wrappper naslovshop">
        <h1>Unesite kod narudžbe i pratite status</h1>
        <hr>
        <p>Želite dobiti informacije o vašoj narudžbi? Ukucajte kod koji ste dobili prilikom checkouta i doznajte više</p>
    </div>

    <div class="wrappper py-4">
        <form id="contact-form" method="post" action="order/checkorder.php">
            <input name="name" type="text" class="form-control my-2" placeholder="Vaše ime" required>
            <input name="lastname" type="text" class="form-control my-2" placeholder="Vaše prezime" required>
            <input name="code" type="text" class="form-control my-2" placeholder="Broj narudžbe" required>

            <input id="click"  type="submit" class="form-control submit btn btn-dark my-2" value="Pronađi narudžbu">
        </form>
    </div>
</div>

<?php
include ('assets/includes/footer.php');
?>



</body>
</html>