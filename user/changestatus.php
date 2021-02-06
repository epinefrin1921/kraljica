<?php
session_start();
include ('../assets/includes/db.php');

$id=$_GET['id'];
$status=$_POST['status'];

mysqli_query($conn, "update orders set Status='{$status}' where OID='{$id}'");

$query=mysqli_query($conn, 'select * from orders where OID='.$id);

$row=mysqli_fetch_assoc($query);

$email=$row['email'];

if(0==strcmp($status, 'poslano')){
    mail('nedim.ajdin1@gmail.com','Pčelice i teglica - poslano ', 'Poštovani, poslali ste narudžbu. Kupcu je javljeno da očekuje poziv kurira brze pošte.');
}
if(0==strcmp($status, 'zavrseno')){
    mail('nedim.ajdin1@gmail.com','Pčelice i teglica - zavrseno ', 'Zavrseno');

}
$link='Location: singleorder.php?id='.$id;

$_SESSION['msg']='Status promijenjen!';

header($link);
exit();