<?php

include('../assets/includes/db.php');
session_start();


if(!isset($_SESSION['id'])){
    header('Location: ../index.php');
    exit();
}

$id=$_SESSION['id'];

$query=mysqli_query($conn, 'select * from orders where Status="cekanje" order by OID desc');
$query2=mysqli_query($conn, 'select * from orders where Status="poslano" order by OID desc');
$query3=mysqli_query($conn, 'select * from orders where Status="zavrseno" order by OID desc');

$title="Sve narudzbe - Kraljica";
$query4=mysqli_query($conn, 'select * from users where UID = '.$id);
$row=mysqli_fetch_assoc($query4);
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

<div class="wrappper">
    <div class="narudzbeStranica">
        <h3>Narudžbe na čekanju:</h3>

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
                <p><?= $row['Address']?></p>
                <p><?= date( 'd.m.Y H:i:s',strtotime($row['OTIME']))?></p>
                <p><?= $row['Total'] ?></p>
                <p><?= $row['Status']?></p>
                <p><a href="singleorder.php?id=<?=$row['OID']?>">Detalji</a></p>
            </div>
        <?php endwhile; ?>
    </div>
    <hr>

    <div class="narudzbeStranica">
        <h3>Narudžbe u slanju:</h3>

        <div class="informacijeNarudzba">
            <p>Klijent</p>
            <p>Adresa</p>
            <p>Datum</p>
            <p>Cijena</p>
            <p>Status</p>
            <p>Detalji</p>
        </div>
        <?php while($row=mysqli_fetch_assoc($query2)): ?>
            <div class="narudzbeSve">
                <p><?= $row['FNAME']." ".$row['LNAME'] ?></p>
                <p><?= $row['Address']?></p>
                <p><?= date( 'd.m.Y H:i:s',strtotime($row['OTIME']))?></p>
                <p><?= $row['Total'] ?></p>
                <p><?= $row['Status']?></p>
                <p><a href="singleorder.php?id=<?=$row['OID']?>">Detalji</a></p>
            </div>
        <?php endwhile; ?>

    </div>

    <hr>
    <div class="narudzbeStranica">
        <h3>Završene narudžbe:</h3>

        <div class="informacijeNarudzba">
            <p>Klijent</p>
            <p>Adresa</p>
            <p>Datum</p>
            <p>Cijena</p>
            <p>Status</p>
            <p>Detalji</p>
        </div>

        <?php while($row=mysqli_fetch_assoc($query3)): ?>
            <div class="narudzbeSve">
                <p><?= $row['FNAME']." ".$row['LNAME'] ?></p>
                <p><?= $row['Address']?></p>
                <p><?= date( 'd.m.Y H:i:s',strtotime($row['OTIME']))?></p>
                <p><?= $row['Total'] ?></p>
                <p><?= $row['Status']?></p>
                <p><a href="singleorder.php?id=<?=$row['OID']?>">Detalji</a></p>
            </div>
        <?php endwhile; ?>


    </div>
</div>


<?php
include ('../assets/includes/footer.php');
unset($_SESSION['msg']);
?>

</body>
</html>





