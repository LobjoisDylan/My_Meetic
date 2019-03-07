<?php

class Userdata
{
	public $nom;
	public $prenom;
	public $date_de_naissance;
	public $sexe;
	public $ville;
	public $email;
	public $mot_de_passe;
	public $confirmation;

	public function __construct($nom, $prenom, $date_de_naissance, $sexe, $ville, $email, $mot_de_passe, $confirmation)
	{	
		$this->nom = $nom;
		$this->prenom = $prenom;
		$this->date_de_naissance = $date_de_naissance; 
		$this->sexe = $sexe;
		$this->ville = $ville;
		$this->email = $email;
		$this->mot_de_passe = $mot_de_passe;
		$this->confirmation = $confirmation;
	}

	public function inscription()
	{	
		$bdd = new PDO('mysql:host=localhost;dbname=my_meetic;charset=utf8', 'root', '');
		$stmt = $bdd->prepare("INSERT INTO renseignement(nom, prenom, date_de_naissance, sexe, ville, email, mot_de_passe)VALUES(:nom, :prenom, :date_de_naissance, :sexe, :ville, :email, md5(:mot_de_passe))");
		$stmt->bindvalue(':nom', $this->nom);
		$stmt->bindvalue(':prenom', $this->prenom);
		$stmt->bindvalue(':date_de_naissance', $this->date_de_naissance);
		$stmt->bindvalue(':sexe', $this->sexe);
		$stmt->bindvalue(':ville', $this->ville);
		$stmt->bindvalue(':email', $this->email);
		$stmt->bindvalue(':mot_de_passe', $this->mot_de_passe);

		$date = $this->date_de_naissance;
		$date1 = date("Y-m-d");
		$return1 = explode("-", $date);
		$return2 = explode("-", $date1);
		$calcul = $return2[0] - $return1[0];

		$debug_inscription = true;
		$debug = true;

		if($this->email):
			$stm = $bdd->prepare('SELECT email FROM renseignement WHERE email = :email');
			$stm->bindvalue(':email', $this->email);
			$stm->execute();

			$nombre = 0;
			foreach($stm as $email):
				$verif = $email['email'];
				$nombre++;
			endforeach;

			if($nombre > 0 && $debug == true):
				echo "Cet email est déjà pris <br>";
				$debug = false;
			endif;
		endif;

		if($this->mot_de_passe != $this->confirmation && $debug_inscription == true):
			echo "Le mot de passe est différent <br>";
			$debug_inscription = false;
		endif;

		if($calcul > 18 && $debug_inscription == true && $debug == true):
			$stmt->execute();
			echo "Vous avez été inscrit";
		endif;

		if($calcul < 18):
			echo "Vous n'avez pas l'âge légal pour vous inscrire...<br>";
		endif;
	}
}


