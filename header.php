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
			<nav "nav-extended">
				<div class="nav-wrapper teal lighten-2">
					<a href="#!" class="brand-logo">Ultimate Team</a>
					<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
					<ul class="right hide-on-med-and-down">
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
			</nav>
		</header>