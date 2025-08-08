<!-- Afficher les nombres de 0 à 100 en mettant un retour à la ligne entre chaque nombre
(<br />).
Si le nombre est entre 0 et 20 : écrire en italique (<i>), si le nombre est compris entre 25
    et 50 : souligner.
    Afficher “La Plateforme_” à la place de 42. -->

<?php
// parcourir les nombres de 0 à 100
for ($i = 0; $i <= 100; $i++) {
    // $i devient une nouvel variable
    $nombre = $i;
    //  echo" $i  <br>  ";
    //  si le  nombre est entre 0 et 20 : écrire en italique (<i>)      
    if ($i > 0 && $i < 20) {
        $nombre = "<i> $nombre </i> ";
        // echo"<i> $i </i> <br> ";
    }
    //  si le nombre est compris entre 25 et 50 : souligner.
    if ($i >= 25 && $i <= 50) {
        $nombre = '<u> ' . $nombre . '</u>  ';
        // echo'<u> '.$i .'</u> <br> ';
    }
    // si le nombre 42 mettre  “La Plateforme_” à la place de 42
    if ($i === 42) {
        $nombre = "la plateforme  ";
        //  echo "la plateforme <br> " ;
    }
    //   alors  Afficher les nombres 
    //   $i est assigner a $nombre    echo affiche le resultat  
    echo "$nombre <br>";
}
