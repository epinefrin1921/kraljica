<?php

session_start();

include('../assets/includes/db.php');

$id = $_GET['id'];

if(!isset($_SESSION['id'])){
    header('Location: ../index.php');

    exit();
}

mysqli_query($conn, 'delete from users where UID=' . $id);

header('Location: employees.php');
exit();
