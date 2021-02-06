<?php
session_start();
include('../assets/includes/db.php');

if(!isset($_SESSION['id'])){
    header('Location: ../index.php');
    exit();
}
$id=$_SESSION['id'];

$query = mysqli_query($conn, 'select * from blog where DateDeleted is not null');

$query4=mysqli_query($conn, 'select * from users where UID = '.$id);
$row=mysqli_fetch_assoc($query4);


$title = 'Izbrisani blogovi - Kraljica'
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

<div class="container py-5">
    <h2 >Izbrisani blogovi</h2>

    <div class="d-flex p-2 justify-content-between flex-wrap">
        <p>Naslov</p>
        <p>Datum dodavanja</p>
        <p>Aktiviraj</p>
    </div>

    <?php while ($row=mysqli_fetch_assoc($query)): ?>
        <div class="d-flex p-2 justify-content-between flex-wrap">
            <p class="media-heading"><?= $row['HEADLINE'] ?></p>
            <p class="media-heading marka"><?= $row['DATE'] ?></p>
            <div>
                <?php if(isset($_SESSION['id'])): ?>
                    <a href="activateblog.php?id=<?= $row['BID'] ?>">Aktiviraj blog</a>
                <?php endif; ?>
            </div>
        </div>
    <?php endwhile; ?>


</div>



<?php
include ('../assets/includes/footer.php');
?>



</body>
</html>