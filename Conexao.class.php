<?php
    class Conexao extends PDO {
	
        function __construct() {
            $this->Conectar();
        }
        
        function Conectar() {
            try {
                $pdo = new PDO('mysql:host=mysql01.cmit.com.br;dbname=ultimate', 'ultimateteam', 'hackages');
            } catch(PDOException $e) {
                echo $e->getMessage();
            }
            
            return $pdo;
        }

    }
?>