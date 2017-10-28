<?php
    // Apenas para testes
    $users = array('admin' => 'admin');

    $user = $_POST["user"];
    $pass = $_POST["password"];

    if(array_key_exists($user, $users) && $pass == $users[$user]) {
        echo "sucesso";
    } else {
        die("ERROW!");
    }
?>