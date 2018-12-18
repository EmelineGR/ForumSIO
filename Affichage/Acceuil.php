<?php session_start(); ?>
<?php include ('Debut.php'); ?>
		<div class='index'>
			<?php
				if($_GET['id_M']>0)
				{
					echo 
						'<div class="Boutton">
							<a href="../Formulaire/FormuAddSC.php?id_M=',$_GET['id_M'],'">
								Ajouter une sous-catégorie  
							</a>
						</div>';
				}
			?>
			<div class="Boutton"> <a href="../Formulaire/Connexion.php"> Se connecter </a> </div>
			<div class="Boutton"> <a href="../Formulaire/Inscription.php"> S'inscrire </a> </div>
		</div>
		<div class="categorie-liste">
			<table width=100%>
				<?php
					include('../ConnexionSQL.php');
					$sql= $connexion->prepare('SELECT * FROM Categorie, Sous_Categorie WHERE Categorie.RefCat = Sous_Categorie.RefCat ORDER by Sous_Categorie.NomSC;');
					$sql->execute();
					$categorie = NULL;
					while($element = $sql->fetch()) //On affiche chaque catégorie
					{
						if( $categorie != $element['RefCat'] ) //Si c'est une nouvelle catégorie on l'affiche
						{
							$categorie = $element['RefCat'];
							?>
							<tr>
								<th class="TitrePage">
									<strong>
										<?php echo $element['NomCat'].'<br/>'; ?>
									</strong>
								</th>                
							</tr>
							<?php
								   
						}
						// affiche le nom des sous catégorie
						?>
						<tr>
							<td class="LienSC">
								<?php echo '<a href="AffSC.php?id_SC=',$element['RefSC'],'&amp;id_M=',$_GET['id_M'],'">',$element['NomSC'];?>
							</td>
						</tr>
					<?php
					}
					?>
			</table>
		</div>

<?php include ('Fin.php'); ?>