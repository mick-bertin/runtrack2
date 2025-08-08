<!-- Afficher tous les nombres de 0 à 1337 compris SAUF 26, 37, 88, 1111 et 3233 en
mettant un retour à la ligne entre chaque nombre (<br />). -->



<?php
// parcourir tout les nombres de 0 à 1337
for ($i = 0; $i <= 1337; $i++) {
    // si jarrive au  nombre 26 ou 37 ou 88 ou  1111 ou 3233  
    if ($i === 26 || $i === 37 || $i === 88 || $i === 1111 || $i === 3233) {
        // alor  je break je ne les affiche pas         
        continue;
    } // sinon jaffiche tout les nombre avec un br saut de ligne 
    echo "$i <br>";
}

?>