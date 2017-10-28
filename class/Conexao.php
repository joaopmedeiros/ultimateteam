<?php
    class Conexao extends PDO {
	
        function __construct() {
            $this->Conectar();
        }
        
        function Conectar() {
            try {
                $pdo = new PDO('mysql:host=mysql01.cmit.com.br;dbname=ultimateteam', 'ultimateteam', 'hackages');
            } catch(PDOException $e) {
                die($e->getMessage());
            }
            
            return $pdo;
        }

    }
?>