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
<div  class="container py-5">

    <?php
    if(isset($_SESSION['msg'])){ ?>
        <div class="alert alert-success" role="alert">
            <?php echo $_SESSION['msg']; ?>
        </div>
    <?php }
    ?>

    <div>
        <?php if(!isset($_SESSION['products']) or is_null($_SESSION['products']) or count($_SESSION['products'])==0){ ?>
            <div>
                <h1>Vaša korpica je prazna</h1>
                <hr>
                <p>Vratite se u shop ako želite kupiti nešto</p>

            </div>
        <?php } else if(isset($_SESSION['products'])){?>
        <div>
            <h1>Vaša korpica</h1>
            <hr>
            <p>Kupite brzo, jednostavno i sigurno</p>

        </div>

         <?php $total=0; ?>

        <div>
                <div class="d-flex p-2 justify-content-between flex-wrap">
                    <p class="m-2">Proizvod</p>
                    <p class="m-2">Količina</p>
                    <p class="m-2">Cijena</p>
                    <p class="m-2">Izmjeni količinu</p>
                    <p class="m-2">Spremi</p>
                    <p class="m-2">Izbriši</p>
                </div>
            <hr>

            <?php foreach($_SESSION['products'] as $item): ?>

                <?php
                       $query = mysqli_query($conn, "select * from products where PID ='{$item[0]}'");
                        $row= mysqli_fetch_assoc($query);
                       $total_price=0;
                       $total_price+=$row['PRICE']*$item[1];
                        $total+=$total_price;
                        ?>
            <form id="forma" action="order/updatecart.php?id=<?= $row['PID'] ?>" method="post">

                <div class="d-flex p-2 justify-content-between flex-wrap">
                    <p class="m-2"><?= $row['NAME'] ?></p>
                    <p class="m-2"><?= $item[1]?> kom</p>
                    <p class="m-2"><?= $row['PRICE']*$item[1]?>KM</p>
                        <p class="m-2"><input type="number" step="1" min="1" placeholder="Kolicina" id="quantity" name="quantity"  required value="<?= $item[1] ?>" max="<?= $row['QUANTITY'] ?>"></p>
                        <p class="m-2"> <input class="btn btn-success btn-sm" id="submit" type="submit" value="Promijeni" ></p>
                    <p class="m-2"><a href="order/deletefromcart.php?id=<?= $row['PID'] ?>" style="text-align: right">Izbriši</a></p>

                </div>
            </form>

                <hr>

            <?php endforeach; ?>


                    <div class="ukupno">
                        <div class="checkout">
                            <h4>Ukupno: <?= $total ?>KM</h4>
                            <p>Dostava: 10KM</p>
                            <div class="container d-flex p-2 justify-content-between flex-wrap">
                                <h3>Ukupno sa dostavom:  <?= $total+10 ?>KM</h3>
                                <a class="btn btn-dark btn-lg" id="linkplacanje" href="checkout.php?total=<?= $total ?>">Idi na plaćanje</a>

                            </div>


                        </div>
                    </div>

        <?php } ?>
    </div>


</div>


<?php
include ('assets/includes/footer.php');
?>



</body>
</html>







