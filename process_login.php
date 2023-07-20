<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "parseurDeCv";

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die("Connexion échouée: " . $conn->connect_error);
}

// Vérification si le formulaire de connexion a été soumis
if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Vérification des informations de connexion dans la base de données
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // L'utilisateur est authentifié avec succès
        echo "Connexion réussie.";
        // Redirection vers la page d'accueil ou autre page de votre choix
        header("Location: index.php");
        exit();
    } else {
        // Échec de l'authentification
        echo "Identifiants invalides.";
    }
}

// Fermeture de la connexion à la base de données
$conn->close();
?>







