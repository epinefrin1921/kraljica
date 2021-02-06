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

$title="Sve narudžbe - Kraljica";
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

<div class="container py-5">
    <h1> Dobrodošli, <?= $row['FNAME'] ?></h1>
    <hr>
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

<div class="container py-5">


    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    Narudžbe na čekanju:
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">

                    <div class="d-flex p-2 justify-content-between flex-wrap">
                        <p>Proizvod</p>
                        <p>Adresa</p>
                        <p>Datum</p>
                        <p>Cijena</p>
                        <p>Status</p>
                        <p>Detalji</p>
                    </div>
                    <hr>

                    <?php while($row=mysqli_fetch_assoc($query)): ?>

                        <div class="d-flex p-2 justify-content-between flex-wrap">
                            <p><?= $row['FNAME']." ".$row['LNAME'] ?></p>
                            <p><?= $row['Address']?></p>
                            <p><?= date( 'd.m.Y H:i:s',strtotime($row['OTIME']))?></p>
                            <p><?= $row['Total'] ?>KM</p>
                            <p><?= $row['Status']?></p>
                            <p><a href="singleorder.php?id=<?=$row['OID']?>">Detalji</a></p>
                        </div>
                        <hr>

                    <?php endwhile; ?>

                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Narudžbe u slanju:
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">

                    <div class="d-flex p-2 justify-content-between flex-wrap">
                        <p>Proizvod</p>
                        <p>Adresa</p>
                        <p>Datum</p>
                        <p>Cijena</p>
                        <p>Status</p>
                        <p>Detalji</p>
                    </div>
                    <hr>

                    <?php while($row=mysqli_fetch_assoc($query2)): ?>

                        <div class="d-flex p-2 justify-content-between flex-wrap">
                            <p><?= $row['FNAME']." ".$row['LNAME'] ?></p>
                            <p><?= $row['Address']?></p>
                            <p><?= date( 'd.m.Y H:i:s',strtotime($row['OTIME']))?></p>
                            <p><?= $row['Total'] ?>KM</p>
                            <p><?= $row['Status']?></p>
                            <p><a href="singleorder.php?id=<?=$row['OID']?>">Detalji</a></p>
                        </div>
                        <hr>

                    <?php endwhile; ?>

                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Završene narudžbe:
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">

                    <div class="d-flex p-2 justify-content-between flex-wrap">
                        <p>Proizvod</p>
                        <p>Adresa</p>
                        <p>Datum</p>
                        <p>Cijena</p>
                        <p>Status</p>
                        <p>Detalji</p>
                    </div>
                    <hr>

                    <?php while($row=mysqli_fetch_assoc($query3)): ?>

                        <div class="d-flex p-2 justify-content-between flex-wrap">
                            <p><?= $row['FNAME']." ".$row['LNAME'] ?></p>
                            <p><?= $row['Address']?></p>
                            <p><?= date( 'd.m.Y H:i:s',strtotime($row['OTIME']))?></p>
                            <p><?= $row['Total'] ?>KM</p>
                            <p><?= $row['Status']?></p>
                            <p><a href="singleorder.php?id=<?=$row['OID']?>">Detalji</a></p>
                        </div>
                        <hr>

                    <?php endwhile; ?>

                </div>
            </div>
        </div>
    </div>

</div>



<?php
include ('../assets/includes/footer.php');
unset($_SESSION['msg']);
?>

</body>
</html>





