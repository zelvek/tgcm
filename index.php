<!DOCTYPE html>
<?php require "part/menu.php"; ?>




<link href="assets/css/font-awesome.min.css" rel="stylesheet">


	<!-- MAIN IMAGE SECTION -->
	<div id="aboutwrap">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<h2>Ta Gueule c'est Magique<br/>
						La Taverne
					</h2>
				</div>
			</div><!-- row -->
		</div><!-- /container -->
	</div><!-- /aboutwrap -->
  <div class="container">
		<div class="row mt">
			<div class="col-lg-8">

        <script  src= "http://player.twitch.tv/js/embed/v1.js"></script>
        <div id="SamplePlayerDivID"></div>
        <script type="text/javascript">
        	var options = {
        		width: 854,
        		height: 480,
        		channel: "tgcmtv",

        	};
        	var player = new Twitch.Player("SamplePlayerDivID", options);
        	player.setVolume(0.5);
        </script>

<?php

//tgcmtv

//mdp : tgcm2017


 ?>

			</div>
			<div class="col-lg-3 col-lg-offset-1">


        <iframe class="div1" frameborder="0"
                scrolling="no"
                id="chat_embed"
                src="https://www.twitch.tv/tgcmtv/chat"
                height="500"
                width="350"
                scrolling= "yes">
        </iframe>

			</div>
		</div>

	</div><!-- container -->

	<!-- CHART IMAGE SECTION -->
    <div id="">
	    <div class="container">
	      <div class="row mt">
			  <div class="col-lg-15 chart div1 ">









			  </div><!-- col-lg-8 -->


	      </div><!-- /row -->
	    </div><!-- /.container -->
    </div><!-- chartwrap -->

	<!-- SERVICES SECTION -->
	<div id="services">
		<div class="container">
			<div class="row mt">
				<!-- Srvice 1 -->
				<div class="col-lg-1 centered">
					<i class="fa fa-certificate"></i>



				</div>
				<div class="col-lg-3">
					<h3>Le Respect</h3>
					<p>Dans tout jeux le respect est la règle fondamentale, le respect entre joueur est là pour garder l'unicité de notre communauté</p>
				</div>

				<!-- Srvice 2 -->
				<div class="col-lg-1 centered">
					<i class="fa fa-comment-o"></i>
				</div>
				<div class="col-lg-3">
					<h3>La communication</h3>
					<p>N'hésitez pas a parler durant nos lives ça permet de vous faire connaitre et peut être qui sait trouver des partenaires de jeux</p>
				</div>

				<!-- Srvice 3 -->
				<div class="col-lg-1 centered">
					<i class="fa fa-twitch"></i>
				</div>
				<div class="col-lg-3">
					<h3>Twitch</h3>
          <p>N'hésitez pas a nous suivre sur twitch, pour être informé de toute nos emissions, nos lives, nos actualités.                                       </p>
				</div>

				<!-- Srvice 4 -->
				<div class="col-lg-1 centered">
					<i class="fa fa-users"></i>
				</div>
				<div class="col-lg-3">
					<h3>Pour tout le Monde</h3>
					<p>Vous voulez Découvrir un nouveau monde ? de nouvelle contrée ? vous êtes au bon endroit ici vous trouverez tout ce qu'il vous faut</p>
				</div>

				<!-- Srvice 5 -->
				<div class="col-lg-1 centered">
					<i class="fa fa-video-camera"></i>
				</div>
				<div class="col-lg-3">
					<h3> Des Emissions</h3>
					<p>Vous en trouverez beaucoup, il y en aura forcement une qui vous conviendra, ou même vous charmera !</p>
				</div>

				<!-- Srvice 6 -->
				<div class="col-lg-1 centered">
					<i class="fa fa-heart"></i>
				</div>
				<div class="col-lg-3">
					<h3>Tout est Amour</h3>
					<p>Ici tout est paix et amour sauf Lors de grande bataille à ce moment il n'y a plus aucun respect pour sont Adversaire</p>
				</div>

			</div><!-- row -->
		</div><!-- container -->
	</div><!-- services section -->


	<!-- TEAM INTRODUCTION -->
	<div class="container">
		<div class="row mt">
			<div class="col-lg-8">
				<h1>Une Team de Streamer</h1>
			</div>
			<div class="col-lg-4"></div>
		</div><!-- row -->
		<div class="row">
			<div class="col-lg-8">
				<p>Nous sommes tous ici par passion, et pour l'amour des streams et du jeux de role. Nous ne somme pas professionnel en rien.</p>
				<p>Nous espérons que notre production vous plairas, et que vous trouverez ici une réelle communautée avec des gens sympas.</p>
			</div>
			<div class="col-lg-3 col-lg-offset-1">
				<p><b>Amusement</b></p>
				<p class="tm">Le respect d'autrui est demandé c'est plus sympas pour tout le monde =) </p>
			</div>
		</div>

	</div><!-- container -->

	<!-- TEAM MEMBERS -->
	<div class="container">
