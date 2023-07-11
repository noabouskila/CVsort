<?php
session_start();

$mdp = $_SESSION["mdpcorrespondance"];
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
    </div>
    <div class="row justify-content-center">
        <div class="col-sm-6">
            <div class="border border-success p-2 mb-2 rounded-4 bg-white">
                <div class="p-5">
                    <h1 class="text-center fs-2 text-primary fw-normal">Inscription</h1>
                    </br>
                    <form method="POST" action="inscription.php"> <!-- Ajout du formulaire et de l'action -->
                        <label for="exampleFormControlInput1" class="form-label fs-6">Votre adresse mail</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="name@example.com">
                        </br>
                        <label for="inputPassword5" class="form-label fs--">Votre mot de passe</label>
                        <input type="password" id="inputPassword5" class="form-control" name="password" aria-labelledby="passwordHelpBlock">
                        </br>
                        <label for="inputPassword5" class="form-label fs--">Ressaisissez votre mot de passe</label>
                        <input type="password" id="inputPassword5" class="form-control" name="confirm_password" aria-labelledby="passwordHelpBlock">
                        </br>
                        <?php if($mdp == true){
                          
                        }
                        else{
                            echo '<p style="color: red">Les mots de passe ne correspondent pas.</p>';
                            $_SESSION["mdpcorrespondance"] = true ;
                        }
                        ?>
                        
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary text" name="register">S'inscrire</button> <!-- Modification du bouton en type "submit" et ajout de l'attribut "name" -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div container="text-center">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <p class="text-body-secondary"><a href="pageInscription" class="text-reset">Vous n'avez pas encore de compte ? Inscrivez-vous.</a></p>
            </div>
        </div>
    </div>



    <script src="js/header.js"></script>
</body>
</html>
