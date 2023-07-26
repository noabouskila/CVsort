<?php
session_start();

// Détruire toutes les variables de session
session_unset();

// Détruire la session
session_destroy();

// Rediriger vers la page d'accueil ou toute autre page appropriée après la déconnexion réussie
header('Location: index.php');
exit();
?>
