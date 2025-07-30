<!-- Créez une variable de type string nommée $str et affectez y le texte :
“I'm sorry Dave I'm afraid I can't do that”.
Créez un algorithme qui parcourt cette chaîne et affiche uniquement les voyelles.
Ex. : IoyaeIaaiIaoa -->

<?php
// $str = "I'm sorry Dave I'm afraid I can't do that";
// $voyelles = array("a", "e", "i", "o", "u", "y", "A", "E", "I", "O", "U", "Y");

$str = "I'm sorry Dave I'm afraid I can't do that";
$v = array("a", "e", "i", "o", "u", "y", "A", "E", "I", "O", "U");
for ($i = 0; isset($str[$i]); $i++) {
    foreach ($v as $voyelle) {
        if ($str[$i] == $voyelle) {
            echo $voyelle;
        }
    }
}
?>