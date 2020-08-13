<?php

session_start();

include('../assets/includes/db.php');
$product = $_GET['id'];


if (count($_SESSION['products']) == 1) {
    $_SESSION['products'] = [];
    unset($_SESSION['total']);
    header('Location: ../cart.php');
    exit();
}

foreach ($_SESSION['products'] as $index => $item) {
    if ($item[0] == $product) {

        $query = mysqli_query($conn, 'select * from products where PID=' . $product);
        $row = mysqli_fetch_assoc($query);
        $price = $row['PRICE'];
        $_SESSION['total'] -= $price * $item[1];
        unset($_SESSION['products'][$index]);
    }
}
header('Location: ../cart.php');