<!--
 parcourir tous les nombres de 2 a 1000
    parcourir  l ensemble du  tableau de nombre 
 
    si le nombres est divisible par un autre nombres que par lui meme ou par un et que les reste vault 0 
        alors passe a la suivante 
    sinon on affiche le nombre 
  -->


<?php
$tableNb = [2, 3, 4, 5, 6, 7, 8, 9];
$ifnbpremier = true;
//  parcourir tous les nombres de 2 a 1000
for ($i = 2; $i <= 1000; $i++) {
    //  parcourir  l ensemble du  tableau de nombre 
    foreach ($tableNb as $nombre) {
        // si le nombres est divisible par un autre nombres que par lui meme ou par un et que les reste vault 0 
        if ($i % $nombre == 0 && $nombre != $i) {
            $ifnbpremier = false;
            break;
        }
    }

    //   si on affiche le nombre 
    if ($ifnbpremier) {
        echo "$i <br> ";
    }
    //  verification du  nombre 
    $ifnbpremier = true;
}
?>