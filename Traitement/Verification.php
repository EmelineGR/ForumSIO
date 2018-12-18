<?php
	include ('../Affichage/Debut.php');
	include('../ConnexionSQL.php');
	$IDmembre = 0;	
	$pseudo = $_POST['PseudoMemb'];
	$mdp = $_POST['MDP'];
	
	/*Vérification identifiant*/
	$sql = $connexion->prepare('SELECT * FROM Membre WHERE PseudoMemb="'.$pseudo.'" AND MDPMemb="'.$mdp.'"');
	$sql->execute();
		while($membre = $sql->fetch())
		{
			$IDmembre = $membre['IDMemb'];
		}
	
	/*Affichage en fonction du membre connecté*/
	echo '<center>';
	if($IDmembre != 0	)
	{
		$sql = $connexion->prepare('SELECT * FROM Membre WHERE IDMemb="'.$IDmembre.'" ');
		$sql->execute();
		while($membre = $sql->fetch())
		{
			echo '<a href="../Affichage/Acceuil.php?id_M=',$IDmembre,'">Bonjour ' . $membre['PseudoMemb'].', ';
		}

		echo 'cliquez pour accèder au site </a>';
	}
	else
		echo '<a href="../Affichage/Acceuil.php?id_M=',$IDmembre,'"> Vous vous êtes trompé d\'identifiant';
	echo '</center>';
?>