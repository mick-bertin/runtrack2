<!-- Créez une fonction nommée “calcule()” qui prend 3 paramètres :
● le premier, “$a”, est un nombre,
● le deuxième, "$operation", est un caractère (string) contenant le type d’opération
(+, -, *, /, %),
● le troisième, “$b”, est un nombre.
La fonction doit retourner le résultat de l’opération. -->




<?php

// je cree une foction qui prend 3 parametrre
function calcule($a,  $operation,  $b)
{   // si la variable operation vaut + 
    if ($operation == "+") {
//alors jadditionne la valeurs a et la valeur b
        return $a + $b;
    }
    // si la variable operation vaut -    
    if ($operation == "-") {
        //alors soustrai la valeurs a et la valeur b
        return $a - $b;
    } // si la variable operation vaut *  
    if ($operation == "*") {
        //alors mutiplis la valeurs a et la valeur b
        return $a * $b;
    } // si la variable operation vaut / 
    if ($operation == "/") {
        //alors divise la valeurs a et la valeur b
        return $a / $b;
    } // si la variable operation vaut %
    if ($operation == "%") {
        //alors recupere le reste de la division de  la valeurs a et la valeur b
        return $a % $b;
    }
}
//exemple :
echo calcule(5, "+", 7);
echo "<br>";
echo calcule(5, "-", 7);
echo "<br>";
echo calcule(5, "*", 7);
echo "<br>";
echo calcule(5, "/", 7);
echo "<br>";
echo calcule(5, "%", 7);

?>