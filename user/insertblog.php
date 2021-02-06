<?php

session_start();
if(!isset($_SESSION['id'])){
    header('Location: ../index.php');
    exit();
}

include('../assets/includes/db.php');

$naslov = $_POST['name'];
$text = $_POST['text'];
$image = $_FILES['image']['name'];
$id = $_SESSION['id'];
move_uploaded_file($_FILES['image']['tmp_name'], '../images/blog/' . $image);


mysqli_query($conn, "insert into blog(HEADLINE, BODY, DATE, USER, IMAGE) values
                           ('{$naslov}', '{$text}', sysdate(), '{$id}','{$image}' )");

$_SESSION['msg']='Blog dodan!';

header('Location: myaccount.php');

exit();