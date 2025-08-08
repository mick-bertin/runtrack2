<!-- Créer un formulaire qui contient une liste déroulante nommée “style” et un bouton
submit. La liste déroulante doit proposer au moins “style1”, “style2” et “style3. Créer 3
fichiers css nommés “style1.css”, “style2.css” et “style3.css”. Chaque style doit avoir
des effets sur le design du formulaire, la couleur de background, la police d’écriture...
Lorsque l’on valide le formulaire, le style sélectionné doit être inclus et donc le visuel
doit changer. -->


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_POST['style'])) {
        $style1 = "style1.css";
        $style2 = "style2.css";
        $style3 = "style3.css";

        $styleSelect = $_POST['style'];

        if ($styleSelect === $style1) {
            echo "<link rel='stylesheet' href='" . $style1 . "'>";
        } elseif ($styleSelect === $style2) {
            echo "<link rel='stylesheet' href='" . $style2 . "'>";
        } elseif ($styleSelect === $style3) {
            echo "<link rel='stylesheet' href='" . $style3 . "'>";
        }
    }
    ?>
    <form method="post">
        <label for="style">Choose a style:</label>
        <select name="style" id="style">
            <option value="style1.css">Style 1</option>
            <option value="style2.css">Style 2</option>
            <option value="style3.css">Style 3</option>
        </select>
        <br><br>
        <button type="submit">Submit</button>
    </form>

</body>

</html>