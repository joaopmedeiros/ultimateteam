<?php require_once 'controllers/checkSession.php'; ?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>Grupo</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/materialize.css" media="screen,projection"/>
    <link rel="stylesheet" href="css/style.css" media="screen,projection"/>	
</head>
<header>
<nav class="nav-extended card-panel teal lighten-2">
<div class="nav-wrapper">
  <a href="#" class="brand-logo">Engenheiro de Software</a>
  <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
  <ul id="nav-mobile" class="right hide-on-med-and-down">
  <li><a href="index.php">Dashboard</a></li>
  <li><a href="#">Perfil</a></li>
  <li><a href="grupo.php">Grupos</a></li>
  <li><a href="confrontoDireto.php">Confronto Direto</a></li>
  <li><a href="#">Configurações</a></li>
  <li><a href="logout.php">Logoff</a></li>
  </ul>

  <ul class="side-nav" id="mobile-demo">
  <li><div class="user-view">
<div class="background">
<img src="img/perfil.png" />
</div>
<a href="#!user"><img class="circle" src="img/users/<?php echo $u->getNome(); ?>.jpg"></a>
<a href="#!name"><span class="white-text name"><?php echo $u->getNome(); ?></span></a>
<a href="#!email"><span class="white-text email"><?php echo $u->getNome(); ?>@acad.pucrs.br</span></a>
</div></li>
    <li><a href="index.php">Dashboard</a></li>
    <li><a href="#">Perfil</a></li>
    <li><a href="grupo.php">Grupos</a></li>
    <li><a href="confrontoDireto.php">Confronto Direto</a></li>
    <li><a href="#">Configurações</a></li>
    <li><a href="logout.php">Logoff</a></li>
  </ul>
</div>
<div class="nav-content">
  <ul class="tabs tabs-transparent">
    <li class="tab"><a href="#partida">Partida</a></li>
    <li class="tab"><a href="#ranking">Ranking</a></li>

    
  </ul>
</div>
</nav>
<div id="partida" class="col s12"><?php include("partida.php"); ?></div>
<div id="test2" class="col s12"><?php include("ranking.php"); ?></div>


  <script>
    $(".button-collapse").sideNav();
  </script>
</header>