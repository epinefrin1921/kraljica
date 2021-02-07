<header class="site-header sticky-top">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ps-3  pt-2">
        <div class="container-fluid">
                <a class="navbar-brand" href="/index.php">Kraljica - Likeri i Rakije</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 justify-content-end">
                        <li class="nav-item"><a class="nav-link active" href="/index.php">Naslovna</a></li>
                        <li class="nav-item"><a class="nav-link" href="/o-nama.php">O nama</a></li>

                        <li class="nav-item"><a  class="nav-link" href="/shop.php">Shop</a></li>
                        <li class="nav-item"><a  class="nav-link" href="/cart.php">Korpa
                                <?php if(isset($_SESSION['total'])): ?>
                                    (<?= $_SESSION['total']?>KM)
                                <?php endif; ?>
                            </a></li>
                        <li class="nav-item"><a  class="nav-link" href="/blog.php">Blog</a></li>
                        <li class="nav-item"><a  class="nav-link" href="/kontakt.php">Kontakt</a></li>
                    </ul>
                </div>

        </div>
    </nav>
</header>
