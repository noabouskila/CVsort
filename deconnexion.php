<?php
session_start();
session_destroy();
header('Location: pageAccueil.php'); // Rediriger vers la page d'accueil déconnecté
exit();
?>
