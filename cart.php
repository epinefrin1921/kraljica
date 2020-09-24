<?php
session_start();
include ('assets/includes/db.php');
$title="Korpica - Kraljica"
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
    <h1>Vasa korpica</h1>
    <hr>
    <p>Narucite sigurno i jednostavno, platite pouzecu</p>
</div>

<div class="korpa wrappper">
    <div class="naslovkorpica">
        <h3>Proizvod</h3>
        <h3>Naziv</h3>
      <h3>Podaci</h3>
        <h3>Izmjeni kolicinu</h3>
      <h3>Uredi</h3>
    </div>
<hr>
    <div class="stavka">
        <img src="assets/images/medovaca.jpg">
        <p>Medovaca</p>
        <p>3</p>
        <p>15KM</p>
        <p><button class="btn btn-primary">Uredi</button></p>
        <p>Izbrisi</p>
    </div>
    <hr>
    <div class="stavka">
        <img src="assets/images/medovaca.jpg">
        <p>Medovaca</p>
        <p>3</p>
        <p>15KM</p>
        <p><button class="btn btn-primary">Uredi</button></p>
        <p>Izbrisi</p>
    </div>
    <hr>

    <div class="ukupno">
        <div class="checkout">
            <h3>Ukupno: 90KM</h3>
            <p>Dostava: 10KM</p>
            <h2>Ukupno sa dostavom: 100KM</h2>
            <hr>
            <button class="btn btn-dark btn-lg">Idi na placanje</button>
        </div>
    </div>
</div>


<?php
include ('assets/includes/footer.php');
?>



</body>
</html>







<!--            --><?php //if(!isset($_SESSION['products']) or is_null($_SESSION['products']) or count($_SESSION['products'])==0){ ?>
<!--                <div class="naslov">-->
<!--                    <h3 >Korpica je prazna!</h3>-->
<!--                </div>-->
<!---->
<!--            --><?php //} else if(isset($_SESSION['products'])){?>
<!---->
<!--                --><?php //$total=0; ?>
<!---->
<!--            <div class="naslov">-->
<!--                <h3>Naziv</h3>-->
<!--                <h3>Kolicina</h3>-->
<!--                <h3>Cijena</h3>-->
<!--                <h3>Izmjeni kolicinu</h3>-->
<!--                <h3>Uredi</h3>-->
<!--            </div>-->
<!---->
<!--                --><?php //foreach($_SESSION['products'] as $item): ?>
<!---->
<!--                    --><?php
//                    $query = mysqli_query($conn, "select * from products where PID ='{$item[0]}'");
//                    $row= mysqli_fetch_assoc($query);
//                    $total_price=0;
//                    $total_price+=$row['PRICE']*$item[1];
//                    $total+=$total_price;
//                    ?>
<!---->
<!--                    <div class="naslov">-->
<!--                        <h3>--><?//= $row['NAME'] ?><!--</h3>-->
<!--                        <h3>--><?//= $item[1]?><!--</h3>-->
<!--                        <h3>--><?//= $row['PRICE'] ?><!--KM</h3>-->
<!--                        <h3>-->
<!--                            <form id="forma" action="order/updatecart.php?id=--><?//= $row['PID'] ?><!--" method="post">-->
<!--                                <input type="number" step="1" min="1" placeholder="Kolicina" id="quantity" name="quantity"  required value="--><?//= $item[1] ?><!--" max="--><?//= $row['QUANTITY'] ?><!--">-->
<!--                                <input class="btn btn-success btn-sm" id="submit" type="submit" value="Promijeni" >-->
<!--                            </form>-->
<!--                        </h3>-->
<!--                        <h3><a href="order/deletefromcart.php?id=--><?//= $row['PID'] ?><!--" style="text-align: right">Izbriši</a></h3>-->
<!--                    </div>-->
<!---->
<!---->
<!--                --><?php //endforeach; ?>
<!---->
<!--                <div class="total">-->
<!--                    <h3>Ukupno:  --><?//= $total?><!-- KM</h3>-->
<!--                </div>-->
<!---->
<!---->
<!--            --><?php //} ?>
<!---->
<!--        </div>-->
<!--    </header>-->
<!---->
<!---->
<!--    --><?php //if(!isset($_SESSION['products']) or is_null($_SESSION['products']) or count($_SESSION['products'])==0){ ?>
<!--        <div class="wrap" style="text-align: center; margin: 40px;">-->
<!--            <h3><a href="shop.php">Natrag na shop?</a></h3>-->
<!--        </div>-->
<!---->
<!--    --><?php //} else if(isset($_SESSION['products'])){?>

