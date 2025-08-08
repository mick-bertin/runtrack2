<!-- Créez une fonction nommée “bonjour($jour)”.
Cette fonction prend en paramètre un booléen nommé “$jour”.
● Si le paramètre “$jour” vaut true, la fonction doit afficher : “Bonjour”,
● Si le paramètre “$jour” vaut false, la fonction doit afficher : “Bonsoir”. -->
<?php
function bonjour($jour)
{

    if ($jour == true) {
        echo "bonjour";
    }
    if ($jour == false) {
        echo "bonsoir";
    }
}

bonjour(true);
echo "<br>";
bonjour(false);


?>