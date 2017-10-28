<?php
    require_once 'Conexao.php';

    class Usuario {
        function __construct() {
            $cConexao = new Conexao();
        }

        function Login($usuario, $senha) {
            $cConexao = new Conexao();
            $pdo = $cConexao->Conectar();
            
            $selectUsuario = $pdo->prepare('SELECT * FROM usuario WHERE nome = ?');
            $selectUsuario->bindValue(1, $usuario, PDO::PARAM_STR);
            $selectUsuario->execute(array($usuario));
            
            if($selectUsuario->rowCount() == 1) {
                $arrayUsuario = $selectUsuario->fetch(PDO::FETCH_ASSOC);
                
                if($arrayUsuario['senha'] == $senha) {
                    $_SESSION['idusuario'] = $arrayUsuario['idusuario'];
                    $_SESSION['nome'] = $arrayUsuario['nome'];
                    $_SESSION['logado'] = TRUE;
                    header('Location: main.php');
                } else {
                    return 'Usuário ou senha inválidos!';
                }
            } else{
                return 'Usuário ou senha inválidos!';	
            }
        }

        function ValidarAcesso() {
            if(!($_SESSION['logado'])) {
                header('Location: index.php');
                exit();
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