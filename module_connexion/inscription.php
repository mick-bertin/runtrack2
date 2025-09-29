<?php
require_once 'db.php';
session_start();

$message = "";

// Vérification du formulaire d'inscription 'POST'
if (isset($_POST['submit'])) {
    $nom      = $_POST['nom'];
    $prenom   = $_POST['prenom'];
    $login    = $_POST['login'];
    $password = $_POST['password'];

    // Vérifier si le login existe déjà
    $verif = $conn->prepare("SELECT id FROM utilisateurs WHERE login = ?");
    $verif->bind_param("s", $login);
    $verif->execute();
    $verif->store_result();

    if ($verif->num_rows > 0) {
        // Login déjà utilisé
        $message = " ce login existe deja.";
    } else {
        // Hachage du mot de passe
        $hash = password_hash($password, PASSWORD_DEFAULT);

        // Requête préparée pour insérer
        $stmt = $conn->prepare("INSERT INTO utilisateurs (nom, prenom, login, password) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $nom, $prenom, $login, $hash);

        if ($stmt->execute()) {
            header("Location: connexion.php");
            exit;
        } else {
            $message = " Erreur : " . $stmt->error;
        }

        $stmt->close();
    }

    $verif->close();
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../module_connexion/css/style.css">
    <link rel="stylesheet" href="../module_connexion/css/header.css">
    <title>inscription</title>
</head>

<body>
    <header> <?php include 'header.php'; ?></header>
    <main>

        <?php if (!empty($message)): ?>
            <p style="color:red;"><?= $message ?></p>
        <?php endif; ?>
        <section class="card">
            <h2 class="title">Inscription</h2>
            <form action="" method="POST">
                <div class="row">

                    <label for="prenom">prenom:</label> <label class="field">
                        <input type="text" name="prenom" placeholder="Prénom" required>
                    </label>
                    <label for="nom">nom:</label>
                    <label class="field" id="fields">
                        <input type="text" name="nom" placeholder="Nom" required>
                    </label>
                </div>
                <label for="login">login:</label>
                <label class="field">
                    <input type="login" name="login" placeholder="login" required>
                </label>
                <label for="password">password:</label>
                <label class="field">
                    <input type="password" name="password" placeholder="Mot de passe" required>
                </label>

                <button type="submit" name="submit" class="btn">S'inscrire</button>
            </form>
            <div class="link-row">
                <span>Déjà un compte ? </span>
                <a href="connexion.php" class="link">Se connecter</a>
            </div>
        </section>


    </main>


</body>

</html>