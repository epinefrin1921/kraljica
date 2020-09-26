<nav>
    <div class="wrappper flexbox">
        <a href="/s-kraljica/index.php" class="naslov">Kraljica - likeri i rakije</a>
        <div class="meni">
            <a href="/s-kraljica/index.php">Naslovna</a>
            <a href="/s-kraljica/o-nama.php">O nama</a>
            <a href="/s-kraljica/shop.php">Shop</a>
            <a href="/s-kraljica/cart.php">Korpa
                <?php if(isset($_SESSION['total'])): ?>
                    (<?= $_SESSION['total']?>KM)
                <?php endif; ?>
            </a>
            <a href="/s-kraljica/blog.php">Blog</a>
            <a href="/s-kraljica/kontakt.php">Kontakt</a>
        </div>
    </div>
</nav>