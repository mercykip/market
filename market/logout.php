<?php
include 'login.php';
//unseting/destroying the sessions
unset($_SESSION['superuser']);
unset($_SESSION['vendor']);
unset($_SESSION['buyer']);
session_destroy();
header('location:index.php');
?>