<?php
session_start();
include ('assets/includes/db.php');
$title="Checkout - Kraljica";
$total = $_GET['total'];
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
    <h1>Unesite podatke i uzivajte u piću u roku od 48h.</h1>
    <hr>
    <p>Naručite sigurno i jednostavno, platite pouzeću</p>
    <p>Nakon narudžbe, dobit ćete kod koji možete koristiti da provjerite status narudžbe</p>

</div>

<div class="container">
        <form id="formcheckout" method="post" action="order/placeorder.php">
            <input name="name" type="text" class="form-control mt-2" placeholder="Vaše ime" required>
            <input name="lastname" type="text" class="form-control mt-2" placeholder="Vaše prezime" required>
            <input name="address" type="text" class="form-control mt-2" placeholder="Adresa" required>
            <input name="city" type="text" class="form-control mt-2" placeholder="Grad" required>
            <input name="phone" type="text" class="form-control mt-2" placeholder="Broj telefona" required>
            <input name="email" type="email" class="form-control mt-2" placeholder="Email" required>
            <textarea name="extra" class="form-control mt-2" placeholder="Posebna napomena"></textarea>

            <div class="container my-5">
                <div class="checkout">
                    <h3>Ukupno: <?= $total ?>KM</h3>
                    <p>Dostava: 10KM</p>
                    <h2>Ukupno sa dostavom:  <?= $total+10 ?>KM </h2>
                    <hr>
                </div>
            </div>
            <button type="button" class="btn btn-dark form-control" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Naruči
            </button>

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Narudžba će biti poslana</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Ako potvrdite narudžbu, očekujte naš poziv ubrzo
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Zatvori</button>
                            <button type="submit" id="click" class="btn btn-success submit">Da, siguran sam</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
</div>

<?php
include ('assets/includes/footer.php');
?>


</body>
</html>

