<?php
include('assets/includes/db.php');
session_start();


$order=$_GET['id'];

if(is_null($order)){
    header('Location: error.php');
}

if(!isset($_SESSION['id']) and !isset($_SESSION['vaucher'])){
    header('Location: error.php');
    exit();
}

unset($_SESSION['vaucher']);
$title="Pojedinacna narudzba";

$query=mysqli_query($conn, 'select * from orders where OID='.$order);
$query2=mysqli_query($conn, 'select * from order_line where OrderID='.$order);
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

<div class="wrappper">
    <div class="narudzbeStranica">
        <h3>Informacije o klijentu:</h3>

        <div class="informacijeNarudzba">
            <p>Klijent</p>
            <p>Adresa</p>
            <p>Datum</p>
            <p>Cijena</p>
            <p>Status</p>
            <p>Detalji</p>
        </div>

        <?php while($row=mysqli_fetch_assoc($query)): ?>
            <div class="narudzbeSve">
                <p><?= $row['FNAME']." ".$row['LNAME'] ?></p>
                <p><?= $row['Address']?> - <?= $row['City']?> </p>
                <p><?= date( 'd.m.Y H:i:s',strtotime($row['OTIME']))?></p>
                <p><?= $row['Total'] ?></p>
                <p><?= $row['Status']?></p>
                <p><a href="singleorder.php?id=<?=$row['OID']?>">Detalji</a></p>
            </div>
        <?php endwhile; ?>
    </div>
    <hr>
    <div class="narudzbeStranica">
        <h3>Informacije o proizvodima:</h3>

        <div class="informacijeNarudzba">
            <h3>Naziv</h3>
            <h3>Kolicina</h3>
            <h3>Cijena</h3>
        </div>

        <?php
        $total=0;
        ?>
        <?php while($row2=mysqli_fetch_assoc($query2)): ?>
            <div class="naslovorder">
                <?php
                $query3 = mysqli_query($conn, "select * from products where PID ='{$row2['ItemID']}'");
                $row3= mysqli_fetch_assoc($query3);
                $total_price=0;
                $total_price+=$row2['Price']*$row2['Quantity'];
                $total+=$total_price;
                ?>
                <div class="narudzbeSve">
                <p><?= $row3['NAME'] ?></p>
                <p><?= $row2['Quantity'] ?> kom</p>
                <p><?= $total_price ?>KM</p>
                </div>

            </div>
        <?php endwhile; ?>
        <div class="total">
            <h3>Ukupno:  <?= $total?> KM</h3>
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
    include ('assets/includes/footer.php');
    ?>



</body>
</html>