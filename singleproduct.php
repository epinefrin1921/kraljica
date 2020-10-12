<?php
session_start();
include('assets/includes/db.php');

$id=$_GET['id'];

if($statement=$conn->prepare("select * from products where PID=?")){
    $statement->bind_param('s',$id);
    $statement->execute();
    $statement->bind_result($ID, $Name, $Description, $Cat, $Price, $Quantity, $Image, $Date);
    $statement->fetch();
}
else
{
    $error = $conn->errno . ' ' . $conn->error;
    echo $error;
}
if(is_null($ID)){
    header('Location: error.php');
    exit();
}
$title = $Name.' - Kraljica';
?>

<!doctype html>
<html lang="en">
<?php
include ('assets/includes/header.php');
?>
<body>

<?php
include ('assets/includes/navbar.php');
?>

<div class="single">
    <img src="images/<?= $Image ?>" class="img-responsive" alt="Food Menu">
    <div class="singleInfo">
        <h3 class="media-heading"><?= $Name ?></h3>
        <p><?= $Description ?></p>
        <p>Na stanju: <?= $Quantity?></p>
        <h3 class="media-heading marka"><?= $Price ?>KM</h3>
        <form action="order/cart.php?id=<?= $ID ?>" method="post" style="width: 100%">
            <input type="number" step="1" min="1" placeholder="Kolicina" id="quantity" name="quantity"  required max="<?= $row['QUANTITY']-$incart ?>" style="width: 40%">
            <input class="btn btn-dark btn-sm" id="submit" type="submit" value="Dodaj">
        </form>
    </div>
</div>


        <?php if(isset($_SESSION['id'])): ?>
            <a href="user/deleteproducts.php?id=<?= $ID ?>">Izbriši</a>
            <a href="user/updateproducts.php?id=<?= $ID?>">Uredi</a>
            <a href="user/addquantity.php?id=<?= $ID ?>">Dodaj novu kolicinu</a>
        <?php endif; ?>




    <div class="kontakt">
        <div class="wrappper">
            <h1>Imate pitanje?</h1>
            <hr>
            <p>Obratite nam se sa svim mogucim upitima</p>
            <a href="kontakt.php">Kontaktirajte nas</a>
        </div>
    </div>



    <?php
    include ('assets/includes/footer.php');
    ?>



</body>
</html>
