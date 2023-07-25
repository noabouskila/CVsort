<?php
session_start();
$_SESSION['utilisateur_id']; 
$_SESSION['inscription_complete'];

// Vérification des informations d'identification de l'utilisateur
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Effectuez ici la vérification des informations d'identification de l'utilisateur
    // Si les informations sont valides, démarrez la session et stockez l'e-mail de l'utilisateur dans la variable de session

    if (true) {
        $_SESSION['email'] = $email;
        $_SESSION['utilisateur_id'] = true; 
        $_SESSION['inscription_complete'] = true;
        // Redirigez l'utilisateur vers la page d'accueil ou une autre page appropriée après la connexion réussie
        header('Location: index.php');
        exit();
    } else {
        // Les informations d'identification sont invalides, affichez un message d'erreur ou effectuez une autre action appropriée
        echo "Identifiants incorrects";
    }
}

if (isset($_GET['action']) && $_GET['action'] == 'logout') {
    session_destroy();
    header('Location: index.php');
    exit();
}
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
        overflow-x: hidden;
    }
</style>
<body class="bg-light">
<div>
    <?php
    include 'header.php'
    ?>
</div>
<div>
    </br>
    </br>
    </br>
</div>
<div class="row justify-content-center">
    <div class="col-sm-6">
        <div class="border border-success p-2 mb-2 rounded-4 bg-white">
            <div class="p-5">
                <h1 class="text-center fs-2 text-primary fw-normal">Connexion</h1>
                </br>
                <form method="post" action="pageConnexion.php">
                    <label for="email" class="form-label fs-6">Votre adresse e-mail</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                    </br>
                    <label for="password" class="form-label fs-6">Votre mot de passe</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                        <a href="password_reset.php" class="text-reset">Mot de passe oublié ?</a>
                    </div>
                    </br>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary text">Se connecter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div container="text-center">
    <div class="row justify-content-center">
        <div class="col-sm-6">
            <p class="text-body-secondary"><a href="pageInscription.php" class="text-reset">Vous n'avez pas encore de compte ? Inscrivez-vous.</a></p>
        </div>
    </div>
</div>


<script src="js/header.js"></script>

</body>
</html>

