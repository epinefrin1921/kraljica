<footer>
    <div class="opis">
        <div class="mreze">
            <p class="naziv">Drustvene mreze</p>
            <p>
                <i class="social fab fa-twitter fa-2x mreze"></i>
                <i class="social fab fa-facebook-f fa-2x mreze"></i>
                <i class="social fab fa-instagram fa-2x mreze"></i>
                <i class="social fas fa-envelope fa-2x mreze"></i>
            </p>
        </div>
        <div class="widget">
            <h2>Kontaktirajte nas</h2>
            <p>Telefon: +3844554545</p>
            <p>Email: info@kraljica.ba</p>
            <p>B.Mahala Visoko, BiH</p>
        </div>
    </div>
    <div class="credits">
        <p>Developed by Nedim Ajdin</p>
        <?php if(!isset($_SESSION['id'])) :?>
            <p><a href="/user/login.php">Login</a></p>
            <p><a href="/checkorder.php">Prati status</a></p>
        <?php endif; ?>
        <?php if(isset($_SESSION['id'])) :?>
            <p><a href="/user/logout.php">Logout</a></p>
            <p><a href="/user/myaccount.php">My account</a></p>
        <?php endif; ?>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
