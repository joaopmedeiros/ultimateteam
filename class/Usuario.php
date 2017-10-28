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
				header('Location: login.php');
			}
		}

		function Logout() {
			session_start();
			session_unset();
			session_destroy();
			setcookie('usuario_gravado');
			setcookie('senha_gravada');
			header('Location: index.php');
		}

		function getId() {
			return $_SESSION['id_usuario'];
		}

		function getLogin() {
			return $_SESSION['login_usuario'];
		}
		
		function getNome() {
			return $_SESSION['nome_usuario'];
		}
	}