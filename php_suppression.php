<?php include('php_connexion.php');

Class Suppression
{
	public $_SESSION;

	public function __construct()
	{	
		$this->email = $_SESSION['email'];
	}
	function delete()
	{
		$bdd = new PDO('mysql:host=localhost;dbname=my_meetic;charset=utf8', 'root', '');
		$stmt = $bdd->prepare("UPDATE renseignement SET suppression = 0 WHERE email = :email"); 
		$stmt->bindvalue(':email', $this->email);
		$stmt->execute();
		header('location:connexion.php');
	}
}

$suppression = new Suppression();
$suppression->delete();