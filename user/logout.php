<?php
session_start();
$_SESSION = [];
session_destroy();
$_SESSION['msg']='Doviđenja!';

header('Location: ../index.php');