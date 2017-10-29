<?php
  require_once 'controllers/queries.php';
  require_once 'controllers/checkSession.php';
?>
  	
<main>
  <div class="container" style="margin-top:20px;">
    <h4>Registro de Partida</h4>
    <hr />
    <div class="row">
      <form class="col s12" action="insertPartida.php" method="post">
        <div class="row">
          <div class="input-field col s6 m6">
            <input disabled value="<?php echo $u->getId(); ?>" id="idMandante" name="idMandante" type="hidden" class="validate">
            <input disabled value="<?php echo $u->getNome(); ?>" id="nomeMandante" name="nomeMandante" type="text" class="validate">
            <label for="disabled">Mandante</label>
          </div>

          <div class="input-field col s6 m6">
            <select class="icons" id="idAdversario" name="idAdversario">
              <option value="" disabled selected>Seu adversário</option>

              <?php
                $html = "";
                foreach(getAdversarios($u->getId()) as $t){
                  $html = $html . '
                    <option value="' .$t['idusuario']. '" data-icon="img/users/' .$t['nome']. '.jpg" class="left circle">' .$t['nome']. '</option>
                  ';
                }
                echo $html;
              ?>
            </select>
            <label>Visitante</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6 m6">
            <select class="icons" id="idTimeMandante" name="idTimeMandante">
              <option value="" disabled selected>Escolha o time</option>

              <?php
                $html = "";
                foreach(getTimes() as $t){
                  $html = $html . '
                    <option value="' .$t['idtime']. '" data-icon="img/teams/' .$t['idtime']. '.png" class="left circle">' .$t['nome']. '</option>
                  ';
                }
                echo $html;
              ?>
            </select>
            <label>Seu time</label>
          </div>

          <div class="input-field col s6 m6">
            <select class="icons" id="idTimeVisitante" name="idTimeVisitante">
              <option value="" disabled selected>Escolha o time</option>

              <?php
                $html = "";
                foreach(getTimes() as $t){
                  $html = $html . '
                    <option value="' .$t['idtime']. '" data-icon="img/teams/' .$t['idtime']. '.png" class="left circle">' .$t['nome']. '</option>
                  ';
                }
                echo $html;
              ?>
            </select>
            <label>Time adversário</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s5 m5">
            <input placeholder="" id="gols_pro" name="gols_pro" type="number" class="validate">
            <label for="gols_pro">Gols Pró</label>
          </div>
          <div class="input-field col s2 m2 center-align">
          X
          </div>
          <div class="input-field col s5 m5">
            <input placeholder="" id="gols_contra" name="gols_contra" type="number" class="validate">
            <label for="gols_contra">Gols Contra</label>
          </div>
        </div>
        <div class="row">
          <div class="col s12 m12 center-align">
            <button class="btn btn-large waves-effect waves-light" type="submit" name="action">Registrar Partida</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</main>

