<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>O'ssurance</title>
	</head>
	<body>
		<?php

		// 1. Créer un formulaire HTML demandant les informations nécessaires au calcul
		// 2. Après soumission du formulaire, créer les variables qui vont contenir les informations du client
		// 3. Écrire le script qui permet de déterminer à quel palier peut prétendre un client, selon ses informations (et donc à quelle couleur de tarif)
		// 4. Afficher le résultat, par ex. "Votre client a droit au tarif Vert"
		// Bonus 1. Afficher le résultat de trois manières différentes : via `if` & `elseif` ou bien `switch` ou bien `array()`
		// Bonus 2. fioritures graphiques

		?>

		<h1>O'ssurance</h1>
		<h2>Calcul du tarif de votre client</h2>

		<?php

		// 1. Création du formulaire HTML demandant les informations nécessaires au calcul
		?>

		<form action="" method="GET">
			<div>
				<label for="age">Votre âge</label>
				<input type="number" name="age" id="age" min="16" max="90">
			</div>
			<div>
				<label for="ancienneté">Nombre d'années de permis</label>
				<input type="number" name="ancienneté" id="ancienneté" min="0">
			</div>
			<div>
				<label for="accidents">Nombre d'accidents responsables</label>
				<input type="number" name="accidents" id="accidents" min="0">
			</div>
			<div>
				<label for="fidélité">Nombre d'années chez votre assureur</label>
				<input type="number" name="fidélité" id="fidélité" min="0">
			</div>

			
			<button type="submit">Calculer le tarif</button>
		</form>
		
		<p>Votre client à droit au tarif <strong>xxx</strong></p>

	</body>
</html>