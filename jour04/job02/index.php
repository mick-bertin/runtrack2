<!-- Développer un algorithme qui affiche dans un tableau HTML <table> l’ensemble des
    arguments $_GET et les valeurs associées.
    Il doit y avoir deux colonnes : argument et valeur.
    Tips :
    Pour tester votre code, créez un formulaire html <form> de type GET avec différents
        champs <input> de type “text” et un <input> de type “submit” pour l’envoi.
        Vous pouvez ensuite afficher avec echo directement dans votre page par exemple ce
        tableau : -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_GET["nom"]) && isset($_GET["prenom"])) {
    }
    ?>
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
    <form action="index.php" method="get">
        <input type="text" name="nom" id="nom" placeholder="nom : ">
        <input type="text" name="prenom" id="prenom" placeholder="prenom :">
        <input type="submit" value="Envoyer">
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
                <td> <?php echo $_GET["prenom"]; ?></td>
            </tr>
            <tr>
                <td> <?php echo "nom :"; ?> </td>
                <td> <?php echo $_GET["nom"]; ?></td>
            </tr>
        </tbody>
    </table>
</body>

</html>