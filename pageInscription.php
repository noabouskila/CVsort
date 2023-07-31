<?php
session_start();

// $_SESSION["mdpcorrespondance"]= true;
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>



<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/header.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

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
                    <form method="POST" action="inscription.php"> 

                        <label for="nom" class="form-label fs-6">Votre nom</label>
                        <input type="text" class="form-control" id="nom" name="nom" placeholder="Votre nom" required>
                        </br>

                        <label for="prenom" class="form-label fs-6">Votre prénom</label>
                        <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Votre prénom" required>

                        <label for="exampleFormControlInput1" class="form-label fs-6">Votre adresse mail</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="name@example.com" required>
                        </br>
                        <label for="inputPassword5" class="form-label fs--">Votre mot de passe</label>
                        <input type="password" id="inputPassword5" class="form-control" name="password" aria-labelledby="passwordHelpBlock" required>
                        </br>
                        <label for="inputConfirmPassword5" class="form-label fs--">Ressaisissez votre mot de passe</label>
                        <input type="password" id="inputConfirmPassword5" class="form-control" name="confirm_password" aria-labelledby="passwordHelpBlock" required>
                        </br>
                       
                        <p id="confirmation-inscription" style="color: red">
                        </p>
                      
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
                <p class="text-body-secondary"><a href="pageConnexion.php" class="text-reset">Vous avez déjà un compte ? Connectez-vous.</a></p>
            </div>
        </div>
    </div>

    <footer id="footer" class="bg-white">
        <div class="d-flex flex-column flex-md-row justify-content-around w-90 m-auto  py-5 px-5" >
            <ul class="list-unstyled">
                <li><img src="img/logo.png" alt="logo cvSort" class="w-25 mb-3 mb-md-0"></li>
                <li> <a href="#" class="text-decoration-none text-black"> Mentions légales </a> </li>
                <li> <a href="#" class="text-decoration-none text-black"> Politique de confidentialité </a> </li>
                <li> <a href="#" class="text-decoration-none text-black"> Politique des Cookies </a> </li>
            </ul>
            
            <ul class="list-unstyled mt-3 mt-md-0">
                <li><h5 class="text-primary">CVSORT COMPANY</h5></li>
                <li class="mb-3">92 Quai de la Loire, 75019 Paris</li>

                <li> <h6 class="text-primary">Adresse email</h6></li>
                <li class="mb-3">
                    <a href="mailto:contact@cvsort.com" class="text-decoration-none text-black" >contact@cvsort.com
                    </a>
                </li>

                <li><h6 class="text-primary">Téléphone </h6></li>
                <li>00 00 00 00 00</li>
            </ul>
        </div>
        
	</footer>

    <script src="js/header.js"></script>
    <script src="js/inscription.js"></script>
</body>
</html>
