<?php
session_start();

// $_SESSION["mdpcorrespondance"]= true;
error_reporting(E_ALL);
ini_set('display_errors', '1');


// Vérification si le formulaire a été soumis
if (isset( $_POST['email'], $_POST['password'], $_POST['confirm_password'])) {
    $email = $_POST['email'];
    $password_email = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

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

    // Vérification de la correspondance des mots de passe
    if ($password_email !== $confirm_password) {
        $_SESSION['mdpcorrespondance'] = false; // Mettre à jour la variable de session
        $response = array(
            "success" => false,
            "message" => "Les mots de passe ne correspondent pas."
        );
    }else{
        // Vérification si l'adresse email est déjà enregistrée dans la base de données
        $sql_check_email = "SELECT COUNT(*) AS count FROM users WHERE email='$email'";
        $result_check_email = $conn->query($sql_check_email);
        $row = $result_check_email->fetch_assoc();
        if ($row['count'] > 0) {
            $_SESSION['mdpcorrespondance'] = false; // Mettre à jour la variable de session
            $response = array(
                "success" => false,
                "message" => "Votre adresse email est déjà enregistrée dans la base de données."
            );
        }else{
            // Insertion des données dans la base de données
            $hashed_password = password_hash($password_email, PASSWORD_DEFAULT); // Hacher le mot de passe
            $sql = "INSERT INTO users (email, password) VALUES ('$email', '$hashed_password')";

            if ($conn->query($sql) === true) {
                $_SESSION['mdpcorrespondance'] = true; // Mettre à jour la variable de session
                $response = array(
                    "success" => true,
                    "message" => "Inscription réussie! A présent," . html_entity_decode( "<a href='pageConnexion.php'>Connectez-vous</a>")
                );
            } else {
                $_SESSION['mdpcorrespondance'] = false; // Mettre à jour la variable de session
                $response = array(
                    "success" => false,
                    "message" => "Erreur lors de l'inscription: " . $conn->error
                );
            }
        }
    }

    // Envoi de la réponse JSON
    header('Content-Type: application/json');
    echo json_encode($response);
    exit; // Terminer le script après avoir envoyé la réponse JSON
}

// Fermeture de la connexion à la base de données
$conn->close();
?>
