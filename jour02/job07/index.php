<!--
pour réaliser mon triangle 
je commence  par  utiliser mon premier trait qui est oblique 
ensuite 
je fais de  meme de l'autre côté en mettant le trait oblique dans le sens contraire pour obtenir un v à l'envers pour commencer 
ensuite je lui met une taille pour la hauteur 
puis je m'occupe de la base en lui mettant la taille horizontale qui touche chaque extrémité de la fin des traits précédent

  -->

<?php
$hauteur = 15;
$base = $hauteur;
for ($i = 0; $i <= $hauteur; $i++) {
    // echo "$i";
    for ($j = 0; $j <= $hauteur - $i; $j++) echo "  "; {
        echo "  ";
        echo "/";
    }
    for ($j = 0; $j <= $i + $i; $j++) echo "  "; {
    }
    echo "\\<BR>";
    if ($base == $i) {
        echo "  ";
        echo "  ";
    }
}
for ($i = 0; $i <= $base; $i++) {
    echo "-";
    echo "\n";
    echo "  ";
}
