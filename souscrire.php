<!-- <?php session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/header.css">
</head>
<style>
    body {
        background: linear-gradient(to right, #34E1DF, #0876D9);
        overflow-x: hidden;
    }
</style>
<body>
<div>
    <?php
    include "header.php"
    ?>
</div>
<div>
    <br>
    <h1 class="text-center fs-2 text-primary fw-normal">Contactez-nous !</h1>
    <br>
    <div class="row justify-content-center">
        <div class="col-sm-6">
            <div class="border border-success p-2 mb-2 rounded-4 bg-white position-relative">
                <img src="img/LOGOCONTACT.png" alt="Logo Contact" style="width: 200px; position: absolute; top: -60px; right: -60px; transform: rotate(30deg);">
                <div class="p-5">
                    <h1 class="text fs-3 text-primary fw-normal">Envoyez-nous un message</h1>
                    <br>
                    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                        <div class="mb-3">
                            <label for="nom" class="form-label">Nom</label>
                            <input type="text" class="form-control" id="nom" name="nom" required>
                        </div>
                        <div class="mb-3">
                            <label for="prenom" class="form-label">Prénom</label>
                            <input type="text" class="form-control" id="prenom" name="prenom" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Adresse Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary text">envoyer</button>
                        </div>
                        <?php if($_SESSION["msg"] = true){
                            echo "<p>Votre message à bien été envoyé ! nous vous répondrons dans les méilleurs délais. </p>";
                            $_SESSION["msg"] = false; 
                        }
                        else{
                            echo "<p style='color: red'>Erreur lors de l'enregistrement du message :  . $conn->error </p>";
                            $msg = true;
                        }
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
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
            $_SESSION["msg"] = true;
           
            
            // echo "Message enregistré avec succès.";
        } else {
            
            $_SESSION["msg"] = true;
            // echo "Erreur lors de l'enregistrement du message : " . $conn->error;
        }

        // Fermer la connexion à la base de données
        $conn->close();
    } else {
        echo "Tous les champs du formulaire doivent être remplis.";
    }
}
?>

<br>
<br>
<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 border-top bg-white">
    <p class="col-md-4 mb-0 text-body-secondary">© 2023 Company, Inc</p>
    <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
    </a>
    <ul class="nav col-md-4 justify-content-end">
        <li class="nav-item"><a href="fiche_contact2.php" class="nav-link px-2 text-body-secondary">contact</a></li>
        <li class="nav-item"><a href="" class="nav-link px-2 text-body-secondary">mentions légales</a></li>            <li class="nav-item"><a href="" class="nav-link px-2 text-body-secondary">politique de confidentialité</a></li>
    </ul>
</footer>


<script src="js/header.js"></script>
</body>
</html> -->