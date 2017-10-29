<?php
  require_once 'controllers/checkSession.php';
  require_once 'controllers/queries.php';

  try {
    $idUsuario1 = $_GET["user1"];
    $idUsuario2 = $_GET["user2"];
    createConfronto($idUsuario1, $idUsuario2);
    $dados = getConfrontos();
    echo json_encode($dados);
  } catch (Exception $e) {
    header('Incorreto!!!', true, 401);
  }

 ?>

