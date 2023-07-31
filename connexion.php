<?php
session_start();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Étape 1 : Établir une connexion à la base de données
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "parseurdecv";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Vérifier si la connexion a échoué
    if ($conn->connect_error) {
        die("La connexion à la base de données a échoué : " . $conn->connect_error);
    }

    if (isset($_POST['email'], $_POST['password'])) {
        // Étape 2 : Préparer et exécuter la requête pour vérifier l'e-mail et le mot de passe
        $email = $_POST['email'];
        $password_email = $_POST['password'];

        $stmt = $conn->prepare("SELECT id, password , prenom FROM users WHERE email = ?");
        
        if ($stmt) {
            $stmt->bind_param("s", $email);
            if ($stmt->execute()) {
                $result = $stmt->get_result();

                // Étape 3 : Vérifier si l'e-mail existe et si le mot de passe correspond
                if ($result->num_rows === 1) {
                    $row = $result->fetch_assoc();
                    $hashedPassword = $row['password'];

                    // Ajoutez un message de débogage pour vérifier la valeur de $row['prenom']
                     //echo "Prénom récupéré : " . $row['prenom'];
                
                    if (password_verify($password_email, $hashedPassword)) {
                        // Authentification réussie
                        $_SESSION['email'] = $email;
                        $_SESSION['utilisateur_id'] = $row['id'];
                        $_SESSION['inscription_complete'] = true;
                        $_SESSION['prenom'] = $row['prenom']; 
                
                        // Redirigez l'utilisateur vers la page d'accueil ou une autre page appropriée après la connexion réussie
                        echo json_encode(array("success" => true));
                        exit();
                    } else {
                        // Mot de passe incorrect
                        echo json_encode(array("success" => false, "message" => "Mot de passe incorrect"));
                        exit();
                    }
                } else {
                    // L'e-mail n'existe pas dans la base de données
                    echo json_encode(array("success" => false, "message" => "Adresse e-mail incorrecte"));
                    exit();
                }
                
            } else {
                // Erreur lors de l'exécution de la requête
                echo "Erreur lors de l'exécution de la requête : " . $conn->error;
            }

            // Fermer le résultat et la connexion à la base de données
            $stmt->close();
        } else {
            // Erreur lors de la préparation de la requête
            echo "Erreur lors de la préparation de la requête : " . $conn->error;
        }

        // Fermer la connexion à la base de données
        $conn->close();
    } else {
        // Données du formulaire non fournies
        echo "Veuillez remplir tous les champs du formulaire";
    }
}

?>
