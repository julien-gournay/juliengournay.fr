<?php
    // Détruire la session de l'administrateur
    session_start();
    session_destroy();

    // Rediriger l'administrateur vers la page de connexion
    header('Location: ../login.php');
    exit;
?>