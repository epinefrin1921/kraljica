<?php
session_start();

if(isset($_SESSION['id'])){
    header('Location: ../index.php');
    exit();
}
$title = "Kraljica - login";

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
<body>

<div class="container py-5">
    <div class="wrappper naslovshop">
        <h1>Dobrodošli</h1>
        <hr>
        <p>Ulogujte se na admin portal</p>
    </div>

    <div class="wrappper py-4">
        <form id="contact-form" method="post" action="validate.php">
            <input class="form-control my-2" placeholder="Unesite email" type="email" name="email" id="email" required>
            <input class="form-control my-2" placeholder="Unesite lozinku" type="password" name="password" id="password" required>

            <input id="click" type="submit" class="form-control submit btn btn-dark my-2" value="Login">
        </form>
    </div>
</div>


<?php include ('../assets/includes/footer.php'); ?>



</body>
</html>