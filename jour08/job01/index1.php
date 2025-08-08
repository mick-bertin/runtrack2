<!-- Créez une variable de session nommée “nbvisites”. A chaque fois que la page est
visitée, ajoutez 1. Afficher le contenu de cette variable.
Ajoutez un bouton nommé “reset” qui permet de réinitialiser ce compteur. -->


<?php
//demarage de la session 
session_start();
//je verifi si la variable de session existe 
if (isset($_SESSION["nbvisites"])) {
    // si oui alor je peut commencer a incrementer 
    $_SESSION["nbvisites"]++;
}  //si non la variable note la premiere visite
else {
    $_SESSION["nbvisites"] = 1;
}

//si le formulaire a etai soumis avec reset 
if (isset($_POST["reset"])) {
    //le compteur revient a 0
    $_SESSION["nbvisites"] = 0;
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session</title>
</head>

<body>
    <p> nombres de visite :<?php echo $_SESSION["nbvisites"] ?></p>
    <form action="index1.php" method="post">
        <input type="submit" name="reset" value="reset">
    </form>
</body>

</html>