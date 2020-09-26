<?php
session_start();
include('../assets/includes/db.php');

if(!isset($_SESSION['id'])){
    header('Location: ../index.php');
    exit();
}

$id = $_GET['id'];

mysqli_query($conn, 'update blog set DateDeleted=null where BID=' . $id);

header('Location: ../blog.php');
exit();
