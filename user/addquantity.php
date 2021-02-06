<?php
session_start();
include('../assets/includes/db.php');

if(!isset($_SESSION['id'])){
    header('Location: ../index.php');
    exit();
}

$id=$_SESSION['id'];
$query2=mysqli_query($conn, 'select * from users where UID = '.$id);
$row2=mysqli_fetch_assoc($query2);
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

<div class="container py-5">
    <h1> Dobrodošli, <?= $row2['FNAME'] ?></h1>
    <hr>
    <p>Upravljajte svojim biznisom</p>
</div>

<?php
include ('../assets/includes/adminheader.php');
?>

    <div class="container py-5">
        <div>
            <h3 class="media-heading marka">Dodajte zalihu na <?= $row['NAME'] ?></h3>
            <h3 class="media-heading marka">Na stanju: <?= $row['QUANTITY'] ?> kom</h3>
        </div>

        <div class="container">

            <div>
                <form action="savequantity.php?id=<?= $id ?>" method="post">
                    <label>
                        <input class="form-control" type="number" step="1" min="1" placeholder="Kolicina" name="quantity" id="quantity">
                    </label>
                    <input class="btn btn-dark" id="submit" type="submit" value="Dodaj">
                </form>

            </div>
        </div>
    </div>




<?php
include ('../assets/includes/footer.php');
?>



</body>
</html>

