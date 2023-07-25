<?php
session_start();

// Vérifier si le formulaire est soumis
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Vérifier si les clés existent dans le tableau $_POST
    if (isset($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['message'])) {
        // Récupérer les données soumises par le formulaire
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        // Connexion à la base de données
        $servername = "localhost"; // Remplacez par le nom de votre serveur
        $username = "root"; // Remplacez par votre nom d'utilisateur
        $password = ""; // Remplacez par votre mot de passe
        $dbname = "parseurdecv"; // Remplacez par le nom de votre base de données

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Vérifier la connexion
        if ($conn->connect_error) {
            die("Échec de la connexion à la base de données : " . $conn->connect_error);
        }

        // Préparer et exécuter la requête d'insertion
        $sql = "INSERT INTO messages (nom, prenom, email, message) VALUES ('$nom', '$prenom', '$email', '$message')";

        if ($conn->query($sql) === TRUE) {
            $response = array('success' => true, 'message' => 'Votre message a bien été envoyé!');
        } else {
            $response = array('success' => false, 'message' => 'Erreur lors de l\'enregistrement du message : ' . $conn->error);
        }

        // Fermer la connexion à la base de données
        $conn->close();

        // Renvoyer la réponse JSON
        echo json_encode($response);
    } else {
        echo "Tous les champs du formulaire doivent être remplis.";
    }
}
?>
