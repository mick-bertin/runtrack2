<!-- Développez un algorithme qui affiche le nombre d’arguments $_POST.
Tips :
Pour tester votre code, créez un formulaire html <form> de type POST avec différents
    champs <input> de type “text” et un <input> de type “submit” pour l’envoi.
    Vous pouvez ensuite afficher avec echo directement dans votre page par exemple :
    “Le nombre d’argument POST envoyé est : “
 -->


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    form {
        display: flex;
        flex-direction: column;
        align-items: center;
        /* width: 35%; */
        margin: auto;
        margin-top: 250px;
        gap: 20px;
        background-color: mediumturquoise;
        padding-bottom: 50px;
        padding-top: 50px;
    }

    input {

        height: 50px;
        width: 300px;
        border-radius: 5px;
    }

    input[type="submit"] {
        border-radius: 10px;
        background-color: coral;
    }
</style>

<body>
    <?php


    $nombreargument = 0;
    $argument = ["nom", "prenom", "email"];
    foreach ($argument as $key) {
        if (isset($_POST[$key]) && $_POST[$key]) {
            $nombreargument++;
        }
    }
    echo "Le nombre d’argument POST envoyé est :" . '&nbsp' . $nombreargument;



    ?>
    <form action="index.php" method="post">
        <input type="text" name="nom" id="nom" placeholder="nom : ">
        <input type="text" name="prenom" id="prenom" placeholder="prenom :">
        <input type="email" name="email" id="email" placeholder="email :">
        <input type="submit" value="envois">
    </form>
</body>

</html>