<?php
session_start();
// Verifie si login existe et si il  n'est PAS admin
if (!isset($_SESSION['login']) || $_SESSION['login'] !== 'admin') {
    $_SESSION['error_message'] = "Accès refusé  Vous n'ete pas administrateur.";
    header('Location: connexion.php');
    exit;
}
// connexion à la base de donnees
require_once 'db.php';
$utilisateurs = [];
$query = "SELECT id, login, prenom, nom FROM utilisateurs";
$result = $conn->query($query);

if ($result) {
    //  tous les utilisateurs 
    $utilisateurs = $result->fetch_all(MYSQLI_ASSOC);
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../module_connexion/css/style.css">
    <link rel="stylesheet" href="../module_connexion/css/header.css">
    <link rel="stylesheet" href="../module_connexion/css/admin.css">
    <title>Administration</title>
</head>

<body>
    <header><?php include 'header.php'; ?></header>
    <main>
        <h1>Tableau de Bord Administrateur</h1>

        <?php if (!empty($utilisateurs)): ?>
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Login</th>
                        <th>Prénom</th>
                        <th>Nom</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($utilisateurs as $user): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($user['id']); ?></td>
                            <td><?php echo htmlspecialchars($user['login']); ?></td>
                            <td><?php echo htmlspecialchars($user['prenom']); ?></td>
                            <td><?php echo htmlspecialchars($user['nom']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>Aucun utilisateur trouvé.</p>
        <?php endif; ?>
    </main>
</body>

</html>