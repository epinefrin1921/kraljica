<?php
session_start();

include ('../assets/includes/db.php');


$name=$_POST['name'];
$lname=$_POST['lastname'];
$code=$_POST['code'];

if($statement=$conn->prepare("select OID from orders where FNAME=? and LNAME=? and ORDERNO=?")){
    $statement->bind_param('sss',$name, $lname, $code);

    $statement->execute();

    $statement->bind_result($row);

    $statement->fetch();
}
else
{
    $error = $conn->errno . ' ' . $conn->error;
    echo $error;
}

if($row){
    $_SESSION['vaucher']=true;
    $link='Location: ../singleorder.php?id='.$row;
    header($link);
    exit();
}
else{
    header('Location: error.php');
    exit();
}