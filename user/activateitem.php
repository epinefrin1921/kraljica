<?php
session_start();
include('../assets/includes/db.php');

if(!isset($_SESSION['id'])){
    header('Location: ../index.php');
    exit();
}

$id = $_GET['id'];

mysqli_query($conn, 'update products set DateDeleted=null where PID=' . $id);

header('Location: ../shop.php');

$_SESSION['msg']='Proizvod aktiviran!';

exit();
