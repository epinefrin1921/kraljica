<?php
session_start();
include('assets/includes/db.php');

$title = "Kontakt - Kraljica";
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

<div class="wrappper info">
    <div>
        <h1>Kontakt</h1>
        <p>PP "Malinica"</p>
        <p>Broj telefona: +387603461615</p>
        <p>email: info@s-kraljica.ba</p>
    </div>
    <div>
        <h1>Posaljite upit</h1>

        <form method="post" action="" class="needs-validation" novalidate>
            <label for="validationCustom01">Email</label>
            <input style="width: 60%" type="email" class="form-control" id="validationCustom01" placeholder="Unesite email" required>
            <div class="valid-feedback">
                Izgleda dobro!
            </div>
            <div class="invalid-feedback">
                Molimo unesite validnu email adresu!
            </div>
            <label>
                <textarea style="width: 60%" name="poruka" placeholder="Unesite poruku" rows="3" class="form-control"></textarea>
            </label>
            <button type="submit" class="btn btn-dark">Posalji</button>
        </form>
    </div>

</div>



<div id="mapa">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d426.7359029839528!2d18.181120380054704!3d43.985725388637626!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475f2f26a28bc1d9%3A0x4dfef91aeb12bdfd!2sMedni%20du%C4%87an!5e0!3m2!1shr!2sba!4v1596828097881!5m2!1shr!2sba" width="100%" height="450" frameborder="0" style="border:0; z-index: 3" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>


<?php
include ('assets/includes/footer.php');
?>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>



    </body>
</html>
