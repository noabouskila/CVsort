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

    // Requête SELECT pour vérifier si l'adresse email existe dans la table des utilisateurs
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // L'adresse email existe dans la base de données, générer un nouveau mot de passe et mettre à jour la base de données
        $newPassword = generateRandomPassword(5);
        $sql_update = "UPDATE users SET password = '$newPassword' WHERE email = '$email'";

        if ($conn->query($sql_update) === true) {
            echo "Votre mot de passe a été réinitialisé avec succès. Votre nouveau mot de passe est : $newPassword ";
        } else {
            echo "Erreur lors de la réinitialisation du mot de passe: " . $conn->error;
        }
    } else {
        // L'adresse email n'existe pas dans la base de données, afficher un message d'erreur
        echo "Vous n'etes pas encore inscrit (Adresse email non trouvée dans notre base de données).";
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
echo "<button onclick='window.location.href = \'pageConnexion.php\';'>Accéder à la page de connexion</button> / 
<button onclick='window.location.href = \'pageInscription.php\';'>Accéder à la page d'inscription</button>";
?>
