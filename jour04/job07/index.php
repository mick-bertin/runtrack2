<!-- Faire un formulaire avec deux <input> de type text ayant comme nom “largeur” et
“hauteur” et un bouton submit.
Vous devez créer un algorithme qui affiche, à la validation du formulaire,
une maison telle que :
Si on entre les valeurs : largeur =10 et hauteur = 5 dans les champs, la
maison qui s’affiche sur la page doit ressembler à ceci :

Si on entre les valeurs largeur = 20 et hauteur = 10 dans les champs,
la maison qui s’affiche sur la page doit ressembler à ceci : -->

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
        body {
            display: flex;
            align-items: center;
            flex-direction: column;
            height: 100%;
        }

        form {
            margin-top: 100px;
            margin-bottom: 50px;
        }
    </style>

    <form action="index.php" method="get">
        <input type="text" name="hauteur" id="hauteur" placeholder="hauteur : ">
        <input type="text" name="largeur" id="largeur" placeholder="largeur : ">
        <input type="submit" value="submit">
    </form>
    <?php



    // $hauteur = 5;
    // $largeur = 10;

    if (isset($_GET["largeur"]) && isset($_GET["hauteur"])) {
        $largeur = $_GET["largeur"];
        $hauteur = $_GET["hauteur"];


        for ($i = 0; $i <= $hauteur - 1; $i++) {

            for ($j = 0; $j <= $hauteur - $i; $j++) echo "  "; {
                echo "/";
            }
            for ($j = 0; $j <= $i + $i; $j++)  echo "_"; {
                echo "_";
            }

            echo "\\<BR>";
        }

        // -----------------------------------
        for ($i = 0; $i < $hauteur; $i++) {
            // echo $i;  
            echo "<br>";
            echo " ";
            echo "|";

            for ($h = 1; $h <= $largeur; $h++) {
                // echo $i;
                // echo " ";
                if ($i == -$h   || $i == $largeur && $i == $hauteur || $h == $largeur) {
                    echo " ";
                    echo " ";
                    echo " ";
                    // echo "\n";
                } else {
                    // echo "\n";
                    echo " ";
                    // echo " ";
                }
            }

            echo "|";
        }
    }



    ?>
</body>

</html>

<?php
// nome une hauteur et une largeur 
// parcour largeur
// Parcours hauteur
///////Affiche largeur et la hauteur 
//////si j affiche largeur et la hauteur 
/////////sinon je remplis avec du vide 

///////affiche la hauteur et fait un saut de ligne echo "   ";



// -----------------------------------
// for ($i = 0; $i <= $largeur; $i++) {
//     // echo $i;
//     echo "<br>";
//     echo "  ";
//     for ($h = 1; $h <= $hauteur; $h++) {
//         // echo $h;

//         if ($i == 0 || $i == $largeur  || $h == 1 || $h == $hauteur) {
//             echo ".";
//             echo " ";
//         } else {
//             echo "\n";
//             echo " ";
//         }
//     }
// }
// $largeur = 5;
// $hauteur = 10;