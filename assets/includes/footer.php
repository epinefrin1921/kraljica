<footer class="footer footer--bg">
    <div class="container text-center">
        <h1 class="footer__title">Medni ducan</h1>
        <ul class="footer__contact-information">
            <li><a href="tel:5555555555"><i class="material-icons">phone</i> +387603461615</a></li>
            <li><a href="mailto:sshariar458@gmail.com"><i class="material-icons">email</i> info@s-kraljica.ba</a></li>
            <li><a href="#"><i class="material-icons">location_on</i> Čaršijska, Visoko 71300</a></li>
        </ul>
    </div>
    <hr style="border: 0;border-top: 1px solid #525B60;display:block;margin-top: 40px;">
    <div class="container text-center">
        <div class="social-icon">
            <ul>
                <li><a href="https://www.facebook.com/medniducanvisoko/"><i class="flaticon-facebook-letter-logo"></i></a></li>
            </ul>
        </div>
        <p class="footer__paragraph">Developed by <a href="https://www.linkedin.com/in/nedim-ajdin/">Nedim Ajdin</a></p>
        <?php if(!isset($_SESSION['id'])) :?>
            <p><a href="/medni ducan/user/login.php">Login</a></p>
        <?php endif; ?>
        <?php if(isset($_SESSION['id'])) :?>
            <p><a href="/medni ducan/user/logout.php">Logout</a></p>
            <p><a href="/medni ducan/user/myaccount.php">My account</a></p>
        <?php endif; ?>
    </div>
</footer>