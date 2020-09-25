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
<div class="wrappper zahvala">
    <h1 class="header__content__block">OPS! Desila se greska!</h1>
    <p>Mozda to niste trazili?</p>
</div>
<div class="ikone">
    <div class="wrappper ikone2">
        <div class="item">
            <p><i class="fas fa-wine-bottle fa-4x"></i></p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aut dolor dolorem error hic in, libero, maxime natus numquam odit optio praesentium, quibusdam repudiandae sit tempora tenetur unde ut? Libero. </p>
        </div>
        <div class="item">
            <p><i class="fas fa-apple-alt fa-4x"></i></p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aut dolor dolorem error hic in, libero, maxime natus numquam odit optio praesentium, quibusdam repudiandae sit tempora tenetur unde ut? Libero. </p>

        </div>
        <div class="item">
            <p><i class="fas fa-truck fa-4x"></i></p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aut dolor dolorem error hic in, libero, maxime natus numquam odit optio praesentium, quibusdam repudiandae sit tempora tenetur unde ut? Libero. </p>

        </div>
    </div>
</div>

<div class="kontakt">
    <div class="wrappper">
        <h1>Imate pitanje?</h1>
        <hr>
        <p>Obratite nam se sa svim mogucim upitima</p>
        <a href="kontakt.php">Kontaktirajte nas</a>
    </div>
</div>
<?php
include ('assets/includes/footer.php');
?>



</body>
</html>