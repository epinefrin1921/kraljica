<?php
include('../assets/includes/db.php');
session_start();


if(!isset($_SESSION['id'])){
    header('Location: ../index.php');
    exit();
}

$id=$_SESSION['id'];
$query=mysqli_query($conn, 'select * from users');

$title="Svi zaposleni - Kraljica";
$query2=mysqli_query($conn, 'select * from users where UID = '.$id);
$row=mysqli_fetch_assoc($query2);
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



<div class="forma container">
    <h3>Spisak osoba:</h3>
    <?php
    while($row=mysqli_fetch_assoc($query)): ?>
        <p>Name: <?= $row['FNAME'] ?></p>
        <p>Last name: <?= $row['LNAME'] ?></p>
        <p>Email: <?= $row['EMAIL'] ?></p>
        <?php
        if(isset($_SESSION['id'])): ?>
            <a href="deleteuser.php?id=<?= $row['UID']?>">Izbrisi osobu</a>
        <?php endif; ?>
        <br><br><br>
    <?php endwhile; ?>

</div>

<?php
include ('../assets/includes/footer.php');
unset($_SESSION['msg']);
?>

</body>
</html>



