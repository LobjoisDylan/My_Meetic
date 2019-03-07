<?php include('php_modifier.php'); ?>
<?php include('php_connexion.php'); ?>
<?php if(empty($_SESSION)):
	header('location:connexion.php');
	exit;
endif;
?>	

<!DOCTYPE html>
<html lang="fr">
<head>
	<title>My Meetic</title>
	<link href="styles.css" rel="stylesheet" type="text/css">
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
		<div class ="margin"></div>

		<div class="wrapper">
			<div class="container">
				<h1>Modifier mes infos</h1>

				<form action="modifier.php" method="post">
					<input type ="email" id ="email" name ="email_1" placeholder="Nouvelle email">
					<input type ="password" id ="password" name ="mot_de_passe_1" placeholder="Nouveau mot de passe">
					<input type ="submit" name ="submit" value="Valider" style="margin-top:10px; width:150px"><br>

					<?php
					$modif = new Modifier();
					$modif->change();
					?>
				</form>
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
	</script>
</body>
</html>