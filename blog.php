<?php
session_start();
include('assets/includes/db.php');

$query = mysqli_query($conn, 'select * from blog where DateDeleted is null');

$title = 'Blog - Kraljica'
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

        <h1>Blog</h1>
        <hr>
        <p>Aktuelnosti i novosti vezane za Kraljicu</p>
        <?php
        if(isset($_SESSION['msg'])){ ?>
            <div class="alert alert-success" role="alert">
                <?php echo $_SESSION['msg']; ?>
            </div>
        <?php }
        ?>

    <div class="container">
        <?php while($row = mysqli_fetch_assoc($query)): ?>

            <div class="container d-flex p-2 py-5 justify-content-center flex-wrap">
                <div class="col-12 col-md-5">
                    <img src="images/blog/<?= $row['IMAGE'] ?>" width="100%" alt="Blog image">
                </div>

                <div class="col-12 col-md-6 d-flex flex-column p-3">
                    <h3 class="media-heading"><?= $row['HEADLINE'] ?></h3>
                    <p>Postavljeno: <?= $row['DATE'] ?></p>
                    <p>
                        <?=  substr($row['BODY'], 0, 100) ?>
                    </p>
                    <p><a href="singleblog.php?id=<?=$row['BID'] ?>"><span>Pročitaj više</span></a></p>
                </div>

            </div>
        <hr>

        <?php endwhile; ?>
    </div>
</div>



<?php
include ('assets/includes/footer.php');
?>



</body>
</html>