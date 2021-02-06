<?php
session_start();
if(!isset($_SESSION['id'])){
    header('Location: ../index.php');
    exit();
}
include ('../assets/includes/db.php');

$id=$_GET['id'];

mysqli_query($conn, 'update blog set DateDeleted=sysdate() where BID='.$id);


$_SESSION['msg']='Blog izbrisan!';

header('Location: ../blog.php');
exit();
