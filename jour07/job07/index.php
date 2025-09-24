<!-- Créez un formulaire <form> qui contient :
    ● un champ <input> nommé “str” de type “text”,
    ● une liste déroulante <select> nommée “fonction”
        ● un bouton <button> submit.
            Lorsque vous validez le formulaire, vous devez appliquer des transformations à “str” en
            fonction de l’option <option> choisie dans la liste déroulante.
                Les choix possibles sont :
                ● “gras” : une fonction qui prend en paramètre “str” : gras($str). Elle écrit “str” en
                mettant en gras (<b>) les mots commençant par une lettre majuscule.
                    ● “cesar” : une fonction qui prend en paramètre “$str” et un nombre “$decalage”
                    (qui vaut 2 par défaut) : cesar($str, $decalage). $str doit s’afficher en décalant
                    chaque caractère d’un nombre égal à “$decalage”.
                    ex : Si $decalage vaut 1 alors “e” devient “f”. Si décalage vaut 3 alors “z” devient
                    “c”.
                    ● “plateforme”, une fonction qui prend en paramètre “$str” : plateforme($str).
                    Elle affiche “$str” en ajoutant un “_” aux mots finissant par “me”. -->




<?php
// --- Fonction gras ---
// Met en <b> les mots commençant par une majuscule
function gras($str)
{
    $mots = explode(" ", $str);
    foreach ($mots as &$mot) {
        if (preg_match('/^[A-Z-a-z]/', $mot)) {
            $mot = "<b>$mot</b>";
        }
    }
    return implode(" ", $mots);
}

// --- Fonction cesar ---
// Décale chaque lettre de $decalage (2 par défaut)
function cesar($str, $decalage = 2)
{
    $res = "";
    for ($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i];

        if (ctype_alpha($char)) {
            $isMaj = ctype_upper($char);
            $a = $isMaj ? ord('A') : ord('a');
            $pos = ord($char) - $a;
            $newPos = ($pos + $decalage) % 26;
            $res .= chr($a + $newPos);
        } else {
            $res .= $char; // ne pas changer chiffres, espaces, etc.
        }
    }
    return $res;
}

// --- Fonction plateforme ---
// Ajoute "_" aux mots finissant par "me"
function plateforme($str)
{
    $mots = explode(" ", $str);
    foreach ($mots as &$mot) {
        if (str_ends_with($mot, "me")) {
            $mot .= "_";
        }
    }
    return implode(" ", $mots);
}

// --- Traitement du formulaire ---
$resultat = "";
if (!empty($_POST["str"]) && !empty($_POST["fonction"])) {
    $str = $_POST["str"];
    $fonction = $_POST["fonction"];

    if ($fonction === "gras") {
        $resultat = gras($str);
    } elseif ($fonction === "cesar") {
        $resultat = cesar($str, 2);
    } elseif ($fonction === "plateforme") {
        $resultat = plateforme($str);
    }
}
?>

<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Formulaire Transformation</title>
</head>

<body>

    <h2>Transformateur de texte</h2>

    <form method="post">
        <label for="str">Texte :</label>
        <input type="text" id="str" name="str" required>

        <label for="fonction">Choisissez une fonction :</label>
        <select id="fonction" name="fonction" required>
            <option value="gras">Gras</option>
            <option value="cesar">César</option>
            <option value="plateforme">Plateforme</option>
        </select>

        <button type="submit">Valider</button>
    </form>

    <?php if ($resultat): ?>
        <h3>Résultat :</h3>
        <p><?= $resultat ?></p>
    <?php endif; ?>

</body>

</html>