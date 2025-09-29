<?php
require_once 'db.php';
session_start();

if (!isset($_SESSION['id'])) {
    header("Location: connexion.php");
    exit;
}
$message = "";

// Si le formulaire est soumis
if (isset($_POST['modifier'])) {
    $id     = $_SESSION['id'];
    $prenom = $_POST['prenom'];
    $nom    = $_POST['nom'];
    $login  = $_POST['login'];

    // Vérifier si le nouveau login est unique 
    $check = $conn->prepare("SELECT id FROM utilisateurs WHERE login = ? AND id != ?");
    $check->bind_param("si", $login, $id);
    $check->execute();
    $check->store_result();

    if ($check->num_rows > 0) {
        $message = "Ce login est deja pris.";
    } else {

        // Mise à jour dans la base
        $sql = "UPDATE utilisateurs SET prenom = ?, nom = ?, login = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssi", $prenom, $nom, $login, $id);

        if ($stmt->execute()) {
            // Mettre aussi à jour la session
            $_SESSION['prenom'] = $prenom;
            $_SESSION['nom']    = $nom;
            $_SESSION['login']  = $login;

            $message = "Mise à jour avec succès.";
        } else {
            $message = "Erreur lors de la mise à jour : " . $stmt->error;
        }

        $stmt->close();
    }
    $check->close();
}
// --- SUPPRIMER LE COMPTE ---
if (isset($_POST['supprimer'])) {
    $id = $_SESSION['id'];

    $sql = "DELETE FROM utilisateurs WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        // Détruire la session et rediriger vers l'accueil
        session_unset();
        session_destroy();
        header("Location: index.php");
        exit;
    } else {
        $message = "Erreur lors de la suppression : " . $stmt->error;
    }

    $stmt->close();
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../module_connexion/css/style.css">
    <title>Profil</title>
</head>

<body>
    <header>
        <?php include 'header.php'; ?>
    </header>

    <main>
        <h1>Profil : <?= htmlspecialchars($_SESSION['nom']); ?></h1>

        <?php if (!empty($message)): ?>
            <p><?= $message ?></p>
        <?php endif; ?>

        <section class="card">
            <h2>Modifier mes informations</h2>
            <form action="" method="POST">
                <label for="prenom">Prénom:</label>
                <label class="field">
                    <input type="text" name="prenom" value="<?= htmlspecialchars($_SESSION['prenom']); ?>" required>
                </label>

                <label for="nom">Nom:</label>
                <label class="field">
                    <input type="text" name="nom" value="<?= htmlspecialchars($_SESSION['nom']); ?>" required>
                </label>

                <label for="login">Login:</label>
                <label class="field">
                    <input type="text" name="login" value="<?= htmlspecialchars($_SESSION['login']); ?>" required>
                </label>

                <label class="field">
                    <input type="submit" name="modifier" value="Modifier">
                </label>
            </form>
            <h2>Supprimer mon compte</h2>
            <form action="" method="POST">
                <label class="field">
                    <input type="submit" name="supprimer" value="Supprimer mon compte">
                </label>
            </form>
        </section>
    </main>
</body>

</html>