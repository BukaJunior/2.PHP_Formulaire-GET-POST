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

		$Palier0 = "Refus d'assurer";
		$Palier1 = "Rouge";
		$Palier2 = "Orange";
		$Palier3 = "Vert";
		$Palier4 = "Bleu";

		$PalierDéfaut = $Palier1;

		$nbrAccident = 0 - $_GET['accident'];

		if(isset($_GET['age']) && isset($_GET['ancienneté']) && isset($_GET['accident']) && isset($_GET['fidélité'])) {

			if($_GET['age'] && $_GET['ancienneté'] && $_GET['accident'] && $_GET['fidélité'] != '') {		
			}

			if ($_GET['age'] > 25) {
				$PalierDéfaut = $Palier2;
				echo "Votre client a droit au tarif $PalierDéfaut";

			} else {
				$PalierDéfaut;
				echo "Votre client a droit au tarif $PalierDéfaut";
			}

			if ($nbrAccident >= 0) {
				
				$PalierDéfaut = $Palier4;
				echo "Votre client a droit au tarif $PalierDéfaut";
			}
		}


		?>

		<form action="" method="get">
			<div>
				<label for="age">Votre âge</label>
				<input type="number" name="age" id="age" min="16" max="90">
			</div>
			<div>
				<label for="ancienneté">Nombre d'années de permis</label>
				<input type="number" name="ancienneté" id="ancienneté" min="0">
			</div>
			<div>
				<label for="accident">Nombre d'accidents responsables</label>
				<input type="number" name="accident" id="accident" min="0">
			</div>
			<div>
				<label for="fidélité">Nombre d'années chez cet assureur</label>
				<input type="number" name="fidélité" id="fidélité" min="0">
			</div>

			<button type="submit">Calculer le tarif</button>
		</form>

		<p>Votre client à droit au tarif <strong>xxx</strong></p>

	</body>
</html>