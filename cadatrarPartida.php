<html>
<head>
  <meta charset="UTF-8">
  <title>Home</title>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
  
</head>
<body>
  <?php include("header.php"); ?>
  	
<main>
<div class="container">

  <div class="input-field col s12 m6">
    <select class="icons">
      <option value="" disabled selected>Choose your option</option>
      <option value="" data-icon="images/sample-1.jpg" class="circle">example 1</option>
      <option value="" data-icon="images/office.jpg" class="circle">example 2</option>
      <option value="" data-icon="images/yuna.jpg" class="circle">example 3</option>
    </select>
    <label>Images in select</label>
  </div>
</div>
</main>
  <?php include("footer.php"); ?>
</body>


</html>

