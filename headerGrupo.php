
<?php require_once 'controllers/checkSession.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
		<title><?php echo $title; ?></title>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" href="css/materialize.css" media="screen,projection"/>
		<link rel="stylesheet" href="css/style.css" media="screen,projection"/>		
	</head>
	<body>
		<header>
<nav class="nav-extended card-panel teal lighten-2">
<div class="nav-wrapper">
  <a href="#" class="brand-logo">Grupo</a>
  <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
  <ul id="nav-mobile" class="right hide-on-med-and-down">
  <li><a href="dashboard.php">Dashboard</a></li>
  <li><a href="#">Perfil</a></li>
  <li><a href="grupo.php">Grupos</a></li>
  <li><a href="confrontoDireto.php">Confronto Direto</a></li>
  <li><a href="#">Configurações</a></li>
  <li><a href="logout.php">Logoff</a></li>
  </ul>

  <ul class="side-nav" id="mobile-demo">
  <li ><img src="img/calebe.jpg" class="circle" width="20%">
  
  <li><a href="#">Calebe</a></li>
  
  <li><a href="dashboard.php">Dashboard</a></li>
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
    <li class="tab"><a href="#classificacao" >Classificação</a></li>
   
    
  </ul>
</div>
</nav>
<div id="partida" class="col s12"><?php include("partida.php"); ?></div>
<div id="classificacao" class="col s12"><?php include("classificacao.php"); ?></div>


  <script>
    $(".button-collapse").sideNav();
  </script>
</header>