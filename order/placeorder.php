<?php

include('../assets/includes/db.php');
session_start();
$total = $_SESSION['total'];

$fname = $_POST['name'];
$lname = $_POST['lastname'];
$address = $_POST['address'];
$city = $_POST['city'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$extra = $_POST['extra'];
$broj = '';

for ($i = 0; $i < 10; $i++) {
    $broj = $broj . mt_rand(0, 9);
}
$_SESSION['broj'] = $broj;

mysqli_query($conn, "insert into orders(OTIME, FNAME, LNAME, ADDRESS, Phone, Status, Total, City, Extra, email, ORDERNO) 
     values (sysdate(),'{$fname}', '{$lname}','{$address}','{$phone}','cekanje', '{$total}', '{$city}', '{$extra}','{$email}','{$broj}')");

$query = mysqli_query($conn, 'select max(OID) as T from orders');
$row = mysqli_fetch_assoc($query);
$oid = $row['T'];

foreach ($_SESSION['products'] as $line) {
    $item = $line[0];
    $quantity = $line[1];

    mysqli_query($conn, 'update products set QUANTITY=QUANTITY-' . $quantity . " where PID=" . $item);

    $query2 = mysqli_query($conn, "select * from products where PID={$item}");

    $row = mysqli_fetch_assoc($query2);

    $price = $row['PRICE'];

    mysqli_query($conn, "insert into order_line(Quantity, ItemID, OrderID, Price) 
             values ('{$quantity}','{$item}', '{$oid}', '{$price}')");
}


mail($email, 'Order Number: ' . $broj, 'Poštovani, Vaša narudžba je primljena. Broj Vaše narudžbe je ' . $broj . ', a status možete pogledati na našoj stranici:  https://pceliceiteglice.ba/');
mail('nedim.ajdin1@gmail.com', 'Order Number: ' . $broj, 'Poštovani, Imate novu narudžbu. Možete je pogledati na stranici:  https://pceliceiteglice.ba/');


$_SESSION['products'] = [];
unset($_SESSION['isUpdate']);
unset($_SESSION['product_added']);
unset($_SESSION['order_placed']);
unset($_SESSION['total']);
header("Location: ../thankyou.php");
exit();