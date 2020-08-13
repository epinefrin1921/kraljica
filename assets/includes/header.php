<nav class="navbar">

    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a style="font-size: 50px" class="navbar-brand" href="#">Medni dućan</a>
    </div>

    <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
            <li><a href="/medni ducan/index.php">NASLOVNA</a></li>
            <li><a href="/medni ducan/o-nama.php">O NAMA</a></li>
            <li><a href="/medni ducan/shop.php">SHOP</a></li>
            <li><a href="/medni ducan/cart.php">KOPRICA
                    <?php if(isset($_SESSION['total'])): ?>
                        (<?= $_SESSION['total']?>KM)
                    <?php endif; ?>
                </a></li>
            <li><a href="/medni ducan/blog.php">BLOG</a></li>
            <li><a href="/medni ducan/kontakt.php">KONTAKT</a></li>
        </ul>
    </div>
</nav>