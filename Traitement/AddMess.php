<?php
	$RefS = $_POST['RefS'];
	$IDM = $_POST['IDmemb'];
	header('location:http://localhost/Site/Affichage/AffS.php?id_S='.$RefS.'&id_M='.$IDM);
	include("IDMemb.php");
	include("../ConnexionSQL.php");
	date_default_timezone_set('UTC');
	
	
	$Mess = $_POST['Mess'];
	$dateatm = date("d.m.Y");
	$IDMemb = $IDM;
	
	
	$requete = $connexion->prepare('INSERT INTO message(MessMess, DateMess, RefS, IDMemb) VALUES(:MessMess,:DateMess,:RefS, :IDMemb)'); 
	$requete->bindValue(':MessMess', $Mess, PDO::PARAM_STR);
	$requete->bindValue(':DateMess', $dateatm, PDO::PARAM_STR);
	$requete->bindValue(':RefS', $RefS, PDO::PARAM_STR);
	$requete->bindValue(':IDMemb', $IDMemb, PDO::PARAM_STR);
	$requete->execute()
	
?>