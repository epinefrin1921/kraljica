<?php
include ('../assets/includes/db.php');
$id=$_GET['id'];

$quant=$_POST['quantity'];

session_start();

if(!isset($_SESSION['id'])){
    header('Location: ../index.php');
    exit();
}

$query=mysqli_query($conn, 'update products set QUANTITY=QUANTITY + '.$quant.' where PID= '.$id);

$url='Location: ../singleproduct.php?id='.$id;
header($url);
exit();