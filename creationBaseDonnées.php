<?php
// Connexion à la base de données (exemple avec MySQLi)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "parseurDeCv";

$conn = new mysqli($servername, $username, $password);

// Vérification de la connexion
if ($conn->connect_error) {
    die("Connexion échouée: " . $conn->connect_error);
}

// Création de la base de données
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === true) {
    // Sélection de la base de données
    $conn->select_db($dbname);

    // Création de la table "users" pour stocker les informations d'inscription
    $sql = "CREATE TABLE IF NOT EXISTS users (
        id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        email VARCHAR(255) NOT NULL,
        password VARCHAR(255) NOT NULL
    )";

    if ($conn->query($sql) === true) {
        echo "La base de données et la table ont été créées avec succès.";
    } else {
        echo "Erreur lors de la création de la table : " . $conn->error;
    }
} else {
    echo "Erreur lors de la création de la base de données : " . $conn->error;
}

// Fermeture de la connexion à la base de données
$conn->close();
?>
