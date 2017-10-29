<?php
	require_once 'Conexao.php';

	class Usuario {
		function __construct() {
			$cConexao = new Conexao();
		}

		function Login($usuario, $senha) {
			try {
				$cConexao = new Conexao();
				$pdo = $cConexao->Conectar();
				
				$selectUsuario = $pdo->prepare('SELECT * FROM usuario WHERE nome = ?');
				$selectUsuario->bindValue(1, $usuario, PDO::PARAM_STR);
				$selectUsuario->execute(array($usuario));
				
				if($selectUsuario->rowCount() == 1) {
					$arrayUsuario = $selectUsuario->fetch(PDO::FETCH_ASSOC);
					
					if($arrayUsuario['senha'] == $senha) {
						session_start();
						$_SESSION['idusuario'] = $arrayUsuario['idusuario'];
						$_SESSION['nome'] = $arrayUsuario['nome'];
						$_SESSION['email'] = $arrayUsuario['email'];
						$_SESSION['logado'] = TRUE;
						return true;
					}
				}
				return false;
			} catch (Exception $e) {
				die($e->getMessage());
			}
		}

		function ValidarAcesso() {
			session_start();
			if(!isset($_SESSION['logado'])) {
				session_unset();
				session_destroy();
				if(basename($_SERVER['PHP_SELF']) != "login.php") {
					header('Location: login.php');
				}
			}
			// Caso esteja na página de login
			else if(basename($_SERVER['PHP_SELF']) == "login.php") {
				header('Location: index.php');
				echo "Outra coisa";
			}
		}

		function Logout() {
			session_start();
			session_unset();
			session_destroy();
			setcookie('usuario_gravado');
			setcookie('senha_gravada');
			header('Location: login.php');
		}

		function getId() {
			return $_SESSION['idusuario'];
		}
		
		function getNome() {
			return $_SESSION['nome'];
		}

		function getEmail() {
			return $_SESSION['email'];
		}
	}