<?php
	include ('Debut.php');
	if (!isset($_GET['id_S'])) 
	{
		echo 'Sous catégorie non défini.';
	}
	else 
	{ ?>
		<div class="Sujet">
			
				<?php
					include('../ConnexionSQL.php');
					$sql = $connexion->prepare('SELECT * FROM sujet WHERE RefS="'.$_GET['id_S'].'" ');
					$sql->execute();
					while($sujet = $sql->fetch()) //On affiche chaque sujet
					{
						echo 
							'<div class="TitrePage">
								'.$sujet['NomS'].'
							</div>';
						if($_GET['id_M']>0)//Si membre peut poster une réponse
						{
							echo 
							'<div class = "Boutton">
								<form method="post" action="AffS.php?id_S=' , $sujet['RefS'] , '&amp;id_M=',$_GET['id_M'],'">
										<input type="submit" name="Rep" Value="Répondre" /> 
								</form>
							</div>';
						}	
					}
				?>
				<table width=100%>
					<?php
						// on se connecte à notre base de données
						include('../ConnexionSQL.php');

						// on prépare notre requête
						$sql = $connexion->prepare('SELECT * FROM message WHERE RefS="'.$_GET['id_S'].'" ');
						$sql->execute();
						while($message = $sql->fetch()) //On affiche chaque sujet
						{
							echo 
								'<tr>
									<td class="Date">
										'.$message['DateMess'].'
									</td>
									<td class = "Mess">
										'.$message['MessMess'];//Affiche le message posté
							
							$sql2 = $connexion->prepare('SELECT * FROM Membre WHERE IDMemb="'.$message['IDMemb'].'"');
							$sql2->execute();
							
							while($message2 = $sql2->fetch())
							{
								echo '</td><td class="Pseudo">';
								echo $message2['PseudoMemb']; //Affiche le pseudo de la personne ayant posté le message
								echo '</td>';
							}	
							echo '</tr>';
						}
					 ?>	
				</table>
		</div> 
		<?php
	}
	if(isset($_POST['Rep']))
	{
		include('../Formulaire/FormuAddMess.php');
	}
		?>
<br />
<?php include ('Fin.php'); ?>