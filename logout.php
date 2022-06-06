<?php
session_start();

unset($_SESSION['verified_user_id']);
unset($_SESSION['idTokenString']);

$_SESSION['status'] = "Logged Out successfully";
            header('Location: login.php');
            exit();
?>