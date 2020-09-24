<?php
session_start();
include('assets/includes/db.php');

$title = "Kraljica - likeri i rakije";
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

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="assets/images/naslovna.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="assets/images/naslovna.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="assets/images/naslovna.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <div class="header">
        <p>Kruniši trenutak!</p>
    </div>
</div>

<div class="izrekaKont">
    <div class="wrappper">
        <p class="izreka">"Lorem ipsum dolor sit amet, consectetur adipisicing elit."</p>

    </div>
</div>

<div class="nasi">
    <div class="wrappper">
        <h1>Nasi proizvodi</h1>
        <hr>
        <p>Poljoprivredna proizvodnja “Malinica” sa svojom linijom proizvoda S-Kraljica rakije i likeri pružit će Vam ne samo hedonističko zadovoljstvo nego i omogućiti da pijete zdravo! U želji da Vam to i omogućimo, odlučili smo da umjesto industrijskog alkohola kao bazu za likere uzmemo domaću rakiju, te voće iz ekološkog uzgoja.</p>
    </div>
</div>


<div class="proizvodi">
    <div class="proizvod">
        <img src="assets/images/medovaca.jpg">
        <div>
            <p>Medovača</p>
            <hr class="linija">
            <p>Jaka rakija</p>
        </div>
    </div>
    <div class="proizvod">
        <img src="assets/images/medovaca.jpg">
        <div>
            <p>Medovača</p>
            <hr class="linija">
            <p>Jaka rakija</p>
        </div>
    </div>
    <div class="proizvod">
        <img src="assets/images/medovaca.jpg">
        <div>
            <p>Medovača</p>
            <hr class="linija">
            <p>Jaka rakija</p>
        </div>
    </div>
    <div class="proizvod">
        <img src="assets/images/medovaca.jpg">
        <div>
            <p>Medovača</p>
            <hr class="linija">
            <p>Jaka rakija</p>
        </div>
    </div>
</div>



<div class="onama">
    <div class="wrappper">
        <h1>O nama</h1>
        <hr>
        <p>Poljoprivredna proizvodnja “Malinica” osnovana je 2016. godine s ciljem uzgoja i prerade jagodičastog i bobičastog voća. Već na samom početku jedan proizvod je dobio veliku pažnju konzumenata – liker od malina “Malinica”. Ubrzo smo počeli proizvoditi likere i od ostalog dostupnog voća, te smo koristeći tradicionalne recepte i način pripreme, vrlo brzo osvojili srca naših sada vjernih kupaca. Tako je unutar naše proizvodnje nastala posebna linija proizvoda S-Kraljica likeri i rakije. Vrlo pažljivim odabirom voća, začina i prirodnih rakija koje koristimo nastaju novi okusi likera koji imaju cilj pružiti nezaboravno hedonističko zadovoljstvo. Budite slobodni da prošećete kroz našu priču na ovoj stranici jer vjerujemo da ćete se osjećati ugodno, ali i naći nešto za sebe.</p>

    </div>
</div>


<div class="ikone">
    <div class="wrappper ikone2">
        <div class="item">
            <p><i class="fas fa-wine-bottle fa-4x"></i></p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aut dolor dolorem error hic in, libero, maxime natus numquam odit optio praesentium, quibusdam repudiandae sit tempora tenetur unde ut? Libero. </p>
        </div>
        <div class="item">
            <p><i class="fas fa-apple-alt fa-4x"></i></p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aut dolor dolorem error hic in, libero, maxime natus numquam odit optio praesentium, quibusdam repudiandae sit tempora tenetur unde ut? Libero. </p>

        </div>
        <div class="item">
            <p><i class="fas fa-truck fa-4x"></i></p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aut dolor dolorem error hic in, libero, maxime natus numquam odit optio praesentium, quibusdam repudiandae sit tempora tenetur unde ut? Libero. </p>

        </div>
    </div>
</div>

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