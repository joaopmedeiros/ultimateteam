<?php require_once 'controllers/checkSession.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
	<title>
		<?php echo $title; ?>
	</title>

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="css/materialize.css" media="screen,projection" />
	<link rel="stylesheet" href="css/style.css" media="screen,projection" />

	<body>
			<header>
				<nav class="nav">
					<div class="nav-wrapper teal lighten-2">
						<a href="#!" class="brand-logo" style="white-space: nowrap">Ultimate Team</a>
						<a href="#" data-activates="mobile-demo" class="button-collapse">
							<i class="material-icons">menu</i>
						</a>
						<div class="container-fluid">
							<ul class="right hide-on-med-and-down">
								<li>
									<a href="index.php">Dashboard</a>
								</li>
								<li>
									<a href="#">Perfil</a>
								</li>
								<li>
									<a href="grupo.php">Grupos</a>
								</li>
								<li>
									<a href="confrontoDireto.php">Confronto Direto</a>
								</li>
								<li>
									<a href="criarGrupo.php">Criar Grupo</a>
								</li>
								<li>
									<a href="#">Configurações</a>
								</li>
								<li>
									<a href="logout.php">Sair</a>
								</li>
							</ul>
						</div>
						<ul class="side-nav" id="mobile-demo">
							<li>
								<div class="user-view">
									<div class="background">
										<img src="img/perfil.png" />
									</div>
									<a href="#!user">
										<img class="circle" src="img/users/<?php echo $u->getNome(); ?>.jpg">
									</a>
									<a href="#!name">
										<span class="white-text name">
											<?php echo $u->getNome(); ?>
										</span>
									</a>
									<a href="#!email">
										<span class="white-text email">
											<?php echo $u->getNome(); ?>@acad.pucrs.br
										</span>
									</a>
								</div>
							</li>
							<li>
								<a href="index.php">Dashboard</a>
							</li>
							<li>
								<a href="#">Perfil</a>
							</li>
							<li>
								<a href="grupo.php">Grupos</a>
							</li>
							<li>
								<a href="confrontoDireto.php">Confronto Direto</a>
							</li>
							<li>
								<a href="criarGrupo.php">Criar Grupo</a>
							</li>
							<li>
								<a href="#">Configurações</a>
							</li>
							<li>
								<a href="logout.php">Sair</a>
							</li>
						</ul>
					</div>
				</nav>
			</header>