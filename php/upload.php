<?php
// Inclure le fichier de configuration (au début du script)
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $titre = $_POST['titre'];
    $description = $_POST['description'];
    $type = $_POST['type'];
    $format = $_POST['format'];

    // Traitement du fichier
    $target_dir = "C:/wamp64/www/juliengournay.fr/files/";
    $original_filename = basename($_FILES["fichier"]["name"]);
    // Remplacer les espaces par des underscores
    $safe_filename = str_replace(' ', '_', $original_filename);
    $target_file = $target_dir . $safe_filename;

    // Vérifier si le fichier a été téléchargé sans erreur
    if (move_uploaded_file($_FILES["fichier"]["tmp_name"], $target_file)) {
        // Insérer les données dans la base de données
        $taille = filesize($target_file);
        $lien = "files/".$safe_filename;

        $sql = "INSERT INTO document (titre, description, typeDoc, format, taille, lien) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "ssssss", $titre, $description, $type, $format, $taille, $lien);
        mysqli_stmt_execute($stmt);

        if (mysqli_stmt_error($stmt)) {
            echo "Erreur lors de l'insertion en base de données : " . mysqli_stmt_error($stmt);
        } else {
            echo "Le fichier a été téléchargé avec succès.";
        }
        mysqli_stmt_close($stmt);
    } else {
        echo "Une erreur s'est produite lors du téléchargement du fichier : " . error_get_last()['message'];
    }
}