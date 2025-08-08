<!-- Développer un algorithme qui affiche dans un tableau HTML <table> l’ensemble des
    arguments $_ POST et les valeurs associées. Il doit y avoir deux colonnes : argument et
    valeur.
    Tips :
    Pour tester votre code, créez un formulaire html <form> de type POST avec différents
        champs <input> de type “text” et un <input> de type “submit” pour l’envoi.
        Vous pouvez ensuite afficher avec echo directement dans votre page par exemple ce
        tableau : -->

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

        table {
            margin: auto;
            margin-top: 15%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: solid 2px black;
            width: 400px;
            height: 50px;

        }
    </style>

    <?php
    if (isset($_POST["nom"]) && isset($_GET["prenom"])) {
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
    }
    ?>
    <form action="index.php" method="post">
        <input type="text" name="nom" id="nom" placeholder="nom : " require>
        <input type="text" name="prenom" id="prenom" placeholder="prenom :" require>
        <input type="submit" value="valider">
    </form>
    <table>
        <thead>
            <tr>
                <th>Argument</th>
                <th>Valeur</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td> <?php echo "prenom :"; ?> </td>
                <td> <?php echo $_POST["prenom"]; ?></td>
            </tr>
            <tr>
                <td> <?php echo "nom :"; ?> </td>
                <td> <?php echo $_POST["nom"]; ?></td>
            </tr>
        </tbody>
    </table>
</body>

</html>