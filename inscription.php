<?php
session_start();
$_SESSION["mdpcorrespondance"] = true;


// Connexion à la base de données (exemple avec MySQLi)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "parseurdecv";

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die("Connexion échouée: " . $conn->connect_error);
}


// Vérification si le formulaire a été soumis
if (isset($_POST['register'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Vérification de la correspondance des mots de passe
    if ($password !== $confirm_password) {
        // echo "Les mots de passe ne correspondent pas.";
        $_SESSION['mdpcorrespondance'] = false;
        header('Location: pageInscription.php');
    } else {
        $_SESSION['mdpcorrespondance'] = true;
        // Insertion des données dans la base de données
        $sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
        if ($conn->query($sql) === true) {
            
            $_SESSION['utilisateur_id']; 
            $_SESSION['inscription_complete'];

            echo "Inscription réussie.";
            // Redirection vers la page de connexion
            header('Location: pageConnexion.php');
            exit();
        } else {
            echo "Erreur lors de l'inscription: " . $conn->error;
        }
    }
}

// Fermeture de la connexion à la base de données
$conn->close();
?>
