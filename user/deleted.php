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

<div class="container py-5">
    <h1> Dobrodošli, <?= $row['FNAME'] ?></h1>
    <hr>
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


<div class="container py-5">
    <h1>Aktiviraj izbrisane proizvode</h1>

    <div class="d-flex p-2 justify-content-between flex-wrap">
        <p>Naziv</p>
        <p>Cijena</p>
        <p>Opis</p>
        <p>Aktiviraj</p>
    </div>

    <?php while ($row=mysqli_fetch_assoc($query)): ?>
        <div class="d-flex p-2 justify-content-between flex-wrap">
            <p class="media-heading"><?= $row['NAME'] ?></p>
            <p class="media-heading marka"><?= $row['PRICE'] ?>KM</p>
            <p class="media-heading"><?= $row['DESCRIPTION'] ?></p>

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



