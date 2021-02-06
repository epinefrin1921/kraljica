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
<div  class="container py-5">

<div class="wrappper naslovshop ">
    <h1>Shop</h1>
    <hr>
    <p>Dostava u roku od 48h</p>
    <?php
    if(isset($_SESSION['msg'])){ ?>
        <div class="alert alert-success" role="alert">
            <?php echo $_SESSION['msg']; ?>
        </div>
    <?php }
    ?>
</div>

<div class="container">



    <h2>Likeri</h2>
    <hr>

    <div class="container-fluid d-flex flex-wrap">
    <?php while($row=mysqli_fetch_assoc($query2)):?>
        <?php if($row['QUANTITY']>0 or isset($_SESSION['id'])): ?>
         <div class="card col-12 col-md-6 col-lg-3 mt-3">
            <?php
            $incart=0;
            if (isset($_SESSION['products'])){
                foreach($_SESSION['products'] as $index=>$item){
                    if($item[0]==$row['PID']){
                        $incart=$item[1];
                    }}};
            ?>
            <img src="images/<?=$row['IMAGE']?>" class="card-img-top" alt="...">
            <div class="card-body ps-2 pe-2">
                <h5 style="text-align: center" class="card-title"><?= $row['NAME'] ?> - <?= $row['PRICE'] ?>KM</h5>
                <p style="text-align: center" class="card-text">U korpici: <?= $incart ?> - Na stanju: <?= $row['QUANTITY']-$incart ?></p>
                    <form action="order/cart.php?id=<?= $row['PID'] ?>" method="post" style="width: 100%">
                        <input class="form-control mb-3" type="number" step="1" min="1" placeholder="Kolicina" id="quantity" name="quantity"  required max="<?= $row['QUANTITY']-$incart ?>">
                        <input type="submit" class="btn btn-dark mb-4 form-control" value="Dodaj u korpicu">
                    </form>
                <p style="text-align: center" class="mb-3"><a href="singleproduct.php?id=<?= $row['PID'] ?>">Pogledaj detaljnije</a></p>


                <?php if(isset($_SESSION['id'])): ?>

                    <p><a href="user/updateproducts.php?id=<?= $row['PID'] ?>">Uredi proizvod</a></p>

                <?php endif; ?>
              </div>
             </div>
        <?php endif; ?>
    <?php endwhile; ?>
    </div>



    <h2 class="mt-5">Rakije</h2>
    <hr>

    <div class="container-fluid d-flex flex-wrap">
        <?php while($row=mysqli_fetch_assoc($query)):?>
        <?php if($row['QUANTITY']>0 or isset($_SESSION['id'])): ?>

            <div class="card col-12 col-md-6 col-lg-3 mt-3">
                <?php
                $incart=0;
                if (isset($_SESSION['products'])){
                    foreach($_SESSION['products'] as $index=>$item){
                        if($item[0]==$row['PID']){
                            $incart=$item[1];
                        }}};
                ?>
                <img src="images/<?=$row['IMAGE']?>" class="card-img-top" alt="...">
                <div class="card-body ps-2 pe-2">
                    <h5 style="text-align: center" class="card-title"><?= $row['NAME'] ?> - <?= $row['PRICE'] ?>KM</h5>
                    <p style="text-align: center" class="card-text">U korpici: <?= $incart ?> - Na stanju: <?= $row['QUANTITY']-$incart ?></p>
                    <form action="order/cart.php?id=<?= $row['PID'] ?>" method="post" style="width: 100%">
                        <input class="form-control mb-3" type="number" step="1" min="1" placeholder="Kolicina" id="quantity" name="quantity"  required max="<?= $row['QUANTITY']-$incart ?>">
                        <input type="submit" class="btn btn-dark mb-4 form-control" value="Dodaj u korpicu">
                    </form>
                    <p style="text-align: center" class="mb-3"><a href="singleproduct.php?id=<?= $row['PID'] ?>">Pogledaj detaljnije</a></p>


                    <?php if(isset($_SESSION['id'])): ?>

                        <p><a href="user/updateproducts.php?id=<?= $row['PID'] ?>">Uredi proizvod</a></p>

                    <?php endif; ?>
                </div>
            </div>
            <?php endif; ?>

        <?php endwhile; ?>
    </div>

    <h2 class="mt-5">Ostalo</h2>
    <hr>
    <div class="container-fluid d-flex flex-wrap">
        <?php while($row=mysqli_fetch_assoc($query3)):?>
        <?php if($row['QUANTITY']>0 or isset($_SESSION['id'])): ?>

            <div class="card col-12 col-md-6 col-lg-3 mt-3">
                <?php
                $incart=0;
                if (isset($_SESSION['products'])){
                    foreach($_SESSION['products'] as $index=>$item){
                        if($item[0]==$row['PID']){
                            $incart=$item[1];
                        }}};
                ?>
                <img src="images/<?=$row['IMAGE']?>" class="card-img-top" alt="...">
                <div class="card-body ps-2 pe-2">
                    <h5  style="text-align: center" class="card-title"><?= $row['NAME'] ?> - <?= $row['PRICE'] ?>KM</h5>
                    <p style="text-align: center" class="card-text">U korpici: <?= $incart ?> - Na stanju: <?= $row['QUANTITY']-$incart ?></p>


                    <form action="order/cart.php?id=<?= $row['PID'] ?>" method="post" style="width: 100%">
                        <input class="form-control mb-3" type="number" step="1" min="1" placeholder="Kolicina" id="quantity" name="quantity"  required max="<?= $row['QUANTITY']-$incart ?>">
                        <input type="submit" class="btn btn-dark mb-4 form-control" value="Dodaj u korpicu">
                    </form>
                    <p style="text-align: center" class="mb-3"><a href="singleproduct.php?id=<?= $row['PID'] ?>">Pogledaj detaljnije</a></p>


                    <?php if(isset($_SESSION['id'])): ?>

                        <p><a href="user/updateproducts.php?id=<?= $row['PID'] ?>">Uredi proizvod</a></p>

                    <?php endif; ?>
                </div>
            </div>
            <?php endif; ?>

        <?php endwhile; ?>
    </div>



</div>
</div>

<?php
include ('assets/includes/footer.php');
?>

</body>
</html>
