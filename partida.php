<html>




<main>
	<div class="row">
		<div class="col s12">

		<div class="col s3 offset-s1">
			<img src="img/calebe.jpg" class="circle" width="10%">

		</div>

		<div class="col s2 ">
			<input type="text" size="100">
		</div>

		<?php include("shareFB.php"); ?>
		
	</div>

	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.10';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-share-button" data-href="http://localhost/ultimateTeam/shareFB.php" data-layout="button" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Flocalhost%2FultimateTeam%2FshareFB.php&amp;src=sdkpreparse">Compartilhar</a></div>
</main>
	


</html>