<!-- En utilisant php, connectez-vous à la base de données “jour09”. A l’aide d’une requête
SQL, sélectionnez dans une colonne nommée “capacite_totale” la somme des capacités
des salles. Affichez le résultat de cette requête dans un tableau html. La première ligne
de votre tableau html doit contenir le nom des champs. Les suivantes doivent contenir
les données présentes dans votre base de données. -->

<?php
// Connexion à la base de données
$host = "localhost";        // Adresse du serveur
$dbname = "jour09";         // Nom de la base
$username = "root";         // Nom d'utilisateur
$password = "root";         // Mot de passe

// Connexion avec mysqli
$connexion = mysqli_connect($host, $username, $password, $dbname);

// Vérification de la connexion
if (!$connexion) {
    die("Connexion échouée : " . mysqli_connect_error());
}

// Requête SQL pour récupérer toutes les informations de la table etudiants
$sql = "SELECT SUM(capacite)AS capacite_totale FROM salles;";
$result = mysqli_query($connexion, $sql);

if (!$result) {
    die("Erreur dans la requête SQL : " . mysqli_error($connexion));
}

// Récupération des noms de colonnes
$columns = array();
foreach (mysqli_fetch_fields($result) as $field) {
    $columns[] = $field->name;
}

// Récupération de toutes les lignes dans un tableau associatif
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Création du tableau HTML
echo "<table border='1' cellpadding='5' cellspacing='0' width: '500'>";

// En-tête du tableau
echo "<thead><tr>";
foreach ($columns as $columnName) {
    echo "<th>" . htmlspecialchars($columnName) . "</th>";
}
echo "</tr></thead>";

// Corps du tableau
echo "<tbody>";
foreach ($rows as $row) {
    echo "<tr>";
    foreach ($columns as $columnName) {
        echo "<td>" . htmlspecialchars($row[$columnName]) . "</td>";
    }
    echo "</tr>";
}
echo "</tbody>";
echo "</table>";

// Fermeture de la connexion
mysqli_close($connexion);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        display: flex;
        justify-content: space-around;
        align-items: center;
    }

    table {
        width: 500px;
    }
</style>

<body>

</body>

</html>