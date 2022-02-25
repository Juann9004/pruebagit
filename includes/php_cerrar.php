<?php
session_start();
$_SESSION['user_name']=NULL;
$_SESSION['user_email_address']=NULL;
$_SESSION['user_id']=NULL;
$_SESSION['user_class']=NULL;

header('Location:../vista/login.php');
?>