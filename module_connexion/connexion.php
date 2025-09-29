<?php
require_once 'db.php';
session_start();

$message = "";

// Vérification du formulaire de connexion
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login    = $_POST['login'];
    $password = $_POST['password'];

    // Préparer la requête pour récupérer l'utilisateur
    $stmt = $conn->prepare("SELECT id, login, password, nom, prenom FROM utilisateurs WHERE login = ?");
    $stmt->bind_param("s", $login);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    // Vérifier le mot de passe
    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['login']   = $user['login'];
        $_SESSION['prenom']  = $user['prenom'];
        $_SESSION['nom']     = $user['nom'];
        $_SESSION['id'] = $user['id'];
        // Vérifier si c est admin 
        if ($user['login'] === 'admin') {

            header("Location: admin.php");
            exit;
        }
        header("Location: profil.php");
        exit;
    } else {

        $message = "Mauvais identifiants";
    }

    $stmt->close();
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Connexion </title>
    <link rel="stylesheet" href="../module_connexion/css/style.css">
    <link rel="stylesheet" href="../module_connexion/css/header.css">
</head>

<body>
    <header> <?php include 'header.php'; ?></header>
    <main>
        <?php if (!empty($message)): ?>
            <p><?= $message ?></p>
        <?php endif; ?>
        <!-- Connexion -->
        <section class="card">
            <h1 class="title">se connecter</h1>
            <form action="" method="POST">
                <label for="login">Login :</label>
                <label class="field">
                    <input type="text" name="login" placeholder="login" required>
                </label>
                <label for="password">password :</label>
                <label class="field">
                    <input type="password" name="password" placeholder="password" required>
                </label>

                <button type="submit" class="btn">Se connecter</button>
            </form>
            <div class="link-row">
                <a href="inscription.php" class="link">Mot de passe oublié ?</a>
            </div>
        </section>
    </main>


</body>

</html>