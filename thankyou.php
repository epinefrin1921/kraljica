<?php
session_start();
include ('assets/includes/db.php');
$title="Hvala - Kraljica"

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
    <h1>Hvala Vam na narudžbi &hearts;</h1>
    <hr>
    <p class="align"> <strong>Vaš broj narudžbe je: <?php if (isset($_SESSION['broj'])) echo $_SESSION['broj']?></strong></p>
    <p class="align"> Zapamtite broj i pratite status narudžbe!</p>
    <p class="align"> <a href="checkorder.php">Status pratite na ovom linku</a>.</p>

</div>

<?php
include ('assets/includes/footer.php');
?>



</body>
</html>