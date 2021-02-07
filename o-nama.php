<?php
session_start();
include('assets/includes/db.php');

$title = "O nama - Kraljica";
?>
<!doctype html>
<html lang="en">
<?php
include ('assets/includes/header.php');
?>
<style>
    .align{
        text-align: justify;
    }
</style>
<body>

<?php
include ('assets/includes/navbar.php');
?>
<div  class="container py-5">

    <div>
        <h1>O nama</h1>
        <hr>
        <p class="align">Poljoprivredna proizvodnja “Malinica” osnovana je 2016. godine s ciljem uzgoja i prerade jagodičastog i bobičastog voća. Već na samom početku jedan proizvod je dobio veliku pažnju konzumenata – liker od malina “Malinica”. Ubrzo smo počeli proizvoditi likere i od ostalog dostupnog voća, te smo koristeći tradicionalne recepte i način pripreme, vrlo brzo osvojili srca naših sada vjernih kupaca. Tako je unutar naše proizvodnje nastala posebna linija proizvoda Kraljica likeri i rakije. Vrlo pažljivim odabirom voća, začina i prirodnih rakija koje koristimo nastaju novi okusi likera koji imaju cilj pružiti nezaboravno hedonističko zadovoljstvo. Budite slobodni da prošećete kroz našu priču na ovoj stranici jer vjerujemo da ćete se osjećati ugodno, ali i naći nešto za sebe.</p>
        <p class="align">Poljoprivredna proizvodnja “Malinica” sa svojom linijom proizvoda Kraljica rakije i likeri pružit će Vam ne samo hedonističko zadovoljstvo nego i omogućiti da pijete zdravo! U želji da Vam to i omogućimo, odlučili smo da umjesto industrijskog alkohola kao bazu za likere uzmemo domaću rakiju, te voće iz ekološkog uzgoja. Obzirom da je naše područje bogato voćem, željeli smo da iskoristimo potencijal koji nas okružuje i dobijemo proizvode koji sigurno imaju bolji kvalitet nego proizvodi koje uvozimo, a istovremeno jačamo i domaću proizvodnju voća.</p>
        <p class="align">Nudimo Vam i posebna pakovanja po Vašoj želji i potrebi kako bi Vaši pokloni bili originalni uz očaravajući okus! Vjerujući da su naši proizvodi savršen poklon za Vama drage osobe, odlučili smo da upravo pakovanju posvetimo mnogo pažnje. Tako za svoje najdraže možete odabrati neke od naših unikatnih pakovanja, posebne kutije urađene dekupaž tehnikom koje nakon konzumiranja likera i rakija ostaju za uspomenu, a mogu se koristiti kao kutije za nakit ili neke druge vrijedne sitnice. Pakovanja zavise od Vaših želja kojima mi nastojimo ugoditi</p>
        <p class="align">Svoje narudžbe možete izvršiti online ili <a href="kontakt.php">nas kontaktirajte za više informacija</a>
    </div>

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/images/SK_Prezentacija-2-11.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assets/images/logo.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assets/images/2%20(1).jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assets/images/malinica.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assets/images/malinovaca.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assets/images/medovaca.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assets/images/medica.jpg" class="d-block w-100" alt="...">
            </div>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>

</div>

<?php
include ('assets/includes/footer.php');
?>



</body>
</html>
