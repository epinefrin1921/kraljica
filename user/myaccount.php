<?php

include('../assets/includes/db.php');
session_start();

if(!isset($_SESSION['id'])){
header('Location: ../index.php');
exit();
}

$id=$_SESSION['id'];
$title="Profilna stranica - Kraljica";
$query=mysqli_query($conn, 'select * from users where UID = '.$id);
$row=mysqli_fetch_assoc($query);

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
        <h3>Uredite profil</h3>
        <form action="savemyaccount.php?id=<?=$id?>" method="post">
            <div>
                <label for="first_name">Ime</label>
                <input type="text" name="first_name" id="first_name" required value="<?= $row['FNAME'] ?>">
            </div>
            <div>
                <label for="last_name">Prezime</label>
                <input type="text" name="last_name" id="last_name" required value="<?=$row['LNAME']?>">
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required value="<?=$row['EMAIL']?>">
                <div>
                    <label for="password">Lozinka</label>
                    <input type="password" name="password" id="password">
                </div>
            </div>
            <button type="submit" class="btn btn-dark">Spremi promjene</button>
        </form>

    </div>


    <?php
    include ('../assets/includes/footer.php');
    unset($_SESSION['msg']);
    ?>

</body>
</html>