<?php
include('../assets/includes/db.php');
session_start();

if(!isset($_SESSION['id'])){
    header('Location: ../index.php');
    exit();
}

$id=$_SESSION['id'];
$title="Uredi blog - Kraljica";
$query=mysqli_query($conn, 'select * from users where UID = '.$id);
$row=mysqli_fetch_assoc($query);

$bid = $_GET['id'];
$query2 = mysqli_query($conn,'select * from blog where BID = '.$bid);
$row2=mysqli_fetch_assoc($query2);
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


<div class="forma container">
    <h3>Uredite blog</h3>
    <form action="saveblog.php?id=<?= $row2['BID'] ?>" method="post" enctype="multipart/form-data">
        <div>
            <label for="name">Naslov</label>
            <input type="text" name="name" id="name" required value="<?= $row2['HEADLINE'] ?>">
        </div>
        <div>
            <label for="text">Tekst</label>
            <textarea name="text" id="text" required rows="10" cols="60"><?= $row2['BODY'] ?></textarea>
        </div>

        <label for="image">Slika:</label>
        <input type="file" placeholder="Image" id="image" name="image">

        <input type="submit" value="Spremi vijest">
    </form>
</div>


<?php
if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
}
?>



<?php
include ('../assets/includes/footer.php');
unset($_SESSION['msg']);
?>

</body>
</html>
