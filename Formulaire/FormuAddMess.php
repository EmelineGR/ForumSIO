		<div class="form">
			<form method="post" action="../Traitement/AddMess.php">
				<fieldset>
					<legend>Ajouter une réponse</legend>
					<p><input type="hidden" name="IDmemb" value="<?php echo "".$_GET['id_M']."" ?>"></p>
					<p>Sujet<input type="hidden" name="RefS" value="<?php echo "".$_GET['id_S']."" ?>"></p>
					<p><textarea name="Mess" cols="50" rows="10" placeholder="Veuillez écrire votre réponse ici."></textarea></p>
				</fieldset>
				<br/>
				<center>
					<input type="submit" name="Valider" value="Valider" />
					<input type="button" value="Retour" onClick="history.back()"/>
				</center>
			</form>
		</div>