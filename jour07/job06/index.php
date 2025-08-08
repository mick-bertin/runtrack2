<!-- Créez une fonction nommée “leetSpeak($str)”. Cette fonction prend en paramètre une
chaîne de caractères nommée “$str”.
Elle doit retourner la chaîne de caractères “$str” convertie en leet speak. Cela signifie
qu’elle doit la modifier de sorte à ce que :
● les “A” deviennent des “4”,
● les “B” des “8”,
● les “E” des “3”,
● les “G” des “6”,
● les “L” des “1”,
● les “S” des “5”
● les “T” des “7”.
Cela est valable que l’on crie ou non (majuscules et minuscules). -->

<?php
function leetSpeak($str)
{
    $ausecours = "";

    $tableau = array(
        "A" => "4",
        "B" => "8",
        "E" => "3",
        "G" => "6",
        "L" => "1",
        "S" => "5",
        "T" => "7",
        "a" => "4",
        "b" => "8",
        "e" => "3",
        "g" => "6",
        "l" => "1",
        "s" => "5",
        "t" => "7",
    );
    for ($i = 0; isset($str[$i]); $i++) {
        $jesuisunelettredutableau = false;

        foreach ($tableau as $key => $value) {

            if ($str[$i] == $key) {
                $ausecours = $ausecours . $tableau[$key];
                $jesuisunelettredutableau = true;
            }
            // return $str;

        }

        //Si ce n4est pas une lettre du tableau alors 
        if ($jesuisunelettredutableau != true) {
            $ausecours = $ausecours . $str[$i];
        }
    }

    return $ausecours;
}
echo leetSpeak("Salut la france");


// function leetSpeak($str)
// {
//     for ($i = 0; $i <= isset($str[$i]); $i++) {
//         if ($str[$i] == "a" or $str[$i] == "A") {
//             $str[$i] = 4;
//         }
//     }
//     return $str;
// }

// echo leetSpeak("le sais tu les dieux de la pommes");

?>