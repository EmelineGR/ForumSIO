<?php

	$RefSC = $_POST['RefSC'];
	$IDM = $_POST['IDmemb'];
	header('location:http://localhost/Site/Affichage/AffSC.php?id_SC='.$RefSC.'&id_M='.$IDM);
	include("../ConnexionSQL.php");
	include("IDMemb.php");
	 date_default_timezone_set('UTC');
	
	$NomS = $_POST['NomS'];
	$NbVueS = 0;
	$NbRepS = 0;
	$Mess = $_POST['Mess'];
	$dateatm = date("d.m.Y");
	$IDMemb = $IDM;
	
	$requete = $connexion->prepare('INSERT INTO sujet(NomS, NbVueS, NbRepS, RefSC) VALUES(:NomS,:NbVueS,:NbRepS, :RefSC)'); 
	$requete->bindValue(':NomS', $NomS, PDO::PARAM_STR);
	$requete->bindValue(':NbVueS', $NbVueS, PDO::PARAM_STR);
	$requete->bindValue(':NbRepS', $NbRepS, PDO::PARAM_STR);
	$requete->bindValue(':RefSC', $RefSC, PDO::PARAM_STR);
	$requete->execute();
	
	$sql = $connexion->prepare('SELECT * FROM sujet');
	$sql->execute();
			while($sujet = $sql->fetch())
			{
				$RefS = $sujet['RefS'];			
			}
			
	$requete = $connexion->prepare('INSERT INTO message(MessMess, DateMess, RefS, IDMemb) VALUES(:MessMess,:DateMess,:RefS, :IDMemb)'); 
	$requete->bindValue(':MessMess', $Mess, PDO::PARAM_STR);
	$requete->bindValue(':DateMess', $dateatm, PDO::PARAM_STR);
	$requete->bindValue(':RefS', $RefS, PDO::PARAM_STR);
	$requete->bindValue(':IDMemb', $IDMemb, PDO::PARAM_STR);
	$requete->execute()		
?>