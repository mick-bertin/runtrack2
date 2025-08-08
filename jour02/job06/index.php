<!-- Faire un algorithme qui affiche un rectangle de 20 de largeur par 10 de hauteur. Ces
dimensions devront être stockées dans deux variables $largeur et $hauteur, modifiables
facilement. -->
<!-- pour une largeur -->

<?php
// nome une hauteur et une largeur 
// parcour largeur
// Parcours hauteur
///////Affiche largeur et la hauteur 
//////si j affiche largeur et la hauteur 
/////////sinon je remplis avec du vide 

///////affiche la hauteur et fait un saut de ligne echo "   ";


$largeur = 20;
$hauteur = 10;
for ($i = 0; $i <= $largeur; $i++) {
    // echo $i; 
    echo "<br>";
    for ($h = 1; $h <= $hauteur; $h++) {
        // echo $h;

        if ($i == 0 || $i == $largeur  || $h == 1 || $h == $hauteur) {
            echo "*";
            echo " ";
        } else {
            echo "\n";
            echo " ";
        }
    }
}
