<?php
session_start();

if(isset($_SESSION['id'])){
    header('Location: ../index.php');
    exit();
}
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


    <section class="sek wrappper">
        <h1><a href="../index.php">Dobrodošli</a></h1>

        <form class="Login" action="validate.php"  method="post" name="clogin">
            <h2>Logujte se</h2>

            <div class="textbox">
                <i style='font-size:24px' class='far'>&#xf2bd;</i>
                <input  placeholder="Unesite email" type="email" name="email" id="email" required>
            </div>
            <div class ="erroneus" id="usererror"></div>
            <div class="textbox">
                <i class="fas fa-lock"></i>
                <input placeholder="Unesite lozinku" type="password" name="password" id="password" required>
            </div>
            <div class ="erroneus" id="loginerror"></div>
            <input class="butt" type="submit" name="" value="Sign In">
        </form>
    </section>



    <div class="kontakt">
        <div class="wrappper">
            <h1>Imate pitanje?</h1>
            <hr>
            <p>Obratite nam se sa svim mogucim upitima</p>
            <a href="kontakt.php">Kontaktirajte nas</a>
        </div>
    </div>

    <?php
    include ('../assets/includes/footer.php');
    ?>



</body>
</html>