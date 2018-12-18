<?php
	$IDM = $_POST['IDmemb'];
	header('location:http://localhost/Site/Affichage/Acceuil.php?id_M='.$_POST['IDmemb']);
	include("../ConnexionSQL.php");
	
	
	$NomSC = $_POST['NomSC'];
	$NomCat = $_POST['NomCat'];
	switch ($NomCat)
	{
		case "SLAM":
			$NomCat = 1;
			break;
		case "SISR":
			$NomCat = 2;
			break;
		case "Commun":
			$NomCat = 3;
			break;
	}	
	$requete = $connexion->prepare('INSERT INTO Sous_categorie(NomSC, RefCat) VALUES(:NomSC,:NomCat)'); 
	$requete->bindValue(':NomSC', $NomSC, PDO::PARAM_STR);
	$requete->bindValue(':NomCat', $NomCat, PDO::PARAM_STR);
	$requete->execute()
?>
