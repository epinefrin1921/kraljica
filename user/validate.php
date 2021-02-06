<?php
session_start();

include ('../assets/includes/db.php');

$email=$_POST['email'];
$pass=$_POST['password'];



if($statement=$conn->prepare("select UID, PASSWORD from users where EMAIL=?")){
    $statement->bind_param('s',$email);

    $statement->execute();

    $statement->bind_result($row, $password);

    $statement->fetch();
}
else
{
    $error = $conn->errno . ' ' . $conn->error;
    echo $error;
}
if(password_verify($pass, $password)){
    $_SESSION['id']=$row;
    $_SESSION['msg']='Dobrodošli!';

    header('Location: myaccount.php');
    exit();
}
else{
    header('Location: login.php');
    exit();
}