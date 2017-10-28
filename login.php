<?php
session_start();
if(isset($_SESSION["username"])) {
	header('Location: index.php');
}
?>

	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Login</title>
		<!-- Material Icon CDN -->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!-- Path of the materialize.min.css file -->
		<link rel="stylesheet" href="css/materialize.min.css" media="screen,projection">
		<!-- Custom css file path -->
		<!--<link rel="stylesheet" href="css/style.css">-->
		<!-- Used as an example only to position the footer at the end of the page.
You can delete these styles or move it to your custom css file -->
		<link href="css/login.css" rel="stylesheet">

		<script type="text/javascript" src="js/jquery-3.2.1.js"></script>
		<script type="text/javascript" src="js/materialize.js"></script>
		<script>
			$(document).ready(function () {
				// the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
				$('.modal').modal();
			});

			$(document).on("click", "#btn_login", function () {
				var user = $('#user').val();
				var pass = $('#password').val();
				
				$.post("controllers/auth.php", { "user": user, "password": pass }, function (data) {
					//console.log(data);
					window.location = 'index.php';
					//Materialize.Toast.removeAll();
					//Materialize.toast('Sucesso!', 10000, 'green');
				}).catch(function (e) {
					Materialize.Toast.removeAll();
					Materialize.toast('Usuário ou senha incorretos', 10000, 'red');
				});
			});
		</script>
	</head>

	<body>
		<div class="section"></div>
		<main>
			<center>
				<div class="section"></div>
				<img src="img/logo_login.jpg" width="250">
				<div class="section"></div>
				<div class="section"></div>
				<div class="section"></div>

				<div class="container">
					<div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

						<form class="col s12" method="post">
							<div class='row'>
								<div class='col s12'>
								</div>
							</div>

							<div class='row'>
								<div class='input-field col s12'>
									<input class='validate' type='text' name='user' id='user' />
									<label for='user'>Usu&aacute;rio</label>
								</div>
							</div>

							<div class='row'>
								<div class='input-field col s12'>
									<input class='validate' type='password' name='password' id='password' />
									<label for='password'>Senha</label>
								</div>
								<label style='float: right;'>
									<a class='pink-text waves-effect waves-light modal-trigger' href='#modal1'>
										<b>Esqueci a senha</b>
									</a>
								</label>
							</div>
							<br />
							<center>
								<div class='row'>
									<button type="button" id="btn_login" name='btn_login' class='col s12 btn btn-large waves-effect indigo'>Login</button>
								</div>
							</center>
						</form>
					</div>
				</div>
				<a href="#modal1" class="modal-trigger">Criar conta</a>
			</center>

			<div class="section"></div>
			<div class="section"></div>
		</main>

		<!-- Modal Structure -->
		<div id="modal1" class="modal">
			<div class="modal-content">
				<h4>N&atilde;o vai dar n&atilde;o</h4>
				<p>S&oacute; lamento</p>
			</div>
			<div class="modal-footer">
				<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Fechar</a>
			</div>
		</div>
	</body>

	</html>