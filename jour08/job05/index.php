<!-- Développez le fameux jeu du morpion. Faites un tableau html avec 3 lignes et 3
colonnes représentant la grille. Au début de la partie, chacune des cases contient un
bouton de type submit dont la valeur est “-”. Si un joueur clique sur ce bouton, le bouton
est remplacé par un “O” ou par un “X”. C’est le joueur “X” qui commence.
Dès qu’un joueur a gagné, affichez “X a gagné” ou “O a gagné” et réinitialisez la partie. Si
toutes les cases ont été cliquées et que personne n’a gagné, affichez “Match nul” et

réinitialisez la partie. Un bouton “réinitialiser la partie” présent en dessous de la grille
permet également de réinitialiser la partie à tout moment. -->





<?php
session_start();

// --- Initialisation de la partie ---
if (!isset($_SESSION['grille']) || isset($_POST['reset'])) {
    $_SESSION['grille'] = array_fill(0, 9, "-"); // 9 cases avec "-"
    $_SESSION['joueur'] = "X"; // X commence
    $_SESSION['message'] = "";
}

// --- Quand un joueur clique sur une case ---
if (isset($_POST['case']) && $_SESSION['message'] === "") {
    $index = (int) $_POST['case'];

    // Si la case est libre
    if ($_SESSION['grille'][$index] === "-") {
        $_SESSION['grille'][$index] = $_SESSION['joueur'];

        // Vérifier si le joueur a gagné
        $gagnant = verifier_gagnant($_SESSION['grille']);
        if ($gagnant) {
            $_SESSION['message'] = "$gagnant a gagné 🎉";
        } elseif (!in_array("-", $_SESSION['grille'])) {
            $_SESSION['message'] = "Match nul 🤝";
        } else {
            // Changer de joueur
            $_SESSION['joueur'] = ($_SESSION['joueur'] === "X") ? "O" : "X";
        }
    }
}

// --- Fonction pour vérifier les conditions de victoire ---
function verifier_gagnant($g)
{
    $lignes = [
        [0, 1, 2],
        [3, 4, 5],
        [6, 7, 8], // lignes
        [0, 3, 6],
        [1, 4, 7],
        [2, 5, 8], // colonnes
        [0, 4, 8],
        [2, 4, 6]           // diagonales
    ];
    foreach ($lignes as $ligne) {
        if ($g[$ligne[0]] !== "-" && $g[$ligne[0]] === $g[$ligne[1]] && $g[$ligne[1]] === $g[$ligne[2]]) {
            return $g[$ligne[0]];
        }
    }
    return false;
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Jeu du Morpion</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 20px auto;
        }

        td {
            width: 60px;
            height: 60px;
            text-align: center;
            border: 2px solid black;
        }

        button {
            width: 100%;
            height: 100%;
            font-size: 24px;
        }

        h2,
        p {
            text-align: center;
        }
    </style>
</head>

<body>

    <h2>Jeu du Morpion</h2>
    <p><?= $_SESSION['message'] ?: "Tour du joueur " . $_SESSION['joueur']; ?></p>

    <form method="post">
        <table>
            <?php for ($i = 0; $i < 3; $i++): ?>
                <tr>
                    <?php for ($j = 0; $j < 3; $j++):
                        $index = $i * 3 + $j;
                    ?>
                        <td>
                            <?php if ($_SESSION['grille'][$index] === "-"): ?>
                                <button type="submit" name="case" value="<?= $index ?>">-</button>
                            <?php else: ?>
                                <span style="font-size:24px;"><?= $_SESSION['grille'][$index] ?></span>
                            <?php endif; ?>
                        </td>
                    <?php endfor; ?>
                </tr>
            <?php endfor; ?>
        </table>

        <div style="text-align:center;">
            <button type="submit" name="reset">Réinitialiser la partie</button>
        </div>
    </form>

    <?php
    // Si la partie est finie, on réinitialise après affichage du message
    if ($_SESSION['message']) {
        unset($_SESSION['grille']);
    }
    ?>

</body>

</html>