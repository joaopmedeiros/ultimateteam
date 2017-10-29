<?php
    require_once 'controllers/queries.php';
	$nome1 = getNomeUsuario(1);
	$nome2 = getNomeUsuario(2);
	$nome3 = getNomeUsuario(3);
	$nome4 = getNomeUsuario(4);
	$nome5 = getNomeUsuario(5);
?>
<html>

<main>
	
	<div class="row" id="result">
		<div class="col s12">
		<form method="POST">

		
		<div class="col s2 offset-s2">
			<img src="img/calebe.jpg" class="circle" width="100%">
		</div>
		<div class="col s1 ">
			<input type="text" placeholder="0" id="golsDesafiante">
		</div>
		<div class="col s1"><h1>X</h1></div>

		
		<div class="col s1">
			<input type="text" placeholder="0" id="golsDesafiante">
		</div>
		<div class="col s2">
			<img src="users/img/calebe.jpg" class="circle" width="100%">
		</div>
	</form>
		
	</div>
	

	<div class="row">
		<div class="col s10 offset-s5">
			<?php include("shareFB.php"); ?>
		</div>
	</div>
	<div class="row">
		<div class="col s10 offset-s2">
			<input type="text">
			<?php 
			require_once 'controllers/queries.php'
			//inserePartida($gols_desafiante, $gols_desafiado, $idtime_desafiante, $idtime_desafiado, $id_usuario_desafiante, $id_usuario_desafiado);
			//updateRanking();
			//updateRankingOrdenado();
			?>
		</div>
	</div>

	<div class="row">
<div class="input-field col s12">
    	<select>
      		<option value="" disabled selected>Choose your option</option>
      		<option value="1"> 1<?php echo $nome1; ?></option>
      		<option value="2"> 2<?php echo $nome2; ?></option>
			<option value="3"> 3<?php echo $nome3; ?></option>
			<option value="3"> 4<?php echo $nome4; ?></option>
			<option value="3"> 5<?php echo $nome5; ?></option>
    	</select>
    <label>Materialize Select</label>
  </div>
</div>
<div class="input-field col s12">
    <select>
      <option value="" disabled selected>Choose your option</option>
      <option value="1">Option 1</option>
      <option value="2">Option 2</option>
      <option value="3">Option 3</option>
    </select>
    <label>Materialize Select</label>
  </div>
</main>
<script>

        
</script>



</html>