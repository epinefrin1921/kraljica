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

<?php
if(isset($_SESSION['msg'])){ ?>
   <div class="container p-3">
       <div class="alert alert-success" role="alert">
           <?php echo $_SESSION['msg']; ?>
       </div>
   </div>
<?php } ?>
<div class="container d-flex p-2 py-5 justify-content-between flex-wrap">


    <div class="col-12 col-md-5">
        <img src="images/<?= $Image ?>" width="100%" alt="Product image">
    </div>

    <div class="col-12 col-md-6 mt-3 d-flex flex-column align-items-center">
        <?php
        $incart=0;
        if (isset($_SESSION['products'])){
            foreach($_SESSION['products'] as $index=>$item){
                if($item[0]==$ID){
                    $incart=$item[1];
                }}};
        ?>
        <h3 class="media-heading"><?= $Name ?></h3>
        <p><?= $Description ?></p>
        <p>Na stanju: <?= $Quantity-$incart ?> - Cijena: <?= $Price ?>KM</p>

        <p>Dodaj u korpu: </p>
        <form action="order/cart.php?id=<?= $ID ?>" method="post" style="width: 60%">
            <input type="number" step="1" min="1" placeholder="Kolicina" id="quantity" name="quantity"  required max="<?= $Quantity-$incart ?>" class="form-control">
            <input class="btn btn-dark btn-sm form-control mt-2" id="submit" type="submit" value="Dodaj">
        </form>

        <?php if(isset($_SESSION['id'])): ?>
        <div class="container d-flex p-2 py-5 justify-content-center">
            <a class="p-2" href="user/deleteproducts.php?id=<?= $ID ?>">Izbriši</a>
            <a class="p-2" href="user/updateproducts.php?id=<?= $ID?>">Uredi</a>
            <a class="p-2" href="user/addquantity.php?id=<?= $ID ?>">Dodaj novu kolicinu</a>
        </div>
        <?php endif; ?>

    </div>

</div>



    <?php
    include ('assets/includes/footer.php');
    ?>



</body>
</html>
