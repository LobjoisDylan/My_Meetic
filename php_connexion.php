<?php
session_start();

class Connexion
{
	public $email;
	public $mot_de_passe;

	public function __construct($email, $mot_de_passe)
	{	
		$this->email = $email;
		$this->mot_de_passe = $mot_de_passe;
	}

	public function connexion()
	{
		$bdd = new PDO('mysql:host=localhost;dbname=my_meetic;charset=utf8', 'root', '');	
		if($this->email):
			$co = $bdd->prepare("SELECT * FROM renseignement WHERE email = :email AND mot_de_passe = :mot_de_passe");
			$co->bindvalue(':email', $this->email);
			$co->bindvalue(':mot_de_passe', $this->mot_de_passe);
			$co->execute();
			$data = $co->fetchAll();
			$debug = true;
			$debug_adresse = true;

			if($this->email):
				foreach($data as $email):
					$test = $email['email'];
					$test1 = $email['mot_de_passe'];
					$test2 = $email['prenom'];
					$test3 = $email['nom'];
					$test4 = $email['date_de_naissance'];
					$test5 = $email['sexe'];
					$test6 = $email['ville'];

					if($test == $this->email && $test1 == $this->mot_de_passe && $debug_adresse == true):
						$test_2 = $bdd->prepare("SELECT suppression FROM renseignement WHERE suppression = 1 AND email = :email");
						$test_2->bindvalue(':email', $this->email);
						$test_2->execute();
						$donnees = $test_2->fetch();
						$result = $donnees['suppression'];

						if($result == 1):
							header('location:accueil.php');
							echo "Vous pouvez vous connectez";
							$debug_adresse = false;
						endif;

						if($result == 0):
							echo "Vous avez supprimé votre compte";
							$debug_adresse = false;
						endif;
					endif;
				endforeach;
				if(isset($test)):
					$_SESSION['email'] = $test;
					$_SESSION['mot_de_passe'] = $test1;
					$_SESSION['prenom'] = $test2;
					$_SESSION['nom'] = $test3;
					$_SESSION['date_de_naissance'] = $test4;
					$_SESSION['sexe'] = $test5;
					$_SESSION['ville'] = $test6;
				endif;

				if($debug_adresse == true):
					echo "Mot de passe ou Email invalide";
				endif;
			endif;
		endif;
	}
}