<?php
    require_once __DIR__ . '/../vendor/autoload.php';

    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
    $dotenv->load();

    // Informations de connexion à votre base de données
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "juliengrn";

    // Créer la connexion
    $conn = new mysqli($servername, $username, $password, $dbname);
    $pdo = new mysqli($servername, $username, $password, $dbname);

    // Vérifier la connexion
    if ($conn->connect_error) {
        die("Connexion échouée : " . $conn->connect_error);
    }

    $cnt = mysqli_connect ($servername, $username,$password);
    $mabase= mysqli_select_db($cnt, $dbname);

    if($mabase){
        echo "<script>console.log(' Connexion réusion à la BDD " . $dbname. "' );</script>";
    }
    else{
        echo "<script>console.log(' Connexion échoué à la BDD " . $dbname. "' );</script>";
    }
?>