<?php
	header('location:http://localhost/Site/Formulaire/Connexion.php');
	include("../ConnexionSQL.php");
	 date_default_timezone_set('UTC');
	
	$pseudo = $_POST['PseudoMemb'];
	$mdp = $_POST['MDP'];
	$email = $_POST['Mail'];
	$datenaiss = $_POST['DateNaiss'];
	$descmemb = $_POST['descmemb'];
	$dateatm = date("d.m.Y");
	$nbpost = 0;
	$refrole = "Memb";
	
	
	$requete = $connexion->prepare('INSERT INTO membre(PseudoMemb, MDPMemb, MailMemb, DateNaiMemb, DateInsMemb, NbPostMemb, DesMemb, RefRole) VALUES(:PseudoMemb,:MDPMemb,:MailMemb, :datenaiss, :dateatm, :nbpost, :descmemb, :refrole)'); 
	$requete->bindValue(':PseudoMemb', $pseudo, PDO::PARAM_STR);
	$requete->bindValue(':MDPMemb', $mdp, PDO::PARAM_STR);
	$requete->bindValue(':MailMemb', $email, PDO::PARAM_STR);
	$requete->bindValue(':datenaiss', $datenaiss, PDO::PARAM_STR);
	$requete->bindValue(':dateatm', $dateatm, PDO::PARAM_STR);
	$requete->bindValue(':descmemb', $descmemb, PDO::PARAM_STR);
	$requete->bindValue(':nbpost', $nbpost, PDO::PARAM_STR);
	$requete->bindValue(':refrole', $refrole, PDO::PARAM_STR);
	$requete->execute()
	
?>