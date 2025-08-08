<!-- Créez un cookie nommé “nbvisites”. A chaque fois que la page est visitée, ajoutez 1.
Afficher le contenu du cookie.
Ajoutez un bouton nommé “reset” qui permet de réinitialiser ce compteur. -->
<?php

//si la variable cookie existe
if (isset($_COOKIE["nbvisites"])) {
    //j'increment le cookie
    $_COOKIE["nbvisites"]++;
    //si non met la premiere variable a 1
} else {
    $_COOKIE["nbvisites"] = 1;
}
//si le formulaire  a ete envoyer avec le parametre reset 
if (isset($_POST["reset"])) {
    //le cookie est remis a 0
    $_COOKIE["nbvisites"] = 0;
}
//je met a jour le cookie
setcookie("nbvisites", $_COOKIE["nbvisites"], time() + (86400 * 30),);

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <p> nombres de visite :<?php echo  $_COOKIE["nbvisites"]; ?></p>
    <form action="index.php" method="post">
        <input type="submit" value="reset" name="reset">
    </form>
</body>

</html>