<?php include('php_rencontre.php'); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<title>My Meetic</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="styles.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="menu.css" rel="stylesheet" type="text/css">
</head>

<body>
	<header>
		<nav>
			<ul id="menu">
				<li><a href ="">Mon compte</a>
					<ul>
						<li><a href="">Info</a>
							<ul>
								<li><a href="compte.php">Mon compte</a></li>
								<li><a href="modifier.php">Modifier mon profil</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li><a href="">Parametre</a>
					<ul>
						<li><a href="php_deco.php">Se déconnecter</a></li>
						<li><a href="suppression.php">Supprimer mon compte</a></li>
					</ul>
				</li>
				<li><a href="rencontre.php">Rencontre</a></li>
			</ul>
		</nav>
		<div class="container">
			<div class="wrapper">
				<h1>Rencontre</h1>
				<form action="rencontre.php" method="post">
					<select name="sexe" style ="background-color:orange">
						<option id ="null_1" value ="null_1">Sexe</option>
						<option id ="homme" value ="homme">Homme</option>
						<option id ="femme" value ="femme">Femme</option>
						<option id ="autre" value ="autre">Autre</option>
					</select>

					<select name="age" style ="background-color:yellow">
						<option id ="null_2" value ="null_2">Age</option>
						<option id ="age_18" value ="age_18">18 - 25</option>
						<option id ="age_25" value ="age_25">25 - 35</option>
						<option id ="age_35" value ="age_35">35 - 45</option>
						<option id ="age_45" value ="age_45">45 +</option>
					</select>

					<select name="ville" style ="background-color:green">
						<option id ="null_3" value ="null_3">Ville</option>
						<option id ="Paris" value ="Paris">Paris</option>
						<option id ="Lyon" value ="Lyon">Lyon</option>
						<option id ="Marseille" value ="Marseille">Marseille</option>
					</select>
					<input type="submit" id="submit" name ="submit_3" style ="background-color:blue"><br>
				</form>
				<div id="carrousel">
					<?php

					$recherche = new Recherche();
					if(isset($_POST['age']) && $_POST['age'] == "age_18"): ?>
						<?php $donnees_1 = $recherche->rencontre();

						foreach($donnees_1 as $recherches):
							?> <div> <?php echo $recherches['prenom'] . " " . $recherches['nom'] . " " . $recherches['sexe'] . " " . $recherches['date_de_naissance'] . " " . $recherches['ville'] . " " . $recherches['age'] . "<br>"; ?> </div> <?php
						endforeach;

					endif;


					if(isset($_POST['age']) && $_POST['age'] == "age_25"): ?>
						<?php $donnees_2 = $recherche->rencontre_1();

						foreach($donnees_2 as $recherches):
							?> <div> <?php echo $recherches['prenom'] . " " . $recherches['nom'] . " " . $recherches['sexe'] . " " . $recherches['date_de_naissance'] . " " . $recherches['ville'] . " " . $recherches['age'] . "<br>"; ?> </div> <?php
						endforeach;
					endif;


					if(isset($_POST['age']) && $_POST['age'] == "age_35"): ?>
						<?php $donnees_3 = $recherche->rencontre_2();

						foreach($donnees_3 as $recherches):
							?> <div> <?php echo $recherches['prenom'] . " " . $recherches['nom'] . " " . $recherches['sexe'] . " " . $recherches['date_de_naissance'] . " " . $recherches['ville'] . " " . $recherches['age'] . "<br>"; ?> </div> <?php
						endforeach;

					endif;


					if(isset($_POST['age']) && $_POST['age'] == "age_45"): ?>
						<?php $donnees_4 = $recherche->rencontre_3();

						foreach($donnees_4 as $recherches):
							?> <div> <?php echo $recherches['prenom'] . " " . $recherches['nom'] . " " . $recherches['sexe'] . " " . $recherches['date_de_naissance'] . " " . $recherches['ville'] . " " . $recherches['age'] . "<br>"; ?> </div> <?php
						endforeach;

					endif;
					?>

				</div>
			</div>
		</div>
	</header>

	<script src='jquery-3.3.1.js'></script>

	<script>

		$('#menu li').hover(function(){
			$('ul:first',this).css({visibility:"visible", display:"none"}).fadeIn(600).show();
		},function(){

			$('ul:first',this).css({visibility:"hidden"});
		});


		$(document).ready(function(){

			var $carrousel = $('#carrousel'), 
			$div = $('#carrousel div'), 
			indexImg = $div.length - 1, 
			i = 0, 
			$currentImg = $div.eq(i); 

			$div.css('display', 'none'); 
			$currentImg.css('display', 'block'); 

			$carrousel.append('<div class="controls"> <span class="prev">Precedent</span> <span class="next">Suivant</span> </div>');

			$('.next').click(function(){ 

				i++; 

				if( i <= indexImg ){
					$div.css('display', 'none'); 
					$currentImg = $div.eq(i); 
					$currentImg.css('display', 'block');
				}
				else{
					i = indexImg;
				}

			});

			$('.prev').click(function(){ 

				i--; 

				if( i >= 0 ){
					$div.css('display', 'none');
					$currentImg = $div.eq(i);
					$currentImg.css('display', 'block');
				}
				else{
					i = 0;
				}
			});
		});


	</script>
</body>

</html>