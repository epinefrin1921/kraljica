<?php
include('../assets/includes/db.php');
session_start();


$id=$_SESSION['id'];
$title="Uredi proizvod - Kraljica";
$query=mysqli_query($conn, 'select * from users where UID = '.$id);
$row2=mysqli_fetch_assoc($query);


if(!isset($_SESSION['id'])){
    header('Location: ../index.php');
    exit();
}
$id=$_GET['id'];
$query=mysqli_query($conn, 'select * from products where PID='.$id);
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


<div class="container py-5">
    <h1> Dobrodošli, <?= $row2['FNAME'] ?></h1>
    <hr>
    <p>Upravljajte svojim biznisom</p>
</div>

<?php
include ('../assets/includes/adminheader.php');
?>


<div class="container py-5">
        <form action="saveproduct.php?id=<?=$id?>" method="post" enctype="multipart/form-data">
            <div>
                <label for="name">Ime proizvoda</label>
                <input class="form-control my-2" type="text" name="name" id="name" required value="<?= $row['NAME'] ?>">
            </div>
            <div>
                <label for="cijena">Cijena</label>
                <input class="form-control my-2" type="number" name="cijena" id="cijena" required step="0.5" value="<?= $row['PRICE'] ?>">
            </div>
            <div>
                <label for="kolicina">Kolicina</label>
                <input class="form-control my-2" type="number" name="kolicina" id="kolicina" required step="1" value="<?= $row['QUANTITY'] ?>">
            </div>
            <div>
                <label for="text">Opis</label>
                <textarea class="form-control my-2" name="text" id="text" required rows="10" cols="60"><?= $row['DESCRIPTION'] ?></textarea>
            </div>
            <div>
                <label for="kategorija">Kategorija</label>
                <select class="form-control my-2" name="kategorija" id="kategorija" required>
                    <option value="" selected disabled hidden>Odaberite kategoriju</option>
                    <option value="rakija">Rakija</option>
                    <option value="liker">Liker</option>
                    <option value="ostalo">Ostalo</option>
                </select>
            </div>
            <label for="image">Slika:</label>
            <input class="form-control my-2" type="file" placeholder="Image" id="image" name="image">

            <input type="submit" class="btn btn-dark">
        </form>
</div>


    <?php
    include ('../assets/includes/footer.php');
    ?>



    </body>
    </html>
