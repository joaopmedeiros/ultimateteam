<html>
<head>
  <meta charset="UTF-8">
  <title>Home</title>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
   
</head>
<body>
  <?php include("header.php"); ?>
      <!--
    </div>
    <div class="nav-content">
      <ul class="tabs tabs-transparent">
        <li class="tab"><a href="#test1">Test 1</a></li>
        <li class="tab"><a class="active" href="#test2">Test 2</a></li>
        <li class="tab disabled"><a href="#test3">Disabled Tab</a></li>
        <li class="tab"><a href="#test4">Test 4</a></li>
      </ul>
    </div>
  </nav>
  <div id="test1" class="col s12">Test 1</div>
  <div id="test2" class="col s12">Test 2</div>
  <div id="test3" class="col s12">Test 3</div>
  <div id="test4" class="col s12">Test 4</div>
-->
<main>
<div class="container">
  <div class="row">
    <form action="/criarGrupo.php">
      <fieldset>
        <div class="col s12">
          <div class="form-group">
            <div class="col s8 offset-l2">
              <input class="file-upload-input-image" onchange="readURL(this);" type="file" accept="image/*">
            </div>
            <div class="col s8 offset-l2">
            
              <input class="form-control" type="text" name="user" placeholder="Digite um nome para a sua equipe">
            </div>
          </div>
          
          <div class="col s10">
            <div class="form-group"> 


          <div class="col s12">
            <div class="pull-right">
              <button type ="submit" class="waves-effect waves-light btn-large col s6 offset-s4"">Criar Grupo</button>


            </div>

          </div>
        </fieldset>
      </form>
    </section>
  </article>
</div>
</main>
  <?php include("footer.php"); ?>
</body>


</html>