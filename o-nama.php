<?php
session_start();
include('assets/includes/db.php');

$title = "O nama";
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
        <p>O nama</p>
    </div>
</div>

<div class="onama2">

    <div class="podaci">
        <img src="assets/images/SK_Prezentacija-2-11.png">
        <div class="text">
            <h1>Ko smo mi?</h1>
            <p>Poljoprivredna proizvodnja “Malinica” sa svojom linijom proizvoda S-Kraljica rakije i likeri pružit će Vam ne samo hedonističko zadovoljstvo nego i omogućiti da pijete zdravo! U želji da Vam to i omogućimo, odlučili smo da umjesto industrijskog alkohola kao bazu za likere uzmemo domaću rakiju, te voće iz ekološkog uzgoja.
              Obzirom da je naše područje bogato voćem, željeli smo da iskoristimo potencijal koji nas okružuje i dobijemo proizvode koji sigurno imaju bolji kvalitet nego proizvodi koje uvozimo, a istovremeno jačamo i domaću proizvodnju voća.
               Naši proizvodi nastaju upotrebom isključivo domaćih sastojaka, te tradicionalnog procesa nastanka rakija i likera.</p>
        </div>
    </div>

    <div class="podaci">
        <div class="text">
       <h1>Sta nudimo?</h1>
            <p>Nudimo Vam i posebna pakovanja po Vašoj želji i potrebi kako bi Vaši pokloni bili originalni uz očaravajući okus!
    Vjerujući da su naši proizvodi savršen poklon za Vama drage osobe, odlučili smo da upravo pakovanju posvetimo mnogo pažnje. Tako za svoje najdraže možete odabrati neke od naših unikatnih pakovanja, posebne kutije urađene dekupaž tehnikom koje nakon konzumiranja likera i rakija ostaju za uspomenu, a mogu se koristiti kao kutije za nakit ili neke druge vrijedne sitnice. Pakovanja zavise od Vaših želja kojima mi nastojimo ugoditi</p>
        </div>
        <img src="assets/images/SK_Prezentacija-2-11.png">
    </div>
    <div class="podaci">
        <img src="assets/images/SK_Prezentacija-2-11.png">
        <div class="text">
            <h1>Kako do nas?</h1>
<p>Svoje narudžbe možete izvršiti pozivom na broj: 060 346 16 15; ili mailom: skrivdic@gmail.com , kao i porukom na našim profilima na Facebook:  PP “Malinica”
    Instagram:  malinica.likeri</p>
        </div>

    </div>
</div>


<?php
include ('assets/includes/footer.php');
?>



</body>
</html>
