<?php
    session_start();
    if(isset($_SESSION['username'])) {
        session_unset($_SESSION['username']);
    }
    if(isset($_SESSION['password'])) {
        session_unset($_SESSION['password']);
    }
    session_destroy();
    header('Location: login.php');
?>