<!-- Faire un formulaire de connexion de type POST (se demander, pourquoi pas GET ?)
ayant deux champs <input> nommés username et password.
Après validation du formulaire :
● si le username est “John” ET le password est “Rambo” afficher :
“C’est pas ma guerre”
● sinon afficher : “Votre pire cauchemar”. -->




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


    if (isset($_POST["username"]) && isset($_POST["password"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        if ($username === "John" && $password === "Rambo") {
            $afficher = "C’est pas ma guerre";
        } else {
            $afficher = "Votre pire cauchemar";
        }
    }
    echo " $afficher";
    ?>
    <form action="index.php" method="post">
        <input type="text" name="username" id="username" placeholder="username : ">
        <input type="password" name="password" id="password" placeholder="password :">
        <input type="submit" value="valider">
    </form>


</body>

</html>