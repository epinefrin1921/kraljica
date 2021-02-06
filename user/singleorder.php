<?php
include('../assets/includes/db.php');
session_start();


$id=$_SESSION['id'];
$query=mysqli_query($conn, 'select * from users where UID = '.$id);
$row2=mysqli_fetch_assoc($query);


$order=$_GET['id'];

if(is_null($order)){
    header('Location: ../error.php');
}

if(!isset($_SESSION['id']) and !isset($_SESSION['vaucher'])){
    header('Location: ../error.php');
    exit();
}
unset($_SESSION['vaucher']);

$query=mysqli_query($conn, 'select * from orders where OID='.$order);
$query2=mysqli_query($conn, 'select * from order_line where OrderID='.$order);
$title = "Uredite narudžbu"
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
    <?php
    if(isset($_SESSION['msg'])){ ?>
        <div class="alert alert-success" role="alert">
            <?php echo $_SESSION['msg']; ?>
        </div>
    <?php }
    ?>
</div>

<?php
include ('../assets/includes/adminheader.php');
?>


<div class="container py-5">
    <h4>Opće informacije: </h4>

    <div class="d-flex justify-content-between flex-wrap">
        <p>Klijent</p>
        <p>Adresa</p>
        <p>Datum</p>
        <p>Cijena</p>
        <p>Status</p>
    </div>

    <hr>
    <?php while($row=mysqli_fetch_assoc($query)): ?>
        <div class="d-flex justify-content-between flex-wrap">
            <p><?= $row['FNAME']." ".$row['LNAME'] ?></p>
            <p><?= $row['Address']?> - <?= $row['City']?> </p>
            <p><?= date( 'd.m.Y H:i:s',strtotime($row['OTIME']))?></p>
            <p><?= $row['Total'] ?>KM</p>
            <p><?= $row['Status']?></p>
        </div>
    <?php endwhile; ?>

    <hr>

    <h3 class="py-5">Informacije o proizvodima:</h3>

    <div class="d-flex justify-content-between flex-wrap">
        <p>Naziv</p>
        <p>Kolicina</p>
        <p>Cijena</p>
    </div>

    <hr>

    <?php
    $total=0;
    ?>
    <?php while($row2=mysqli_fetch_assoc($query2)): ?>
        <div class="d-flex  justify-content-between flex-wrap">
            <?php
            $query3 = mysqli_query($conn, "select * from products where PID ='{$row2['ItemID']}'");
            $row3= mysqli_fetch_assoc($query3);
            $total_price=0;
            $total_price+=$row2['Price']*$row2['Quantity'];
            $total+=$total_price;
            ?>
            <p><?= $row3['NAME'] ?></p>
            <p><?= $row2['Quantity'] ?> kom</p>
            <p><?= $total_price ?>KM</p>
        </div>
    <?php endwhile; ?>
    <div class="container py-5">
        <h3>Ukupno:  <?= $total?> KM</h3>
    </div>

    <?php if(isset($_SESSION['id'])){ ?>

        <p>Promijeni status: </p>
        <form action="changestatus.php?id=<?=$order?>" method="post">
            <select class="form-control" name="status" id="status" required>
                <option value="" selected disabled hidden>Odaberite status</option>
                <option value="cekanje">Čekanje</option>
                <option value="poslano">Poslano</option>
                <option value="zavrseno">Završeno</option>
            </select>
            <input class="btn btn-dark mt-2" type="submit" value="Promijeni">
        </form>
    <?php } ?>
</div>






<?php
include ('../assets/includes/footer.php');
?>
