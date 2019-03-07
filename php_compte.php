<?php

class Information
{
	public $_SESSION;

	public function __construct()
	{	
		$this->nom = $_SESSION['nom'];
		$this->prenom = $_SESSION['prenom'];
		$this->date_de_naissance = $_SESSION['date_de_naissance']; 
		$this->sexe = $_SESSION['sexe'];
		$this->ville = $_SESSION['ville'];
		$this->email = $_SESSION['email'];
		$this->mot_de_passe = $_SESSION['mot_de_passe'];
	}
	public function detail()
	{
		echo "Bonjour voici vos information personnel: <br><br>" . "Nom: " . $this->nom . "<br>" .
		"Prénom: " . $this->prenom . "<br>" .
		"Date de naissance: " . $this->date_de_naissance . "<br>" .
		"Sexe: " . $this->sexe . "<br>" .
		"Ville: " . $this->ville . "<br>" .
		"Email: " . $this->email . "<br>" .
		"Mot de passe:" . $this->mot_de_passe . "<br>";
	}
}	

?>