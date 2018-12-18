<?php
	$user='root';
	$pass='';
	$dsn='mysql:host=localhost;dbname=Forum';
	
	try //tentative de connexion (si รงa ne fonctionne pas on fais le catch)
	{
		$connexion= new PDO($dsn, $user, $pass, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}
	catch (PDOExecption $e) //gestion d'erreur
	{
		print "Erreur !:" .$e->getCode().' '.$e->getMessage(). "<br/>";
		die();
	}
?>