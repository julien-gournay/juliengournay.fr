<?php

$headers = 'MIME-Version: 1.0'."\r\n";

// Récupération des données du formulaire
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$email = $_POST["email"];
$sujet = $_POST["sujet"];
$message = $_POST["message"];

// Vérifier si un fichier a été joint
if (isset($_FILES["file"])) {
    $file_name = $_FILES["file"]["name"];
    $file_tmp = $_FILES["file"]["tmp_name"];
    $file_size = $_FILES["file"]["size"];
    $file_type = $_FILES["file"]["type"];

    // Vérifier si le fichier a bien été téléchargé
    if ($file_size > 0) {
        $file = fopen($file_tmp, "rb");
        $data = fread($file, $file_size);
        fclose($file);
    } else {
        $data = "";
    }
} else {
    $file_name = "";
    $data = "";
}

// Envoi du mail
$sujet = sprintf("FORMULAIRE DU SITE : %s", $sujet);

// Ajouter un saut de ligne après le dernier en-tête
$headers .= "Content-Type: multipart/mixed; boundary=\"boundary\"\r\n";
$headers .= "\r\n";

$message_body = "--boundary\r\n";
$message_body .= "Content-type: text/plain; charset=\"UTF-8\"\r\n";
$message_body .= "Content-Transfer-Encoding: 8bit\r\n\r\n";
$message_body .= "$message\r\n";

// Ajouter la pièce jointe
if (!empty($data)) {
    $message_body .= "--boundary\r\n";
    $message_body .= "Content-Type: application/octet-stream; name=\"$file_name\"\r\n";
    $message_body .= "Content-Transfer-Encoding: base64\r\n";
    $message_body .= "Content-Disposition: attachment\r\n\r\n";
    $message_body .= chunk_split(base64_encode($data)) . "\r\n";
}

// Fermer la frontière
$message_body .= "--boundary--\r\n";

// Envoi du mail
mail("contact@juliengournay.fr", $sujet, $message_body, "From: $prenom $nom <$email>\r\n$headers");

// Affichage d'un message de confirmation
echo "Votre message a bien été envoyé.";
header('Location: /confirm-mail.html');
?>