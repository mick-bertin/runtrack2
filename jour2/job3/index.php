<?php
//  les nombres de 0 à 100
 for ($i=0; $i <=100 ; $i++){ 
         $nombre = $i;
        //  echo" $i  <br>  ";
//   nombre est entre 0 et 20 : écrire en italique (<i>)      
 if ($i <=20  ) {
     $nombre="<i> $nombre </i> ";
    // echo"<i> $i </i> <br> ";
}
//  si le nombre est compris entre 25 et 50 : souligner.
 if ($i >=25 && $i <=50 ) {
    $nombre='<u> '.$nombre .'</u>  ';
    // echo'<u> '.$i .'</u> <br> ';
}
//  “La Plateforme_” à la place de 42
 if ($i==42  ) {
    $nombre="la plateforme  " ;
    //  echo "la plateforme <br> " ;
    } 
//    Afficher les nombres 
//   $i est assigner a $nombre    echo affiche le resultat  
    echo"$nombre <br>";
    } 
?>




