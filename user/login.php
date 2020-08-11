<?php
session_start();

if(isset($_SESSION['id'])){
    header('Location: ../index.php');
    exit();
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link href="../css/login.css" rel="stylesheet" type="text/css">
</head>
<body>

<body>
<h1><a href="../index.php">Dobrodošli</a></h1>
<main>
    <section class="sek">
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


</body>
</html>