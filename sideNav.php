<?php
//$cUsuario = new Usuario();
//$nomeUsuario = $cUsuario->getNome();

?>


<ul id="slide-out" class="side-nav">
    <li><div class="user-view">
            <div class="background">
                <img src="images/gren-grid.jpg">
            </div>
            <!--<a href="#!user"><img class="circle" src="img/"<?php $nomeUsuario?>.jpg"></a>-->
            <a href="#!name"><span class="white-text name">John Doe</span></a>
            <a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>
        </div></li>
    <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
    <li><a href="#!">Second Link</a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">Subheader</a></li>
    <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
</ul>
<a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>

<script type="text/javascript">
    // Initialize collapse button
    $(".button-collapse").sideNav();
    // Initialize collapsible (uncomment the line below if you use the dropdown variation)
    //$('.collapsible').collapsible();
</script>