

<?php
require_once 'class/Grupo.php';
$cGrupo = new Grupo();
?>

<header>
<nav class="nav-extended card-panel teal lighten-2">
<div class="nav-wrapper">
  <a href="#" class="brand-logo"><?php $cGrupo->getNome(); ?></a>
  <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">+</i></a>
  <ul id="nav-mobile" class="right hide-on-med-and-down">
  <li><a href="dashboard.php">Dashboard</a></li>
  <li><a href="#">Perfil</a></li>
  <li><a href="grupos.php">Grupos</a></li>
  <li><a href="confrontoDireto.php">Confronto Direto</a></li>
  <li><a href="#">Configurações</a></li>
  <li><a href="logout.php">Logoff</a></li>
  </ul>

  <ul class="side-nav" id="mobile-demo">
  <li ><img src="img/calebe.jpg" class="circle" width="20%">
  
  <li><a href="#">Calebe</a></li>
  
  <li><a href="dashboard.php">Dashboard</a></li>
  <li><a href="#">Perfil</a></li>
  <li><a href="grupos.php">Grupos</a></li>
  <li><a href="confrontoDireto.php">Confronto Direto</a></li>
  <li><a href="#">Configurações</a></li>
  <li><a href="logout.php">Logoff</a></li>
  </ul>
</div>
<div class="nav-content">
  <ul class="tabs tabs-transparent">
    <li class="tab"><a href="#test1">Partida</a></li>
    <li class="tab"><a herf="#test2" >Classificação</a></li>
    <li class="tab"><a href="#test3">Valendo</a></li>
    
  </ul>
</div>
</nav>
<div id="test1" class="col s12"><?php include("partida.php"); ?></div>
<div id="test2" class="col s12"><?php include("classificacao.php"); ?></div>
<div id="test3" class="col s12"><?php include("valendo.php"); ?></div>

  <script>
    $(".button-collapse").sideNav();
  </script>
</header>