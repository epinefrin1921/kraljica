<?php

include('../assets/includes/db.php');
session_start();

if(!isset($_SESSION['id'])){
    header('Location: ../index.php');
    exit();
}
$query=mysqli_query($conn, 'select * from products where DateDeleted is not null');

$id=$_SESSION['id'];

$title="Izbrisani proizvodi - Kraljica";
$query4=mysqli_query($conn, 'select * from users where UID = '.$id);
$row=mysqli_fetch_assoc($query4);
?>

<!doctype html>
<html lang="en">
<?php
include ('../assets/includes/header.php');
?>
<body>

<?php
include ('../assets/includes/navbar.php');
?>

<div class="wrappper dobrodoslica">
    <h1> Dobrodosli, <?= $row['FNAME'] ?></h1>
    <p>Upravljajte svojim biznisom</p>
</div>

<?php
include ('../assets/includes/adminheader.php');
?>


<?php
if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
}
?>


<div class="wrappper izbrisani">
    <h1>Aktiviraj izbrisane proizvode</h1>
    <div class="opisProizvoda">
        <p>Naziv</p>
        <p>Cijena</p>
        <p>Opis</p>
        <p>Uredi</p>

    </div>

    <?php while ($row=mysqli_fetch_assoc($query)): ?>

    <div class="opisProizvoda">
        <h3 class="media-heading"><?= $row['NAME'] ?></h3>
        <h3 class="media-heading marka"><?= $row['PRICE'] ?>KM</h3>
        <h3 class="media-heading"><?= $row['DESCRIPTION'] ?></h3>

        <div>
            <?php if(isset($_SESSION['id'])): ?>
                <a href="activateitem.php?id=<?= $row['PID'] ?>">Aktiviraj proizvod</a>
            <?php endif; ?>
        </div>
    </div>


    <?php endwhile; ?>
</div>




<?php
include ('../assets/includes/footer.php');
unset($_SESSION['msg']);
?>

</body>
</html>



