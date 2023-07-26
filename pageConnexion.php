<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/header.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
                <form method="POST" action="connexion.php">
                    <label for="email" class="form-label fs-6">Votre adresse e-mail</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                    </br>
                    <label for="password" class="form-label fs-6">Votre mot de passe</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                        <a href="password_reset.php" class="text-reset">Mot de passe oublié ?</a>
                    </div>
                    </br>

                    <p id="erreur-connexion" style="color: red">
                    </p>

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
<script src="js/connexion.js"></script>

</body>
</html>

