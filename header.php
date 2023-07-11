
<link rel="stylesheet" href="css/header.css">


<header class=" z-3 w-100 d-flex flex-wrap align-items-start justify-content-between p-3  bg-white">

    <a href="pageAccueil.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <img src="img/logo.png" width="90" height="auto"/> 
    </a>

    <img src="img/burger-menu.svg" alt="burger menu" class="d-lg-none" style="width:40px" id="burger-menu"/>

    <img src="img/close-menu.svg" alt="close menu" class="d-lg-none" style="width:40px" id="close-menu"/>
    
    <ul class="nav nav-pills d-lg-flex align-items-center" id="navigation" >
        <li class="nav-item "><a href="pageAccueil.php" class="nav-link fw-lg-bolder ">Accueil</a></li>
        <li class="nav-item"><a href="pageAccueil.php#services" class="nav-link fw-lg-bolder ">Nos services</a></li>
        <li class="nav-item"><a href="pageAccueil.php#tarifications" class="nav-link fw-lg-bolder ">Tarifications</a></li>
        <li class="nav-item"><a href="pageAccueil.php#contacts" class="nav-link fw-lg-bolder ">Contacts</a></li>
        <?php if (isset($_SESSION['email'])): ?>
        <li class="nav-item"><a href="#" class="nav-link fw-lg-bolder ">Connecté en tant que <?php echo $_SESSION['email']; ?></a></li>
        <li class="nav-item"><a href="pageConnexion.php?action=logout" class="nav-link fw-lg-bolder ">Déconnexion</a></li>
        <?php else: ?>
        <li class="nav-item"><a href="pageConnexion.php" class="nav-link fw-lg-bolder ">Se connecter</a></li>
        <li class="nav-item"><a href="pageInscription.php" class="nav-link fw-lg-bolder ">S'inscrire</a></li>
        <?php endif; ?>
        <li class="nav-item">
            <button type="button" class="btn btn-primary rounded-pill shadow-lg">
                <a href="souscrire.php" class="nav-link fw-bolder text-white">Souscrire</a>
            </button>
        </li>
    </ul>
</header>

