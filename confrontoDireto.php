<?php require("controllers/checkSession.php"); ?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Home</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css"/>
    <link rel="stylesheet" href="css/style.css"/>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>




</head>
<body>
<?php include("header.php"); ?>

<main>
    <div>

        <div  style=" background-color: #0D47A1;">
            <div style="margin-bottom: 10%;" >
                <div style="float:rigth; margin-right: 1%; margin-top: 1%" class="input-field col s6 m6">
                    <img class="circle responsive-img  " src="img/pessoa.jpg" width="100" height="100" >
                    <select id="oponente" style="margin-top: 20%;" class="icons right circle">
                        <option value="" disabled selected>Oponente</option>
                        <option value="" data-icon="img/logo_login.jpg" class="left circle">"ALGUM OPONENTE"</option>
                        <option value="" data-icon="img/pessoa.jpg" class="left circle">OUTRO OPONENTE</option>
                        <option value="" data-icon="images/yuna.jpg" class="left circle">ADVINHA...</option>
                    </select>

                </div>
            </div>
        </div>
        <!-- VITÓRIAS -->
        <div class="row" >
            <div class="col s4 ">
                <label style="background-color: red;" for="disabled"><h4 style="color: black">VITÓRIAS</h4></label>
                <input class="container" style=" background-color: darkgrey;" disabled value="VITORIAS (do BD)" id="disabled" type="text" class="validate">

            </div>
            <div class="col s1 offset-s1"><h3>X</h3></div>
            <div class="col s4 offset-s1">
                <label style="background-color: red;" for="disabled"><h4 style="color: black">VITÓRIAS</h4></label>
                <input class="container" style="  background-color: darkgray;" disabled value="VITORIAS (do BD)" id="disabled" type="text" class="validate">

            </div>
        </div>

        <!-- GOLS MARCADOS -->
        <div class="row">
            <div class="col s4">
                <label style="background-color: red;" for="disabled"><h5 style="color: black">GOLS MARCADOS</h5></label>
                <input class="container" style=" background-color: darkgrey;" disabled value="GOLS (do BD)" id="disabled" type="text" class="validate">

            </div>
            <div class="col s1 offset-s1"><h3>X</h3></div>
            <div class="col s4 offset-s1">
                <label style="background-color: red;" for="disabled"><h5 style="color: black">GOLS MARCADOS</h5></label>
                <input class="container" style="  background-color: darkgrey;" disabled value="GOLS (do BD)" id="disabled" type="text" class="validate">

            </div>
        </div>

        <!-- MAIOR VITÓRIA -->
        <div class="row">
            <div class="col s4">
                <label style="background-color: red;" for="disabled"><h5 style="color: black">MAIOR VITÓRIA</h5></label>
                <input class="container" style=" background-color: darkgrey;" disabled value="MAIOR VITORIA (do BD)" id="disabled" type="text" class="validate">

            </div>
            <div class="col s1 offset-s1"><h3>X</h3></div>
            <div class="col s4 offset-s1">
                <label style="background-color: red;" for="disabled"><h5 style="color: black">MAIOR VITÓRIAS</h5></label>
                <input class="container" style="  background-color: darkgrey;" disabled value="MAIOR VITORIA (do BD)" id="disabled" type="text" class="validate">

            </div>
        </div>

    </div>
</main>
<?php include("footer.php"); ?>
</body>


</html>


<script>
    $(document).ready(function() {
        $('select').material_select();
    });
</script>