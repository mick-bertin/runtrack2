<!-- Créez un formulaire qui contient un input de type de text nommé “prenom” et un bouton
submit. Lorsque l’on valide le formulaire, le prénom est ajouté dans une variable de
session. Afficher l’ensemble des prénoms.
Ajoutez un bouton nommé “reset” qui permet de réinitialiser la liste. -->
<?php
session_start(); // Démarrer la session

// Si le bouton reset est cliqué, on réinitialise la liste
if (isset($_POST['reset'])) {
    $_SESSION['prenoms'] = [];
}

// Si un prénom est soumis, on l’ajoute à la session
if (isset($_POST['prenom']) && !empty($_POST['prenom'])) {
    $_SESSION['prenoms'][] = htmlspecialchars($_POST['prenom']);
}

// Initialiser la liste si elle n’existe pas encore
if (!isset($_SESSION['prenoms'])) {
    $_SESSION['prenoms'] = [];
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des prénoms</title>
</head>

<body>
    <h2>Ajouter un prénom</h2>

    <!-- Formulaire  -->
    <form method="post">
        <input type="text" name="prenom" placeholder="Entrez un prénom">
        <button type="submit">Ajouter</button>
        <button type="submit" name="reset">Reset</button>
    </form>
    <ul>
        <?php foreach ($_SESSION['prenoms'] as $p) : ?>
            <li><?= $p ?></li>
        <?php endforeach; ?>
    </ul>
</body>

</html>