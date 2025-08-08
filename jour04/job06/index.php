<!-- Faire un formulaire de type GET avec un champ <input> text nommé “nombre” et un
bouton submit.
Après validation du formulaire :
● si la valeur entrée est un nombre pair, afficher “Nombre pair”,
● si c’est un nombre impair, afficher “Nombre impair”. -->

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
        body {
            display: flex;
            align-items: center;
            flex-direction: column;
            height: 100%;
        }

        form {
            margin-top: 100px;
        }
    </style>
    <?php
    $afficher = "";
    $nombres = $_GET["nombre"];
    if (isset($_GET["nombre"])) {

        if ($nombres % 2 == 0) {
            $afficher = "$nombres : est paire";
        } else {
            $afficher = "$nombres: est impaire";
        }
    }
    echo " $afficher";
    ?>

    <form action="index.php" method="get">
        <input type="text" name="nombre" id="nombre" placeholder="nombre : ">
        <input type="submit" value="submit">
    </form>
</body>

</html>