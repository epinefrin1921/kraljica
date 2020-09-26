<?php
session_start();
include('../assets/includes/db.php');

if(!isset($_SESSION['id'])){
    header('Location: ../index.php');
    exit();
}

$id=$_GET['id'];

$query=mysqli_query($conn, 'select * from products where PID= '.$id);

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

    <div class="opisproizvoda">
        <div>
            <h3 class="media-heading marka"><?= $row['NAME'] ?></h3>
            <h3 class="media-heading marka">Na stanju: <?= $row['QUANTITY'] ?></h3>
        </div>

        <div class="cijena">
            <div>
                <h3 class="media-heading"><?= $row['NAME'] ?></h3>
            </div>

            <div>
                <form action="savequantity.php?id=<?= $id ?>" method="post">
                    <label>
                        <input type="number" step="1" min="1" placeholder="Kolicina" name="quantity" id="quantity">
                    </label>
                    <input class="btn btn-success btn-sm" id="submit" type="submit" value="Dodaj">
                </form>

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
include ('../assets/includes/footer.php');
?>



</body>
</html>

