<?php
session_start();

// Initialiser la grille et le joueur
if (!isset($_SESSION['grille']) || isset($_POST['reset'])) {
    $_SESSION['grille'] = array_fill(0, 9, "-");
    $_SESSION['joueur'] = "X";
    $_SESSION['message'] = "";
}

// Quand on clique sur une case
if (isset($_POST['case']) && $_SESSION['message'] === "") {
    $i = (int)$_POST['case'];
    if ($_SESSION['grille'][$i] === "-") {
        $_SESSION['grille'][$i] = $_SESSION['joueur'];
        // Vérifier victoire ou match nul
        if (gagnant($_SESSION['grille'])) {
            $_SESSION['message'] = $_SESSION['joueur'] . "a gagné 🎉";
        } elseif (!in_array("-", $_SESSION['grille'])) {
            $_SESSION['message'] = "Match nul";
        } else {
            $_SESSION['joueur'] = ($_SESSION['joueur'] === "X") ? "O" : "X";
        }
    }
}

// Fonction pour vérifier le gagnant
function gagnant($g)
{
    $lignes = [
        [0, 1, 2],
        [3, 4, 5],
        [6, 7, 8],
        [0, 3, 6],
        [1, 4, 7],
        [2, 5, 8],
        [0, 4, 8],
        [2, 4, 6]
    ];
    foreach ($lignes as $l) {
        if ($g[$l[0]] !== "-" && $g[$l[0]] === $g[$l[1]] && $g[$l[1]] === $g[$l[2]]) {
            return true;
        }
    }
    return false;
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Morpion</title>
</head>

<body>
    <form method="post">
        <table border="1">
            <?php for ($i = 0; $i < 3; $i++): ?>
                <tr>
                    <?php for ($j = 0; $j < 3; $j++):
                        $idx = $i * 3 + $j; ?>
                        <td>
                            <?php if ($_SESSION['grille'][$idx] === "-"): ?>
                                <button type="submit" name="case" value="<?= $idx ?>">-</button>
                            <?php else: ?>
                                <?= $_SESSION['grille'][$idx] ?>
                            <?php endif; ?>
                        </td>
                    <?php endfor; ?>
                </tr>
            <?php endfor; ?>
        </table>
        <br>
        <button type="submit" name="reset">Réinitialiser</button>
    </form>
</body>

</html>