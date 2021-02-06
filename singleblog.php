<?php
session_start();
include('assets/includes/db.php');

$id=$_GET['id'];

if($statement=$conn->prepare("select * from blog where BID=?")){
    $statement->bind_param('s',$id);

    $statement->execute();

    $statement->bind_result($ID, $Naslov, $Tekst, $Datum, $User, $Image, $Deleted);

    $statement->fetch();
}
else
{
    $error = $conn->errno . ' ' . $conn->error;
    echo $error;
}
$title= $Naslov.' - Kraljica';

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
<div class="container py-5">

    <h1>Blog - <?= $Naslov ?></h1>
    <hr>
    <p>Postavljeno <?= $Datum ?> </p>

    <div class="container">
        <div class="container p-2 py-3 ">
                <img src="images/blog/<?= $Image ?>" align="left" class="me-3 mb-3" width="30%" alt="Blog image">

                <p style="text-align: justify">
                    <?=  $Tekst ?>
                </p>

        </div>
    </div>


    <?php if(isset($_SESSION['id'])): ?>
        <a href="user/deleteblog.php?id=<?= $ID ?>">Izbriši</a>
        <a href="user/updateblog.php?id=<?= $ID?>">Uredi</a>
    <?php endif; ?>

</div>




<?php
include ('assets/includes/footer.php');
?>



</body>
</html>