<div class="row mt centered">
<?php
require "connexion/config.php";




try {
	$db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER,DB_PWD );
}catch(Exception $e){
	die("Erreur SQL : ".$e->getMessage() );
}

$stream=$db->prepare("SELECT * FROM streamer");
$stream->execute();

$stream = $stream->fetchAll(PDO::FETCH_ASSOC);
echo $db->errorInfo()[2];

if (count($stream)<3) {
for ($i=0; $i < count($stream) ; $i++) {
	echo "<div class=\"col-lg-4\">";
	echo "<img class=\"ims\" src=\"".$stream[$i]["image"]."\" alt=\"Gianni\">";
	echo "<div class=\"cardinfo\">";
	echo "<h4><b>".$stream[$i]["nom"]."</b></h4>";
	echo "<h6>Streamer</h6>";
	echo "<p>".$stream[$i]["description"]."</p>";
	echo "	<p><a href=\"".$stream[$i]["twitter"]."\"><i class=\"fa fa-twitter\"></i></a><a href=\"mailto:".$stream[$i]["email_sec"]."\"><i class=\"fa fa-envelope\"></i></a></p>";
	echo "</div>";
	echo "</div>";}
}else {
for ($i=0; $i <3 ; $i++) {
	echo "<div class=\"col-lg-4\">";
	echo "<img class=\"ims\" src=\"".$stream[$i]["image"]."\" alt=\"Gianni\">";
	echo "<div class=\"cardinfo\">";
	echo "<h4><b>".$stream[$i]["nom"]."</b></h4>";
	echo "<h6>Streamer</h6>";
	echo "<p>".$stream[$i]["description"]."</p>";
	echo "	<p><a href=\"".$stream[$i]["twitter"]."\"><i class=\"fa fa-twitter\"></i></a><a href=\"mailto:".$stream[$i]["email_sec"]."\"><i class=\"fa fa-envelope\"></i></a></p>";
	echo "</div>";
	echo "</div>";
}
}

 ?>
 </div></div>
<style media="screen">
.ims{
width: 243px;
height: 400px;



}
</style>






</div><!-- container -->




	<!-- CALL TO ACTION -->
	<div id="call">
		<div class="container">
			<div class="row">
				<h3>Vous voulez nous soutenir ?</h3>
				<div class="col-lg-8 col-lg-offset-2">
					<p>Un petit don est toujours apprécié et nous servira à payer les serveurs et nous payer une bière</p>
					<p><button type="button" class="btn btn-green btn-lg">Faire un Don</button></p>
				</div>
			</div><!-- row -->
		</div><!-- container -->
	</div><!-- Call to action -->

	<div class="container">
		<div class="row mt">
			<div class="col-lg-12">
				<h1>N'hésite pas à nous suivre</h1>
				<p>Pour être au courant de tous les lives et des changement suivez nous sur Nos reseaux sociaux</p>
				<br>
			</div><!-- col-lg-12 -->
		</div><!-- row -->
	</div><!-- container -->
<h1>J'ne fé po de fôtes </h1>

	<!-- SOCIAL FOOTER --->
	<section id="contact"></section>
	<div id="">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 dg">
					<p class="centered"><a href="#"><i class="fa fa-twitch"></i></a></p>
				</div>
				<div class="col-lg-4 lg">
					<p class="centered"><a href="#"><i class="fa fa-twitter"></i></a></p>
				</div>
				<div class="col-lg-4 dg">
					<p class="centered"><a href="#"><i class="fa fa-youtube-play"></i></a></p>
				</div>
			</div><!-- row -->
		</div><!-- container -->
	</div><!-- Social Footer -->

	<!-- CONTACT FOOTER --->


<style>
i{
color: grey;
  }
  i:hover{
  color: black;
    }
</style>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/masonry.pkgd.min.js"></script>
<script src="assets/js/imagesloaded.js"></script>
<script src="assets/js/classie.js"></script>
<script src="assets/js/AnimOnScroll.js"></script>
<script>
new AnimOnScroll( document.getElementById( 'grid' ), {
	minDuration : 0.4,
	maxDuration : 0.7,
	viewportFactor : 0.2
} );
</script>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

  </body>
</html>
