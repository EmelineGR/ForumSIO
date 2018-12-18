
<?php
	include ('Debut.php'); 
	if (!isset($_GET['id_SC'])) {
		echo 'Sous catégorie non défini.';
	}
	else 
	{
?>
		<div class="SC">
		<table width=100%>
		<tr>
		<td>
		<?php
		include('../ConnexionSQL.php');
		$sql = $connexion->prepare('SELECT * FROM sous_categorie WHERE RefSC="'.$_GET['id_SC'].'" ');
		$sql->execute();
				while($SC = $sql->fetch()) //On affiche chaque sujet
				{
					echo '<tr><td class="TitrePage">';
					echo $SC['NomSC']; //Affichage du nom du sujet
					echo '</td></tr>';
					if($_GET['id_M']>0)//si membre permet de créer un nouveau sujet
					{
						echo 
							'<div class="Boutton">
								<a href="../Formulaire/FormuAddS.php?id_SC=' , $SC['RefSC'] , '&amp;id_M=',$_GET['id_M'],'">
									Ajouter un sujet
								</a>
							</div>';
					}			
				}
		?>	
		</td>
		</tr>
	<?php
		// on se connecte à notre base de données
		include('../ConnexionSQL.php');

		// on prépare notre requête
		$sql = $connexion->prepare('SELECT * FROM sujet WHERE RefSC="'.$_GET['id_SC'].'" ');
		$sql->execute();
			while($sujet = $sql->fetch()) //On affiche chaque sujet
			{
				echo '<tr class="Ligne"><td class="LienFo">';
				echo '<a href="AffS.php?id_S=' , $sujet['RefS'] , '&amp;id_M=',$_GET['id_M'],'">',$sujet['NomS'];
				echo '</td></tr>';
			}
	}
	?>
	</table>
	</div>
<br />
<?php
include ('Fin.php');
?>