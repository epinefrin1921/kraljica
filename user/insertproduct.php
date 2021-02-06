<?php

session_start();
if(!isset($_SESSION['id'])){
    header('Location: ../index.php');
    exit();
}

include('../assets/includes/db.php');

$name = $_POST['name'];
$text = $_POST['text'];
$kolicina=$_POST['kolicina'];
$cijena=$_POST['cijena'];
$kategorija=$_POST['kategorija'];
$image = $_FILES['image']['name'];
move_uploaded_file($_FILES['image']['tmp_name'], '../images/' . $image);


mysqli_query($conn, "insert into products(NAME, PRICE, QUANTITY, DESCRIPTION, CATEGORY, IMAGE) values
                           ('{$name}', '{$cijena}', '{$kolicina}','{$text}', '{$kategorija}','{$image}' )");

$_SESSION['msg']='Proizvod dodan!';


header('Location: myaccount.php');
exit();