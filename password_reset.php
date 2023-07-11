<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/header.css.css">
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
                <h1 class="text-center fs-2 text-primary fw-normal">Réinitialisation du mot de passe</h1>
                </br>
                <form method="post" action="reset_password.php">
                    <label for="email" class="form-label fs-6">Votre adresse mail</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
                    </br>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary text">Réinitialiser le mot de passe</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script src="js/header.js"></script>
</body>
</html>
