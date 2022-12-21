<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Permis de conduire</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans@1&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <main>
            <h1>Inscription au permis de conduire</h1>
            <form action="" method="GET">
                <label for="lastname">Nom</label>
                <input type="text" name="lastname" id="lastname">
                <label for="firstname">Prénom</label>
                <input type="text" name="firstname" id="firstname">
                <label for="age">Âge</label>
                <input type="number" name="age" id="age">
                <!--
                    Pour générer un bouton de soumission de formulaire,
                    depuis HTML5, on peut utiliser la balise sémantique <button>
                    plutôt qu'une balise <input type="submit">. C'est plus logique
                    car un bouton n'est pas un champ de formulaire à remplir.

                    Par défaut, un button est de type "submit", ce qui permet
                    de soumettre le formulaire si l'on clique dessus, du moment que
                    la balise <button> est placée dans une balise <form>
                    https://developer.mozilla.org/en-US/docs/Web/HTML/Element/button#attr-type
                -->
                <button>Je m'inscris</button>
            </form>
        </main>
        <aside>
            <h1>Résumé de l'inscription</h1>
            <h2>Inscription de </h2>
            <div class="answer">
                -
                <!-- Notre code ici : -->
                <!-- Si on reçoit une réponse du formulaire (donc si notre variable $_GET est remplie), alors
                on affiche le nom et le prénom de la personne qui souhaite s'inscrire. -->
            </div>
            <h2>Autorisation </h2>
            <div class="answer">
                -
                <!-- Notre code ici : -->
                <!-- Si on reçoit une réponse du formulaire (donc si notre variable $_GET est remplie), alors : 
                    - On récupère l'âge de la personne
                    - On vérifie cet âge :
                        - S'il est inférieur à 16 ans, on affiche "Trop jeune pour s'inscrire"
                        - S'il l'âge est situé entre 16 et 18 ans, on affiche "Inscription possible en conduite accompagnée"
                        - Sinon, afficher "Inscription possible"
                -->
            </div>
        </aside>
    </body>
</html>
