<!-- Créez une variable de type string nommée $str et affectez y le texte :
“On n’est pas le meilleur quand on le croit mais quand on le sait”.
Créez un dictionnaire (tableau keys/values) nommé $dic qui a comme keys
“consonnes” et “voyelles”. Créez un algorithme qui parcourt, compte et stocke le
nombre d'occurrences de consonnes et de voyelles de $str.
Affichez ces résultats dans un tableau <table> html qui a comme <thead> “Voyelles” et
        “Consonnes”.. ["b", "c", "d", "f", "g", "h", "j", "k", "l", "m", "n", "p", "q", "r", "s", "t", "v", "w", "x", "z"],["a", "e", "i", "o", "u"]-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <style>
        body {
            height: 100%;
        }

        table {
            margin: auto;
            margin-top: 15%;
        }

        table,
        th,
        td {
            border: solid 2px black;
            width: 400px;
            height: 50px;

        }
    </style>
    <?php
    $str = "On n’est pas le meilleur quand on le croit mais quand on le sait";
    $dic = [
        "consonnes" => ["b", "c", "d", "f", "g", "h", "j", "k", "l", "m", "n", "p", "q", "r", "s", "t", "v", "w", "x", "z"],
        "voyelles" => ["a", "e", "i", "o", "u", "O"],
    ];
    $nbrvoyelles = 0;
    $nbrconsonnes = 0;

    for ($i = 0; isset($str[$i]); $i++) {
        foreach ($dic["consonnes"] as $consonne) {
            if ($str[$i] == $consonne) {
                $nbrconsonnes++;
            }
        }
    }
    echo "<br>";
    for ($y = 0; isset($str[$y]); $y++) {
        foreach ($dic["voyelles"] as $voyelle) {
            if ($str[$y] == $voyelle) {
                $nbrvoyelles++;
            }
        }
    }


    ?>
    <table>
        <thead>
            <tr>
                <th>voyelles</th>
                <th>consonnes</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td> <?php echo " $nbrvoyelles"; ?> </td>
                <td> <?php echo "$nbrconsonnes"; ?></td>
            </tr>
        </tbody>
    </table>
</body>

</html>