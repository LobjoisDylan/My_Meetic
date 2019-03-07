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
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="menu.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
	<header>
		<nav>
			<div class="wrapper">
				<div class="container">
					<h1>Mon compte</h1>
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
				</div>
			</div>
		</nav>
		
		<script src='jquery-3.3.1.js'></script>

		<script>
			$('#menu li').hover(function(){
				$('ul:first',this).css({visibility:"visible", display:"none"}).fadeIn(600).show();
			},function(){

				$('ul:first',this).css({visibility:"hidden"});
			});
		</script>
	</header>
</body>
</html>