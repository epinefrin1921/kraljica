<?php
include('../assets/includes/db.php');
session_start();

if(!isset($_SESSION['id'])){
    header('Location: ../index.php');
    exit();
}

$id=$_SESSION['id'];
$title="Dodaj zaposlenog - Kraljica";
$query=mysqli_query($conn, 'select * from users where UID = '.$id);
$row=mysqli_fetch_assoc($query);
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
<div class="container py-5">


                    <h3>Dodajte administratora stranice</h3>
                    <form action="insertuser.php" method="post">
                        <div>
                            <label for="first_name">First name</label>
                            <input class="form-control my-2" type="text" name="first_name" id="first_name" required>
                        </div>
                        <div>
                            <label for="last_name">Last name</label>
                            <input class="form-control my-2" type="text" name="last_name" id="last_name" required>
                        </div>
                        <div>
                            <label for="email">Email</label>
                            <input class="form-control my-2" type="email" name="email" id="email" required>
                        </div>
                        <div>
                            <label for="password">Password</label>
                            <input class="form-control my-2" type="password" name="password" id="password" required>
                        </div>
                        <input type="submit" class="btn btn-dark" value="Dodaj">
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



