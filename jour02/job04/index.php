<?php
// .les nombres de 1 à 100

for ($i = 1; $i <= 100; $i++) {

    // ● Si le nombre est un multiple de 3, affichez “Fizz”.
    if ($i % 3 == 0 && $i % 5 != 0) {
        echo "FIZZ <br>";
    } elseif ($i % 5 == 0 && $i % 3 != 0)
    // ● Si le nombre est un multiple de 5, affichez “Buzz”.
    {
        echo "BUZZ <br>";
    } elseif ($i % 3 == 0 || $i % 5 == 0) {
        echo "FizzBuzz <br>";
    } else {
        echo "$i <br>";
    }

    // ● Si le nombre est un multiple de 3 et de 5, affichez “FizzBuzz”.






}
