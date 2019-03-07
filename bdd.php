<?php

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=my_meetic;charset=utf8', 'root', '');
}
catch(Exception $e)
{
	die('Erreur : '.$e->getMessage());
}

 /*`id` int(11) NOT NULL AUTO_INCREMENT, */
 /* PRIMARY KEY(`id`) */