<?php
include('../assets/includes/db.php');
session_start();


if(!isset($_SESSION['id'])){
    header('Location: ../index.php');
    exit();
}

$id=$_SESSION['id'];
$title="Dodaj proizvod - Kraljica";
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
    <h3>Dodajte novi proizvod</h3>
    <form action="insertproduct.php" method="post" enctype="multipart/form-data">
        <div>
            <label for="name">Ime proizvoda</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div>
            <label for="cijena">Cijena</label>
            <input type="number" name="cijena" id="cijena" required step="0.5">
        </div>
        <div>
            <label for="kolicina">Pocetna kolicina</label>
            <input type="number" name="kolicina" id="kolicina" required step="1">
        </div>
        <div>
            <label for="text">Opis</label>
            <textarea name="text" id="text" required rows="10" cols="60">Kratki opis proizvoda</textarea>
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
        <input type="file" placeholder="Image" id="image" name="image" required>

        <input type="submit" value="Ubaci u bazu">
    </form>

</div>


<?php
include ('../assets/includes/footer.php');
unset($_SESSION['msg']);
?>

</body>
</html>
