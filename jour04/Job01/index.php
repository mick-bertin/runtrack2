<!-- Développez un algorithme qui affiche le nombre d’arguments $_GET.
Tips :
Pour tester votre code, créez un formulaire html <form> de type GET avec différents
    champs <input> de type “text” et un <input> de type “submit” pour l’envoi.
    Vous pouvez ensuite afficher avec echo directement dans votre page par exemple :
    “Le nombre d’argument GET envoyé est : . $_GET["texte"] . $_GET["prenom"] . $_GET["email"] . ' ' “ -->
<!DOCTYPE html>
<html lang="en">

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
    // $nombreArguments = 0;
    // // var_dump($_GET);
    // if (isset($_GET["texte"])) {
    //     $nombreArguments = count($_GET);


    //     echo "Le nombre d’argument GET envoyé est :" . '&nbsp' . $nombreArguments;
    // }


    $nombreargument = 0;
    $argument = ["nom", "prenom", "email"];
    foreach ($argument as $key) {
        if (isset($_GET[$key]) && $_GET[$key]) {
            $nombreargument++;
        }
    }
    echo "Le nombre d’argument GET envoyé est :" . "&nbsp" . $nombreargument;



    ?>
    <form action="index.php" method="get">
        <input type="text" name="nom" id="nom" placeholder="nom : ">
        <input type="text" name="prenom" id="prenom" placeholder="prenom :">
        <input type="email" name="email" id="email" placeholder="email :">
        <input type="submit" value="Envoyez">
    </form>
</body>

</html>