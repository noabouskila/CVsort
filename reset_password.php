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

// Vérification si le formulaire a été soumis
if (isset($_POST['email'])) {
    $email = $_POST['email'];

    // Génération du nouveau mot de passe aléatoire
    $newPassword = generateRandomPassword(5);

    // Mise à jour du mot de passe dans la base de données
    $sql = "UPDATE users SET password = '$newPassword' WHERE email = '$email'";
    if ($conn->query($sql) === true) {
        echo "Votre mot de passe a été réinitialisé avec succès. Votre nouveau mot de passe est : $newPassword";
    } else {
        echo "Erreur lors de la réinitialisation du mot de passe: " . $conn->error;
    }
}

// Fonction pour générer un mot de passe aléatoire
function generateRandomPassword($length) {
    $characters = 'abcdefghijklmnopqrstuvwxyz';
    $password = '';
    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $password;
}

// Fermeture de la connexion à la base de données
$conn->close();
echo '<button onclick="window.location.href = \'pageConnexion.php\';">Accéder à la page de connexion</button>';
?>
