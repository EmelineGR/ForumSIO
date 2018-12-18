<?php include('../Affichage/Debut.php'); ?>
		<div class="form">
			<form method="post" action="../Traitement/AddSC.php">
				<fieldset>
					<legend>Ajouter une sous-categorie</legend>
					<p><input type="hidden" name="IDmemb" value="<?php echo "".$_GET['id_M']."" ?>"></p>
					<p>Catégorie : 
						<select name="NomCat">
							<option value="SLAM">SLAM</option>
							<option value="SISR">SISR</option>
							<option value="Commun">Commun</option>
						</select>
					</p>
					<p>Nom de la sous-catégorie : <input type="text" name="NomSC"/></p>

				</fieldset>
				<br/>
				<center>
					<input type="submit" name="Valider" value="Valider" />
					<input type="button" value="Retour" onClick="history.back()"/>
				</center>
			</form>
		</div>
<?php include('../Affichage/Fin.php'); ?>