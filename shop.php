<?php
include ('assets/includes/db.php');
session_start();
$title = "Shop - Kraljica";

$query=mysqli_query($conn, "select * from products where DateDeleted is null and CATEGORY='rakija'");
$query2=mysqli_query($conn, "select * from products where DateDeleted is null and CATEGORY='liker'");
$query3=mysqli_query($conn, "select * from products where DateDeleted is null and CATEGORY='ostalo'");

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

<div class="wrappper naslovshop">
    <h1>Shop</h1>
    <hr>
    <p>Dostava u roku od 48h</p>
</div>

<div class="wrappper lista">

    <?php while($row=mysqli_fetch_assoc($query)):?>
    <div class="korpica">
        <img src="images/<?=$row['IMAGE']?>">
        <div>
            <?php
            $incart=0;
            if (isset($_SESSION['products'])){
                foreach($_SESSION['products'] as $index=>$item){
                    if($item[0]==$row['PID']){
                        $incart=$item[1];
                    }}};
            ?>
            <h2><?= $row['NAME'] ?></h2>
            <h3><?= $row['PRICE'] ?>KM</h3>
            <p>Na stanju: <?= $row['QUANTITY']-$incart ?></p>
            <p>U korpici: <?= $incart ?></p>
            <div>
                <form action="order/cart.php?id=<?= $row['PID'] ?>" method="post" style="width: 100%">
                    <input type="number" step="1" min="1" placeholder="Kolicina" id="quantity" name="quantity"  required max="<?= $row['QUANTITY']-$incart ?>" style="width: 40%">
                    <button type="submit" class="btn btn-dark">Dodaj u korpicu</button>
                </form>
            </div>

            <?php if(isset($_SESSION['id'])): ?>

                <a href="user/updateproducts.php?id=<?= $row['PID'] ?>">Uredi proizvod</a>

            <?php endif; ?>

        </div>
    </div>
    <?php endwhile; ?>

</div>

<?php
include ('assets/includes/footer.php');
?>

</body>
</html>
