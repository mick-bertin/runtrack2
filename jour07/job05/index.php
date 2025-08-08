<!-- Créez une fonction nommée “occurrences($str, $char)”.
Cette fonction prend en paramètre une chaîne de caractères nommée “$str” et un
caractère nommé “$char”.
Elle doit retourner le nombre d'occurrences du caractère “$char” dans “$str”.
Exemple : si $str = “Bonjour” et $char=”o” alors le nombre d'occurrences de $char dans
$str sera : 2 -->

<?php
//je cree une fonction nomee occurrences avec  2 paramettres 
function occurrences($str, $char)
{   //je cree une variable compte pour faire une decompte 
    $compteur = 0;
    //je parcour avec une boucle for ma variable str et je verrifi si elle existe avec isset 
    for ($i = 0; isset($str[$i]); $i++) {
        // echo "je veut comparer si " . $str[$i] . " et que le caractere acctuel : $char <br>";
        //si  str de i == la variable char la variable compteur compte  chaque $i 
        if ($str[$i] == $char) {
            $compteur++;
        }
    }
    //je retoune  le resultat que conte a reucpere 
    return $compteur;
}
// je test la fonction occurence  jutilise une chaine de caractere  comme parametre 
echo occurrences("bonjour", "o") . "<br>";
echo "il y a :";
echo occurrences("bonjour nicolas et jean botiste", "o");

?>