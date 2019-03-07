<?php 

class Recherche
{	
	public $_POST;

	function __construct()
	{
		if(isset($_POST['ville']) && $_POST['sexe'] && $_POST['age']):
			$this->ville = $_POST['ville'];
			$this->sexe = $_POST['sexe'];
			$this->age = $_POST['age'];
		endif;
	}

	public function rencontre()
	{
		$bdd = new PDO('mysql:host=localhost;dbname=my_meetic;charset=utf8', 'root', '');
		$sth_1 = $bdd->prepare("UPDATE renseignement SET age = ROUND(DATEDIFF(DATE(NOW()), date_de_naissance) /365 -1) WHERE age IS NULL");
		$sth_1->execute(); 

		$sth_2 = $bdd->prepare('SELECT * FROM renseignement WHERE age BETWEEN 18 AND 25 AND ville = :ville AND sexe = :sexe AND suppression = 1');
		$sth_2->bindParam(':ville', $this->ville);
		$sth_2->bindParam(':sexe', $this->sexe);
		$sth_2->execute();
		$donnees_1 = $sth_2->fetchAll();
		return $donnees_1;
	}

	public function rencontre_1()
	{
		$bdd = new PDO('mysql:host=localhost;dbname=my_meetic;charset=utf8', 'root', '');
		$sth_3 = $bdd->prepare("UPDATE renseignement SET age = ROUND(DATEDIFF(DATE(NOW()), date_de_naissance) /365 -1) WHERE age IS NULL");
		$sth_3->execute(); 

		$sth_4 = $bdd->prepare('SELECT * FROM renseignement WHERE age BETWEEN 26 AND 35 AND ville = :ville AND sexe = :sexe AND suppression = 1'); //
		$sth_4->bindParam(':ville', $this->ville);
		$sth_4->bindParam(':sexe', $this->sexe);
		$sth_4->execute();
		$donnees_2 = $sth_4->fetchAll();
		return $donnees_2;
	}

	public function rencontre_2()
	{
		$bdd = new PDO('mysql:host=localhost;dbname=my_meetic;charset=utf8', 'root', '');
		$sth_5 = $bdd->prepare("UPDATE renseignement SET age = ROUND(DATEDIFF(DATE(NOW()), date_de_naissance) /365 -1) WHERE age IS NULL");
		$sth_5->execute();

		$sth_6 = $bdd->prepare('SELECT * FROM renseignement WHERE age BETWEEN 36 AND 45 AND ville = :ville AND sexe = :sexe AND suppression = 1');
		$sth_6->bindParam(':ville', $this->ville);
		$sth_6->bindParam(':sexe', $this->sexe);
		$sth_6->execute();
		$donnees_3 = $sth_6->fetchAll();
		return $donnees_3;
	}

	public function rencontre_3()
	{
		$bdd = new PDO('mysql:host=localhost;dbname=my_meetic;charset=utf8', 'root', '');
		$sth_7 = $bdd->prepare("UPDATE renseignement SET age = ROUND(DATEDIFF(DATE(NOW()), date_de_naissance) /365 -1) WHERE age IS NULL");
		$sth_7->execute(); 

		$sth_8 = $bdd->prepare('SELECT * FROM renseignement WHERE age BETWEEN 46 AND 200 AND ville = :ville AND sexe = :sexe AND suppression = 1');
		$sth_8->bindParam(':ville', $this->ville);
		$sth_8->bindParam(':sexe', $this->sexe);
		$sth_8->execute();
		$donnees_4 = $sth_8->fetchAll();
		return $donnees_4;
	}
}



?>