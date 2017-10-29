<?php
    require_once 'Conexao.php';

    class Time {
        function __construct() {
            $cConexao = new Conexao();
        }

        function getId() {
            return $this->id;
        }

        function getNome() {
            return $this->nome;
        }

        function getLiga() {
            return $this->liga;
        }

        function getPais() {
            return $this->pais;
        }

        function SelecionarUmTime($idTime) {
            $cConexao = new Conexao();
            $pdo = $cConexao->Conectar();

            $selectTime = $pdo->prepare('SELECT * FROM time WHERE idtime = ?');
            $selectTime->bindValue(1, $idTime, PDO::PARAM_INT);
            $selectTime->execute(array($idTime));

            $arrayTime = $selectTime->fetch(PDO::FETCH_ASSOC);
            $this->id = $arrayTime['idtime'];
            $this->nome = $arrayTime['nome'];
            $this->liga = $arrayTime['liga'];
            $this->pais = $arrayTime['pais'];
        }
    }
?>