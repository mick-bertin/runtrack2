<!-- Créez une variable de session nommée “nbvisites”. A chaque fois que la page est
visitée, ajoutez 1. Afficher le contenu de cette variable.
Ajoutez un bouton nommé “reset” qui permet de réinitialiser ce compteur. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    session_start(); // Démarrage de la session

    // Si le bouton reset a été cliqué, on réinitialise la variable
    if (isset($_POST["reset"])) {
        $_SESSION["nbvisites"] = 0;
    } else {
        // Incrémentation du compteur de visites
        if (isset($_SESSION["nbvisites"])) {
            $_SESSION["nbvisites"]++;
        } else {
            $_SESSION["nbvisites"] = 1; // Première visite
        }
    }
    ?>
    <form action="index.php" method="post">
        <input type="submit" name="reset" value="reset">

    </form>
    <?php echo $_SESSION['nbvisites']; ?>
</body>

</html>