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
    <div style="background-color: #00b0ff">

        <div  style=" background-color: #0D47A1;">
            <div style="margin-bottom: 10em;" class="m">
                <div style="float:rigth; margin-right: 5em; margin-top: 5gd" class="input-field col s6 m6">
                    <img class="circle 12" src="img/pessoa.jpg" style="align: rigth;" width="150" height="150" >
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
        <div class="row">
            <div class="col s4">
                <label style="background-color: red;" for="disabled"><h3>VITÓRIAS</h3></label>
                <input class="container" style=" background-color: purple;" disabled value="I am not editable" id="disabled" type="text" class="validate">

            </div>
            <div class="col s4 offset-s4">
                <label style="background-color: red;" for="disabled"><h3>VITÓRIAS</h3></label>
                <input class="container" style="  background-color: purple;" disabled value="I am not editable" id="disabled" type="text" class="validate">

            </div>
        </div>

        <!-- GOLS MARCADOS -->
        <div class="row">
            <div class="col s4">
                <label style="background-color: red;" for="disabled"><h3>VITÓRIAS</h3></label>
                <input class="container" style=" background-color: purple;" disabled value="I am not editable" id="disabled" type="text" class="validate">

            </div>
            <div class="col s4 offset-s4">
                <label style="background-color: red;" for="disabled"><h3>VITÓRIAS</h3></label>
                <input class="container" style="  background-color: purple;" disabled value="I am not editable" id="disabled" type="text" class="validate">

            </div>
        </div>

        <!-- MAIOR VITÓRIA -->
        <div class="row">
            <div class="col s4">
                <label style="background-color: red;" for="disabled"><h3>VITÓRIAS</h3></label>
                <input class="container" style=" background-color: purple;" disabled value="I am not editable" id="disabled" type="text" class="validate">

            </div>
            <div class="col s4 offset-s4">
                <label style="background-color: red;" for="disabled"><h3>VITÓRIAS</h3></label>
                <input class="container" style="  background-color: purple;" disabled value="I am not editable" id="disabled" type="text" class="validate">

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