<footer class="container py-5">
    <hr>
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-lg-3">
<!--            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="20" fill="currentColor" class="bi bi-terminal" viewBox="0 0 16 16">-->
<!--                <title>Developer - Nedim Ajdin</title>-->
<!--                <path d="M6 9a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3A.5.5 0 0 1 6 9zM3.854 4.146a.5.5 0 1 0-.708.708L4.793 6.5 3.146 8.146a.5.5 0 1 0 .708.708l2-2a.5.5 0 0 0 0-.708l-2-2z"/>-->
<!--                <path d="M2 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h12z"/>-->
<!--            </svg> <span class="fs-5 fw-bold">Developer</span>-->
            <h5>Developer</h5>
            <div class="col-6 col-md mt-3">
                <ul class="list-unstyled text-small">
                    <li><a class="link-secondary" href="https://www.facebook.com/nedim.ajdin">Facebook</a></li>
                    <li><a class="link-secondary" href="https://www.instagram.com/nedimajdin/">Instagram</a></li>
                    <li><a class="link-secondary" href="https://www.linkedin.com/in/nedim-ajdin/">LinkedIn</a></li>
                    <li><a class="link-secondary" href="https://github.com/epinefrin1921">GitHub</a></li>
                </ul>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-lg-3">
            <h5>Profili</h5>
            <ul class="list-unstyled text-small">
                <?php if(!isset($_SESSION['id'])) :?>
                <li>  <a class="link-secondary" href="/user/login.php">Login</a></li>
                <li>  <a class="link-secondary" href="/checkorder.php">Prati status</a> </li>
                <?php endif; ?>
                <?php if(isset($_SESSION['id'])) :?>
                <li> <p><a class="link-secondary" href="/user/logout.php">Logout</a></p> </li>
                <li>  <p><a class="link-secondary" href="/user/myaccount.php">My account</a></p> </li>
                <?php endif; ?>
            </ul>
        </div>
        <div class="col-xs-12 col-sm-6 col-lg-3">
            <h5>Društvene mreže</h5>
            <ul class="list-unstyled text-small">
                <li><a class="link-secondary" href="https://www.facebook.com/nedim.ajdin">Facebook</a></li>
                <li><a class="link-secondary" href="https://www.instagram.com/nedimajdin/">Instagram</a></li>
                <li><a class="link-secondary" href="https://www.linkedin.com/in/nedim-ajdin/">LinkedIn</a></li>
            </ul>
        </div>

        <div class="col-xs-12 col-sm-6 col-lg-3">
            <h5>Kontakt</h5>
            <ul class="list-unstyled text-small">
                <!--        <div class="widget">-->
                <!--            <h2>Kontaktirajte nas</h2>-->
                <!--            <p>Telefon: +3844554545</p>-->
                <!--            <p>Email: info@kraljica.ba</p>-->
                <!--            <p>B.Mahala Visoko, BiH</p>-->
                <!--        </div>-->
                <!--    </div>-->
                <li><span class="link-secondary" >Telefon: +3844554545</span></li>
                <li> <span class="link-secondary" >Email: info@kraljica.ba</span></li>
                <li><span class="link-secondary" >B. Mahala Visoko, BiH</span></li>
            </ul>
        </div>
    </div>
    <p align="center"  class="d-block mb-3 text-muted"> Kraljica &copy; 2016-<?= date("Y"); ?></p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<?php
unset($_SESSION['msg']);
?>