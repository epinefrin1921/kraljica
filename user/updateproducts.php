<?php
include('../assets/includes/db.php');
session_start();


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


<div class="wrappper dobrodoslica">
    <h1>Uredite proizvod</h1>
    <p>Dodajte kolicinu, uredite informacije</p>
</div>

<?php
include ('../assets/includes/adminheader.php');
?>


    <div class="forma container">
        <form action="saveproduct.php?id=<?=$id?>" method="post" enctype="multipart/form-data">
            <div>
                <label for="name">Ime proizvoda</label>
                <input type="text" name="name" id="name" required value="<?= $row['NAME'] ?>">
            </div>
            <div>
                <label for="cijena">Cijena</label>
                <input type="number" name="cijena" id="cijena" required step="0.5" value="<?= $row['PRICE'] ?>">
            </div>
            <div>
                <label for="kolicina">Kolicina</label>
                <input type="number" name="kolicina" id="kolicina" required step="1" value="<?= $row['QUANTITY'] ?>">
            </div>
            <div>
                <label for="text">Opis</label>
                <textarea name="text" id="text" required rows="10" cols="60"><?= $row['DESCRIPTION'] ?></textarea>
            </div>
            <div>
                <label for="kategorija">Kategorija</label>
                <select name="kategorija" id="kategorija" required>
                    <option value="" selected disabled hidden>Odaberite kategoriju</option>
                    <option value="rakija">Rakija</option>
                    <option value="liker">Liker</option>
                    <option value="ostalo">Ostalo</option>
                </select>
            </div>
            <label for="image">Slika:</label>
            <input type="file" placeholder="Image" id="image" name="image">

            <input type="submit">
        </form>
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
    include ('../assets/includes/footer.php');
    ?>



    </body>
    </html>
