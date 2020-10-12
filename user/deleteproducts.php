<?php
session_start();
if(!isset($_SESSION['id'])){
    header('Location: ../index.php');
    exit();
}
include ('../assets/includes/db.php');

$id=$_GET['id'];

mysqli_query($conn, 'update products set DateDeleted=sysdate() where PID='.$id);

header('Location: ../shop.php');
exit();
