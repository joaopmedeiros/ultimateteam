<?php
    require_once 'Conexao.class.php';

    class Grupo {
        function __construct() {
            $cConexao = new Conexao();
        }

        function getId() {
            return $this->id;
        }

        function getNome() {
            return $this->nome;
        }

        function SelecionarGruposPorUsuario($idUsuario) {
            $cConexao = new Conexao();
            $pdo = $cConexao->Conectar();

            $selectGrupo = $pdo->prepare('SELECT * FROM usuario_grupo usuario_idusuario = ?');
            $selectGrupo->bindValue(1, $idUsuario, PDO::PARAM_INT);
            $selectGrupo->execute(array($idUsuario));

            $arrayGrupo = $selectGrupo->fetch(PDO::FETCH_ASSOC);
            $this->id = $arrayGrupo['idtime'];
            $this->nome = $arrayGrupo['nome'];
        }
    }
?>