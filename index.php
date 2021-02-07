<?php
session_start();
include('assets/includes/db.php');
$title = "Kraljica - likeri i rakije";
?>
<!doctype html>
<html lang="en">
<?php
include ('assets/includes/header.php');
?>
<style>
    .starting{
        height: 100vh;
        background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.4)),
        url("assets/images/photo-1529060532150-a0c935a6d6e5.jpg");
        background-size: cover;
        background-position: center;
        text-shadow: 0 0.05rem 0.1rem rgba(0, 0, 0, 0.5);
        box-shadow: inset 0 0 5rem rgba(0, 0, 0, 0.5);
    }

    .cover-container {
        max-width: 90vw;
    }

    .nav-link {
        padding: 0.25rem 0;
        font-weight: 700;
        color: rgba(255,255,255,0.5);
        margin-left: 1rem;
        border-bottom: 0.25rem solid transparent;
    }

    .nav-link:hover{
        color: rgba(255,255,255,0.5);
        border-bottom-color:rgba(255,255,255,0.5);
    }

    .nav-link.active {
        color: white;
        border-bottom-color:white;

    }

    .btn-secondary, .btn-secondary:hover{
        color: #333;
        text-shadow: none;
    }
</style>
<body>

<div class="starting d-flex text-center text-white bg-dark">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="mb-auto">
            <div>
                <h3 class="float-md-left mb-0 mt-3">Kraljica - likeri i rakije</h3>
                <nav class="nav nav-masthead justify-content-center float-md-right mt-3">
                    <a class="nav-link active" href="/index.php">Naslovna</a>
                  <a class="nav-link" href="/o-nama.php">O nama</a>

                 <a  class="nav-link" href="/shop.php">Shop</a>
                   <a  class="nav-link" href="/cart.php">Korpa
                            <?php if(isset($_SESSION['total'])): ?>
                                (<?= $_SESSION['total']?>KM)
                            <?php endif; ?>
                        </a></li>
                   <a  class="nav-link" href="/blog.php">Blog</a>
                    <a  class="nav-link" href="/kontakt.php">Kontakt</a>
                </nav>
            </div>
        </header>
        <main class="px-3">
            <h1>Kraljica - Kruniši trenutak!</h1>
            <p class="lead"> Dobrodošli na našu stranicu!</p>
            <a href="/shop.php" class="btn btn-lg btn-dark font-weight-bold border-dark bg-dark">Shop</a>
        </main>

        <footer class="mt-auto text-white-50">
            <p> Kraljica - likeri i rakije </p>
        </footer>


    </div>
</div>

<?php
include ('assets/includes/footer_dark.php');
?>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
        crossorigin="anonymous"></script>
</body>
</html>