<?php include('php_connexion.php'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<title>My Meetic</title>
	<link href="styles.css" rel="stylesheet" type="text/css">
</head>

<body>
	<header>
		<div class="wrapper">
			<div class="container">
				<h1>Connexion</h1>
				<form action="#" method="post">
					<div class ="position"></div>
					<input type ="email" id ="email" name ="email" placeholder="email">
					<div class="position"></div>
					<input type ="password" id="password" name ="mot_de_passe" placeholder="mot de passe">
					<div class ="position"></div>
					<input type ="submit" id="submit" name ="submit">
					<div class ="position"></div>
					<a href ="index.php">Inscription</a><br>
					
					<?php 

					$bool = true;
					foreach($_POST as $post):
						if(empty($post)):
							$bool = false;
						endif;
					endforeach; 

					if($bool == true):
						if(isset($_POST['email'])):
							$connexion = new Connexion($_POST['email'], $_POST['mot_de_passe']);
							$connexion->connexion();
						endif;
					endif;

					if($bool == false):
						echo "Veuillez rentrer tout les champs";
					endif; 
					?>
				</form>
			</div>
		</div>
	</header>
</body>
</html>