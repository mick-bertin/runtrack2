
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$boolean=true;
$entier=11;
$chaineDeCaractere="chaine de caractere";
$flottant=10.5;

echo "$boolean $entier $chaineDeCaractere $flottant";

?>

  <style>
    tr,td{border: black solid 2px;
        text-align: center;
    }
  </style> 
<table>
       <tr>
            <td>type</td>
            <td>nom</td>
            <td>valeur</td>
         </tr>
         <tr>
            <td><?php echo gettype($boolean)?></td>
            <td><?php echo"$chaineDeCaractere"?></td>
            <td><?php echo"$entier"?></td>
         </tr>

  </table>
        
</body>
</html>
