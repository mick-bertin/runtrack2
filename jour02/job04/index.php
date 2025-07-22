<?php
// .les nombres de 1 à 100

for ($i = 1; $i <= 100; $i++) {

    // ● Si le nombre est un multiple de 3, et pas un mutiple de 5 affichez “Fizz”.
    if ($i % 3 == 0 && $i % 5 != 0) {
        echo "FIZZ <br>";
    } elseif ($i % 5 == 0 && $i % 3 != 0)
    // ● Si le nombre est un multiple de 5, et pas un mutiple de 3 affichez “Buzz”.
    {
        echo "BUZZ <br>";
    } elseif ($i % 3 == 0 || $i % 5 == 0) {
        // ● Si le nombre est un multiple de 3 et de 5, affichez “FizzBuzz”.
        echo "FizzBuzz <br>";
    } else {
        // alor tu maffiche tout les nombre de 1 a 100
        echo "$i <br>";
    }
}
