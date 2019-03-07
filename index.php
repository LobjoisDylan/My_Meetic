<!DOCTYPE html>
<html lang="fr">
<head>
	<title>My Meetic</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="styles.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
</head>

<body>
	<?php include('php_inscription.php'); ?>
	<header>
		<div class="container">
			<h1 class="center">Inscription</h1>
			<form action="index.php" method="post">
				<div class="row contain-input">
					<div class="col-lg-4">
						<input type ="text" class="form-control" id ="nom" name ="nom" placeholder="nom"> 
					</div>
					<div class="col-lg-4">
						<input type ="text" class="form-control" id ="prenom" name ="prenom" placeholder="prenom">
					</div>

					<div class="col-lg-4">
						<input type ="date" class="form-control" id ="date" name ="date_de_naissance">
					</div>
				</div>

				<div class="row contain-input">
					<div class="col-lg-4">
						<select class="form-control" id="sexe" name="sexe">
							<option value="" id="null">Sexe</option>
							<option value="Homme" id="femme">Homme</option>
							<option value="Femme" id="homme">Femme</option>
							<option value="Autre" id="autre">Autre</option>
						</select>
					</div>

					<div class="col-lg-4">
						<input type ="text" class="form-control" id ="ville" name ="ville" placeholder="ville">
					</div>

					<div class="col-lg-4">
						<input type ="email" class="form-control" id ="email" name ="email" placeholder="email">
					</div>
				</div>

				<div class="row contain-input">
					<div class="col-lg-6">
						<input type ="password" class="form-control" id="password" name ="mot_de_passe" placeholder="mot de passe">
					</div>

					<div class="col-lg-6">
						<input type ="password" class="form-control" id= "confirmation" name ='confirmation' placeholder="confirmation">
					</div>
				</div>

				<div class="row">
					<div class="col-lg-12">
						<input type="submit" class="btn btn-primary btn-lg btn-block" value="S'inscrire">
					</div>
				</div>

				<div class="row">
					<div class="col-lg-12">
						<a class="btn btn-success btn-lg btn-block" href="connexion.php" role="button">Déjà inscrit ? Se connecter</a>
					</div>
				</div>

				<?php

				$bool = true;
				foreach($_POST as $post):
					if(empty($post)):
						$bool = false;
					endif;
				endforeach;

				if($bool == true):
					if(isset($_POST['nom'])):
						$formulaire = new Userdata($_POST['nom'], $_POST['prenom'], $_POST['date_de_naissance'], $_POST['sexe'], $_POST['ville'], $_POST['email'], $_POST['mot_de_passe'], $_POST['confirmation']);
						$formulaire->inscription();
					endif;
				endif;

				if($bool == false):
					echo "Veuillez remplir tout les champ";
				endif;
				?>
			</form>
		</div>
	</header>
</body>
</html>