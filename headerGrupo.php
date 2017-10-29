<header>
<nav class="nav-extended card-panel teal lighten-2">
<div class="nav-wrapper">
  <a href="#" class="brand-logo">Logo</a>
  <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
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
  <script>
    $(".button-collapse").sideNav();
  </script>
</header>