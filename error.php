<?php
session_start();
include ('assets/includes/db.php');
$title="Ops... - Kraljica"

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
    <h1>Oops...</h1>
    <hr>
    <p class="align"> <strong>Desila se greška...</strong></p>
    <p class="align"> Možda to nije to što ste tražili? Pokušajte ponovo. Ako se greška nastavi, <a href="kontakt.php">kontaktirajte nas za više informacija</a>.</p>

</div>

<?php
include ('assets/includes/footer.php');
?>



</body>
</html>