<?php
$host = 'localhost';
$dbname = 'moduleconnexion';
$user = 'root';
$password = 'root';

// Connexion à MySQL
$conn = new mysqli($host, $user, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Erreur de connexion : " . $conn->connect_error);
}
