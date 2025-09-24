<!-- Créez un formulaire de connexion qui contient un input de type de text nommé
“prenom” et un bouton submit nommé “connexion”. Lorsque l’on valide le formulaire, le
prénom est ajouté dans un cookie. Si un utilisateur a déjà entré son prénom, n'affichez
plus le formulaire de connexion. A la place, écrivez “Bonjour prenom !” et ajouter un
bouton “Déconnexion” nommé “deco”. Lorsque l’utilisateur se déconnecte, il faut à
nouveau afficher le formulaire de connexion. -->


<?php
// Démarrer la session 
session_start();

// Si l'utilisateur clique sur le bouton de déconnexion
if (isset($_POST['deco'])) {
    // Supprimer le cookie en le rendant expiré
    setcookie("prenom", "", time() - 3600, "/");
    // Recharger la page pour mettre à jour l'affichage
    header('Location:index.php');
    exit;
}

// Si l'utilisateur soumet le formulaire de connexion
if (isset($_POST['connexion']) && !empty($_POST['prenom'])) {
    // Enregistrer le prénom dans un cookie valable 1 heure
    setcookie("prenom", $_POST['prenom'], time() + 3600, "/");
    // Recharger la page pour que le cookie soit pris en compte immédiatement
    header('Location:index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de connexion</title>
</head>

<body>
    <?php
    // Vérifier si le cookie "prenom" existe déjà
    if (isset($_COOKIE['prenom']) && !empty($_COOKIE['prenom'])) {
        // Si oui, afficher le message de bienvenue et le bouton de déconnexion
        echo "<p>Bonjour " . htmlspecialchars($_COOKIE['prenom']) . " </p>";
        echo '<form method="post">
            <button type="submit" name="deco">Déconnexion</button>
          </form>';
    } else {
        // Sinon, afficher le formulaire de connexion
        echo '<form method="post">
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" required>
            <button type="submit" name="connexion">Connexion</button>
          </form>';
    }
    ?>
</body>

</html>