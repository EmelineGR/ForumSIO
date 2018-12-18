<?php include ('../Affichage/Debut.php'); ?>
		<div class="form">
			<form method="post" action="../Traitement/Verification.php">
				<fieldset>
					<legend>Connexion</legend>
					<p>Pseudo : <input type="text" name="PseudoMemb"/></p>
					<p>Mot de Passe : <input type="password" name="MDP"/></p>
				</fieldset>
				<br/>
				<center>
					<input type="submit" name="Connexion" value="Connexion" />
				</center>
			</form>
		</div>
		<center>
			<?php
			$IDM = 0;
			echo '<a href="../Affichage/Acceuil.php?id_M=',$IDM,'"> Accès Visiteur</a>';
			?>
		</center>
