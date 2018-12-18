<?php include('../Affichage/Debut.php'); ?>
		<div class="form">
			<form method="post" action="../Traitement/AddMemb.php">
				<fieldset>
					<legend>Inscription</legend>
					<p>Pseudo : <input type="text" name="PseudoMemb"/></p>
					<p>Mot de Passe : <input type="password" name="MDP"/></p>
					<p>Email : <input type="text" name="Mail"/></p>
					<p>Date de naissance : <input type="date" name="DateNaiss"/></p>
					<p><textarea name="descmemb" cols="50" rows="10" placeholder="Tapez votre description ici."></textarea></p>
				</fieldset>
				<br/>
				<center>
					<input type="submit" name="Inscription" value="Inscription" />
					<input type="button" value="Retour" onClick="history.back()"/>
				</center>
			</form>
		</div>
