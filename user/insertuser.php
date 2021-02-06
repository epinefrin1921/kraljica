<?php

include('../assets/includes/db.php');
session_start();
$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$email = $_POST['email'];
$pass = $_POST['password'];
$pass=password_hash($pass, PASSWORD_DEFAULT);

if(!isset($_SESSION['id'])){
    header('Location: ../index.php');
    exit();
}

mysqli_query($conn, "insert into users(FNAME, LNAME, EMAIL, PASSWORD) values
                           ('{$fname}', '{$lname}', '{$email}','{$pass}')");

$_SESSION['msg']='Administrator dodan!';


header("Location: myaccount.php");
exit();
