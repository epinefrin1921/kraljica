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

            <div class="wrappper blogSvi">
                <h2 class="page-section__title">Nas blog</h2>
                <p class="page-section__paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>

                <div class="blogovi">
                    <?php while($row = mysqli_fetch_assoc($query)): ?>

                    <div class="blog">
                            <img class="img-responsive" src="images/blog/<?= $row['IMAGE'] ?>" alt="">
                           <div class="blogInfo">
                               <p class="blog__single__date"><?= $row['DATE'] ?></p>
                               <a href="singleblog.php?id=<?= $row['BID'] ?>"><h1 class="blog__single__title"><?= $row['HEADLINE'] ?></h1></a>
                               <p class="blog__single__paragraph"><?= $row['BODY'] ?> <a href="singleblog.php?id=<?= $row['BID'] ?>"><span class="blog__single__paragraph--read-more">READ MORE...</span></a></p>
                           </div>
                    </div>
                <?php endwhile; ?>
                </div>

            </div>

<div class="kontakt">
    <div class="wrappper">
        <h1>Imate pitanje?</h1>
        <hr>
        <p>Obratite nam se sa svim mogucim upitima</p>
        <a href="kontakt.php">Kontaktirajte nas</a>
    </div>
</div>



<?php
include ('assets/includes/footer.php');
?>



</body>
</html>