<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../module_connexion/css/header.css">
    <title>header</title>
</head>

<body>
    <header>
        <nav>
            <div class="pUser">
                <img src="img/logo.jpeg" alt="logo">
                <?php if (isset($_SESSION['nom'])): ?>
                    <?= htmlspecialchars($_SESSION['prenom']); ?>
                <?php endif; ?>
            </div>
            <ul>
                <?php if (!isset($_SESSION['nom'])): ?>
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="connexion.php">Connexion</a></li>
                    <li><a href="inscription.php">S'inscrire</a></li>
                <?php else: ?>
                    <?php if (isset($_SESSION['login']) && $_SESSION['login'] === 'admin'): ?>
                        <!--   admin -->
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="profil.php">Profil</a></li>
                        <li><a href="admin.php">Admin</a></li>
                        <li><a href="deconnexion.php">Déconnexion</a></li>
                    <?php else: ?>
                        <!-- utilisateur  -->
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="profil.php">Profil</a></li>
                        <li><a href="deconnexion.php">Déconnexion</a></li>
                    <?php endif; ?>
                <?php endif; ?>
            </ul>
        </nav>
    </header>
</body>

</html>