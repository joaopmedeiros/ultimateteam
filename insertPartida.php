<?php
    require_once 'controllers/queries.php';
    include("header.php");
    
    inserePartida($_POST['gols_contra'], $_POST['gols_pro'], $_POST['idTimeMandante'], $_POST['idTimeVisitante'], $u->getId(), $_POST['idAdversario']);
    updateRanking();
    updateRankingOrdenado();
    header('Location: grupo.php');
?>