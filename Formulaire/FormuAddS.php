<?php include('../Affichage/Debut.php'); ?>
		<div class="form">
			<form method="post" action="../Traitement/AddS.php">
				<fieldset>
					<legend>Ajouter un sujet de discussion</legend>
					<p><input type="hidden" name="IDmemb" value="<?php echo "".$_GET['id_M']."" ?>"></p>
					<p>Sous-Catégorie<input type="hidden" name="RefSC" value="<?php echo "".$_GET['id_SC']."" ?>"></p>
					<p>Nom du sujet: <input type="text" name="NomS"/></p>
					<p><textarea name="Mess" cols="50" rows="10" placeholder="Tapez votre message ici."></textarea></p>
				</fieldset>
				<br/>
				<center>
					<input type="submit" name="Valider" value="Valider" />
					<input type="button" value="Retour" onClick="history.back()"/>
				</center>
			</form>
		</div>
<?php include('../Affichage/Fin.php'); ?>