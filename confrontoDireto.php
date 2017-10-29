<?php
	$title = "Confronto direto";
	include("header.php");
	include("controllers/queries.php");
?>

<main>
	<div>
		<div style=" background-color: #0D47A1;">
			<div style="margin-bottom: 10%;" >
				<div style=" margin-right: 1%; margin-top: 1%" class="input-field col s6 m6">
					<img class="circle responsive-img  " style="margin-left: 5%" src="img/pessoa.jpg" width="50"  >
					<select id="oponente" style="margin-top: 20%;" class="icons right circle">
						<option value="" disabled selected>Oponente</option>
						<option value="1" data-icon="img/users/marcelo.jpg" class="left circle">"ALGUM OPONENTE"</option>
						<option value="4" data-icon="img/users/calebe.jpg" class="left circle">OUTRO OPONENTE</option>
						<option value="5" data-icon="img/users/jhonata.jpg" class="left circle">ADIVINHA...</option>
					</select>
				</div>
			</div>
		</div>
		<!-- VITÓRIAS -->
		<div class="row" >
			<div class="col s4 ">
				<label style="background-color: red;" for="disabled"><h4 style="color: black">VITÓRIAS</h4></label>
				<input class="container" style=" background-color: darkgrey;" disabled id="user1_vitorias" type="text" class="validate">
			</div>
			<div class="col s1 offset-s1"><h3>X</h3></div>
			<div class="col s4 offset-s1">
				<label style="background-color: red;" for="disabled"><h4 style="color: black">VITÓRIAS</h4></label>
				<input class="container" style="  background-color: darkgray;" disabled id="user2_vitorias" type="text" class="validate">
			</div>
		</div>

		<!-- DERROTAS -->
		<div class="row" >
			<div class="col s4 ">
				<label style="background-color: red;" for="disabled"><h4 style="color: black">DERROTAS</h4></label>
				<input class="container" style=" background-color: darkgrey;" disabled id="user1_derrotas" type="text" class="validate">
			</div>
			<div class="col s1 offset-s1"><h3>X</h3></div>
			<div class="col s4 offset-s1">
				<label style="background-color: red;" for="disabled"><h4 style="color: black">DERROTAS</h4></label>
				<input class="container" style="  background-color: darkgray;" disabled id="user2_derrotas" type="text" class="validate">
			</div>
		</div>

		<!-- EMPATES -->
		<div class="row" >
			<div class="col s4 ">
				<label style="background-color: red;" for="disabled"><h4 style="color: black">EMPATES</h4></label>
				<input class="container" style=" background-color: darkgrey;" disabled id="user1_empates" type="text" class="validate">
			</div>
			<div class="col s1 offset-s1"><h3>X</h3></div>
			<div class="col s4 offset-s1">
				<label style="background-color: red;" for="disabled"><h4 style="color: black">EMPATES</h4></label>
				<input class="container" style="  background-color: darkgray;" disabled id="user2_empates" type="text" class="validate">
			</div>
		</div>

		<!-- GOLS MARCADOS -->
		<div class="row">
			<div class="col s4">
				<label style="background-color: red;" for="disabled"><h5 style="color: black">GOLS MARCADOS</h5></label>
				<input class="container" style=" background-color: darkgrey;" disabled id="user1_gols" type="text" class="validate">
			</div>
			<div class="col s1 offset-s1"><h3>X</h3></div>
			<div class="col s4 offset-s1">
				<label style="background-color: red;" for="disabled"><h5 style="color: black">GOLS MARCADOS</h5></label>
				<input class="container" style="  background-color: darkgrey;" disabled id="user2_gols" type="text" class="validate">
			</div>
		</div>

		<!-- GOLS SOFRIDOS -->
		<div class="row">
			<div class="col s4">
				<label style="background-color: red;" for="disabled"><h5 style="color: black">GOLS SOFRIDOS</h5></label>
				<input class="container" style=" background-color: darkgrey;" disabled id="user1_golssofridos" type="text" class="validate">
			</div>
			<div class="col s1 offset-s1"><h3>X</h3></div>
			<div class="col s4 offset-s1">
				<label style="background-color: red;" for="disabled"><h5 style="color: black">GOLS SOFRIDOS</h5></label>
				<input class="container" style="  background-color: darkgrey;" disabled id="user2_golssofridos" type="text" class="validate">
			</div>
		</div>

	</div>
</main>
<?php include("footer.php"); ?>
<script>
	var user1 = 4;
	$(document).ready(function() {
		$('select').material_select();
	});

	$('#oponente').change(function() {
		var user2 = this.value;
		$.get("ajaxConfronto.php?user1=" + user1 + "&user2=" + this.value, function(data) {
			returneddata = JSON.parse(data);
			user1data = null;
			$.each(returneddata, function(i, item) {
				if(item.usuario_idusuario == user1) {
					user1data = item;
				}
			});

			$.each(returneddata, function(i, item) {
				if(item.usuario_idusuario == user2) {
					user2data = item;
				}
			});

			$('#user1_vitorias').val(user1data.vitorias ? user1data.vitorias : 0);
			$('#user1_derrotas').val(user1data.derrotas ? user1data.derrotas : 0);
			$('#user1_empates').val(user1data.empates ? user1data.empates : 0);
			$('#user1_gols').val(user1data.gols_pro ? user1data.gols_pro : 0);
			$('#user1_golssofridos').val(user1data.gols_contr ? user1data.gols_contr : 0);
			$('#user2_vitorias').val(user2data.vitorias ? user2data.vitorias : 0);
			$('#user2_derrotas').val(user2data.derrotas ? user2data.derrotas : 0);
			$('#user2_empates').val(user2data.empates ? user2data.empates : 0);
			$('#user2_gols').val(user2data.gols_pro ? user2data.gols_pro : 0);
			$('#user2_golssofridos').val(user2data.gols_contr ? user2data.gols_contr : 0);

		}).catch(function(e) {
			console.error(e);
		});
	});
</script>