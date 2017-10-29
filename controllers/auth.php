<?php

	try {
		require_once("../class/Usuario.php");
		$usuario = $_POST["user"];
		$senha = $_POST["password"];
		$u = new Usuario();	
		$logou = $u->Login($usuario, $senha);
		if($logou) {
		} else {
			header('HTTP/1.0 401 Unauthorized');
			die();
		}
	} catch(Exception $e) {
		header('HTTP/1.0 401 Unauthorized');
		die($e->getMessage());

	}
?>