<?php 

class Modifier
{
	public $_SESSION;

	public function __construct()
	{	
		$this->email = $_SESSION['email'];
	}

	public function change()
	{	
		if(isset($_POST['email_1']) && isset($_POST['mot_de_passe_1']))
		{
			$email_2 = $_POST['email_1'];
			$mot_de_passe_2 = $_POST['mot_de_passe_1'];

			$bdd = new PDO('mysql:host=localhost;dbname=my_meetic;charset=utf8', 'root', '');
			$stmt = $bdd->prepare("UPDATE renseignement SET email = :email_1 WHERE email = :email"); 
			// UPDATE renseignement SET email = "dylan1@epitech.eu" WHERE email = "dylan1.lobjois@epitech.eu"
			$stmt_1 = $bdd->prepare("UPDATE renseignement SET mot_de_passe = :mot_de_passe_1 WHERE email = :email"); 
			// UPDATE renseignement SET email = "123456" WHERE email = "dylan1.lobjois@epitech.eu"
			$stmt->bindvalue(':email', $this->email);
			$stmt->bindValue(':email_1', $email_2);
			$stmt_1->bindValue(':email', $this->email);
			$stmt_1->bindvalue(':mot_de_passe_1', $mot_de_passe_2);
			$stmt_1->execute();
			$stmt->execute();
		}
	}
}