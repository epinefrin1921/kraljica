<?php

function checkRequiredField($value)
{
    return isset($value) && !empty($value);
}

include('../assets/includes/db.php');
session_start();

if(!isset($_SESSION['id'])){
    header('Location: ../index.php');
    exit();
}

$name = $_POST['name'];
$text = $_POST['text'];
$id=$_GET['id'];


if(!checkRequiredField($_FILES['image']['name'])){
    mysqli_query($conn, "update blog
                           set HEADLINE='{$name}', BODY='{$text}'
                           where BID= ".$id);
}
else{
    $image = $_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'], '../images/blog/' . $image);
    mysqli_query($conn, "update blog
                           set HEADLINE='{$name}', BODY='{$text}', IMAGE = '{$image}'
                           where BID= ".$id);
}

$image = $_FILES['image']['name'];
move_uploaded_file($_FILES['image']['tmp_name'], '../images/blog/' . $image);


header('Location: ../blog.php');
exit();