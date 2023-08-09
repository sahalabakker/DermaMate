<?php
session_start();
$_SESSION['email']='';
unset($_SESSION['email']);
unset($_SESSION['status']);
session_destroy();
header('location:login/web/index.php');
?>