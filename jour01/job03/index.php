<?php
$boolean = true;
$entier = 11;
$chaineDeCaractere = "hello moi ";
$flottant = 10.5;
echo "$boolean $entier $chaineDeCaractere $flottant";

?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>





  <style>
    tr,
    td {
      border: black solid 2px;
      text-align: center;
    }

    thead {
      border: black solid 2px;
      text-align: center;
      background-color: yellowgreen;
    }
  </style>


  <table>
    <thead>
      <tr>
        <th>type</th>
        <th>nom</th>
        <th>valeur</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo gettype($boolean); ?></td>
        <td><?php echo " boolean"; ?></td>
        <td><?php echo $boolean; ?></td>
      </tr>
      <tr>
        <td><?php echo gettype($chaineDeCaractere); ?></td>
        <td><?php echo "chaineDeCaractere"; ?></td>
        <td><?php echo $chaineDeCaractere; ?></td>
      </tr>
      <tr>
        <td><?php echo gettype($flottant); ?></td>
        <td><?php echo " flottant"; ?></td>
        <td><?php echo $flottant; ?></td>
      </tr>
      <tr>
        <td><?php echo gettype($entier); ?></td>
        <td><?php echo "entier"; ?></td>
        <td><?php echo $entier; ?></td>
      </tr>
    </tbody>

  </table>

</body>

</html>