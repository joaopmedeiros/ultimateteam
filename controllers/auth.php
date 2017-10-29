<?php
	// Apenas para testes
	session_start();
	$users = array('admin' => 'admin');

	$user = $_POST["user"];
	$pass = $_POST["password"];

	if(array_key_exists($user, $users) && $pass == $users[$user]) {
		$_SESSION['username'] = $user;
		echo "sucesso";
	} else {
		header('HTTP/1.0 401 Unauthorized');
		die("ERROW!");
	}
?>