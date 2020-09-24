<?php
include ('assets/includes/db.php');
session_start();
$title = "Shop - Kraljica";

$query=mysqli_query($conn, "select * from products where DateDeleted is null and CATEGORY='med'");
$query2=mysqli_query($conn, "select * from products where DateDeleted is null and CATEGORY='smjesa'");
$query3=mysqli_query($conn, "select * from products where DateDeleted is null and CATEGORY='medni proizvod'");

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
    <div class="korpica">
        <img src="assets/images/medovaca.jpg">
        <div>
            <h3>Medovaca - 0,5l</h3>
            <p>15KM</p>
            <button type="submit" class="btn btn-dark">Dodaj u korpicu</button>

        </div>
    </div>
    <div class="korpica">
        <img src="assets/images/medovaca.jpg">
        <div>
            <h3>Medovaca - 0,5l</h3>
            <p>15KM</p>
            <button type="submit" class="btn btn-dark">Dodaj u korpicu</button>

        </div>
    </div>
    <div class="korpica">
        <img src="assets/images/medovaca.jpg">
        <div>
            <h3>Medovaca - 0,5l</h3>
            <p>15KM</p>
            <button type="submit" class="btn btn-dark">Dodaj u korpicu</button>

        </div>
    </div>
    <div class="korpica">
        <img src="assets/images/medovaca.jpg">
        <div>
            <h3>Medovaca - 0,5l</h3>
            <p>15KM</p>
            <button type="submit" class="btn btn-dark">Dodaj u korpicu</button>

        </div>
    </div>
    <div class="korpica">
        <img src="assets/images/medovaca.jpg">
        <div>
            <h3>Medovaca - 0,5l</h3>
            <p>15KM</p>
            <button type="submit" class="btn btn-dark">Dodaj u korpicu</button>

        </div>
    </div>
    <div class="korpica">
        <img src="assets/images/medovaca.jpg">
        <div>
            <h3>Medovaca - 0,5l</h3>
            <p>15KM</p>
            <button type="submit" class="btn btn-dark">Dodaj u korpicu</button>

        </div>
    </div>
</div>


<?php
include ('assets/includes/footer.php');
?>



</body>
</html>










<!---->
<!--                    --><?php //while($row=mysqli_fetch_assoc($query)): ?>
<!--                    <div class="col-md-4">-->
<!--                        <div class="portfolio__single-section" data-order="1">-->
<!--                            --><?php
//                            $incart=0;
//
//                            if (isset($_SESSION['products'])){
//                                foreach($_SESSION['products'] as $index=>$item){
//                                    if($item[0]==$row['PID']){
//                                        $incart=$item[1];
//                                    }}};
//                            ?>
<!---->
<!--                            <img class="portfolio__single-section__image img-responsive" src="images/--><?//= $row['IMAGE'] ?><!--" alt="">-->
<!--                            <div class="portfolio__single-section__overlay" style="width: 100%">-->
<!--                                <div class="overlay-content" style="width: 100%">-->
<!--                                    <h4>--><?//= $row['NAME'] ?><!-- - --><?//= $row['PRICE'] ?><!--KM</h4>-->
<!--                                    <p>Na stanju: --><?//= $row['QUANTITY']-$incart ?><!--</p>-->
<!--                                    <p>U korpici: --><?//= $incart ?><!--</p>-->
<!---->
<!--                                    <div>-->
<!--                                        <form action="order/cart.php?id=--><?//= $row['PID'] ?><!--" method="post" style="width: 100%">-->
<!--                                            <input type="number" step="1" min="1" placeholder="Kolicina" id="quantity" name="quantity"  required max="--><?//= $row['QUANTITY']-$incart ?><!--" style="width: 40%">-->
<!--                                            <input class="btn btn-success btn-sm" id="submit" type="submit" value="Dodaj">-->
<!--                                        </form>-->
<!--                                    </div>-->
<!---->
<!--                                    --><?php //if(isset($_SESSION['id'])): ?>
<!---->
<!--                                    <a href="user/updateproducts.php?id=--><?//= $row['PID'] ?><!--">Uredi proizvod</a>-->
<!---->
<!--                                    --><?php //endif; ?>
<!--                                </div>-->
<!--                                <div class="portfolio__single-section__search-icon">-->
<!--                                    <a href="singleproduct.php?id=--><?//= $row['PID'] ?><!--"><img src="assets/images/search-icon.png" alt=""></a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    --><?php //endwhile; ?>
