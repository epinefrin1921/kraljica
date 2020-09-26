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


<div class="blog">
    <img class="img-responsive" src="images/blog/<?= $Image ?>" alt="">
    <div class="blogInfo">
        <p class="blog__single__date"><?= $Datum ?></p>
        <a href="#"><h1 class="blog__single__title"><?= $Naslov ?></h1></a>
        <p class="blog__single__paragraph"><?= $Tekst ?></p>
    </div>
</div>


<?php if(isset($_SESSION['id'])): ?>
    <a href="user/deleteblog.php?id=<?= $ID ?>">Izbriši</a>
    <a href="user/updateblog.php?id=<?= $ID?>">Uredi</a>
<?php endif; ?>




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