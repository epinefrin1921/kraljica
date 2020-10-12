<nav>
    <div class="wrappper flexbox">
        <a href="/index.php" class="naslov">Kraljica - likeri i rakije</a>
        <div class="meni">
            <a href="/index.php">Naslovna</a>
            <a href="/o-nama.php">O nama</a>
            <a href="/shop.php">Shop</a>
            <a href="/cart.php">Korpa
                <?php if(isset($_SESSION['total'])): ?>
                    (<?= $_SESSION['total']?>KM)
                <?php endif; ?>
            </a>
            <a href="/blog.php">Blog</a>
            <a href="/kontakt.php">Kontakt</a>
        </div>
    </div>
</nav>