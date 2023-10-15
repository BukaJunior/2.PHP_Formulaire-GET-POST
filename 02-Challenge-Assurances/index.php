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

		// var_dump($_GET);

		// filter_input permet de récupérer une valeur dans un tableau
		// 1er Argument: INPUT_GET ou INPUT_POST
		// 2ème Argument: La clé, le champ,l'entrée
		// 3ème Argument: le filtre (vérification) (FACULTATIF)
		$age = filter_input(INPUT_GET, 'age', FILTER_VALIDATE_INT);
		$anciennetéPermis = filter_input(INPUT_GET, 'anciennetéPermis', FILTER_VALIDATE_INT);
		$nbrAccidents = filter_input(INPUT_GET, 'nbrAccidents', FILTER_VALIDATE_INT);
		$fidélité = filter_input(INPUT_GET, 'fidélité', FILTER_VALIDATE_INT);

		// var_dump($age);
		// var_dump($anciennetéPermis);
		// var_dump($nbrAccidents);
		// var_dump($fidélité);

		// On vérifie que les différentes variables contiennent bien des valeurs utilisables ( les accidents et années ne doivent pas etre négatives)
		if(
			$age >= 18 &&
			$anciennetéPermis >= 0 &&
			$nbrAccidents >= 0 &&
			$fidélité >= 0
		){
			// On fait le calcul du palier, par defaut on met le palier 1 (rouge).
			$palier	= 1;

			var_dump($palier);

			// Si on a des accidents, on réduit d'autant le nombre de paliers.
			$palier -= $nbrAccidents; // $palier = $palier - $nbrAccidents;
			var_dump($palier);

			// Si le permis a plus de 2 ans, on augmente le palier d'un niveau.
			if($anciennetéPermis > 2){
				$palier++;
			}

			var_dump($palier);

			// Si le client a 25 ans augmente le palier de 1.
			if( $age > 25){
				$palier++;
			}

			var_dump($palier);

			// Si le client a plus de 5 ans de fidélité, et qu'il n'est PAS REFUSER on augmente le palier de 1. 
			// On vérifie que le client n'est pas refusé, car si il est refusé, on ne peut pas lui proposer un tarif.
			// On vérifie que le palier est supérieur à 0.
			if( $palier > 0 && $fidélité > 5){
				$palier++;
			}

			var_dump($palier);
		}


		
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
				<label for="anciennetéPermis">Nombre d'années de permis</label>
				<input type="number" name="anciennetéPermis" id="anciennetéPermis" min="0">
			</div>
			<div>
				<label for="nbrAccidents">Nombre d'accidents responsables</label>
				<input type="number" name="nbrAccidents" id="nbrAccidents" min="0">
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