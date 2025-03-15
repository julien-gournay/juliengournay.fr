<?php
session_start();

// Configuration de reCAPTCHA (remplace par tes clés)
$recaptcha_secret = "6Leq1soqAAAAACahcM9TKwpZUiMGX3jIUvNa8_Qf";

// Fonction de nettoyage des entrées utilisateur
function sanitize_input($data) {
    return htmlspecialchars(strip_tags(trim($data)), ENT_QUOTES, 'UTF-8');
}

// Vérification du honeypot (champ caché dans le formulaire HTML)
if (!empty($_POST["honeypot"])) {
    die("Spam détecté.");
}

// Limitation de la fréquence d'envoi (anti-spam)
if (isset($_SESSION["last_submit"]) && (time() - $_SESSION["last_submit"] < 30)) {
    die("Veuillez attendre avant de soumettre un nouveau message.");
}
$_SESSION["last_submit"] = time();

// Vérification reCAPTCHA
$response = $_POST["g-recaptcha-response"];
$verify = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$recaptcha_secret&response=$response");
$captcha_success = json_decode($verify);

if (!$captcha_success->success) {
    die("Échec de la vérification du CAPTCHA.");
}

// Récupération et validation des données du formulaire
$nom = sanitize_input($_POST["nom"]);
$prenom = sanitize_input($_POST["prenom"]);
$email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) ? $_POST["email"] : null;
$sujet = sanitize_input($_POST["sujet"]);
$message = sanitize_input($_POST["message"]);

if (!$email) {
    die("Adresse email invalide.");
}

// Vérification des pièces jointes
$allowed_types = ["image/jpeg", "image/png", "application/pdf"];
$data = "";
$file_name = "";

if (isset($_FILES["file"]) && $_FILES["file"]["size"] > 0) {
    $file_name = $_FILES["file"]["name"];
    $file_tmp = $_FILES["file"]["tmp_name"];
    $file_size = $_FILES["file"]["size"];
    $file_type = $_FILES["file"]["type"];

    if (!in_array($file_type, $allowed_types)) {
        die("Type de fichier non autorisé.");
    }

    $file = fopen($file_tmp, "rb");
    $data = fread($file, $file_size);
    fclose($file);
}

// Préparation des en-têtes du mail
$headers = "MIME-Version: 1.0\r\n";
$headers .= "From: contact@juliengournay.fr\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Return-Path: contact@juliengournay.fr\r\n";
$headers .= "Content-Type: multipart/mixed; boundary=\"boundary\"\r\n\r\n";

// Corps du mail
$message_body = "--boundary\r\n";
$message_body .= "Content-type: text/plain; charset=\"UTF-8\"\r\n";
$message_body .= "Content-Transfer-Encoding: 8bit\r\n\r\n";
$message_body .= "$message\r\n";

// Ajout de la pièce jointe si présente
if (!empty($data)) {
    $message_body .= "--boundary\r\n";
    $message_body .= "Content-Type: application/octet-stream; name=\"$file_name\"\r\n";
    $message_body .= "Content-Transfer-Encoding: base64\r\n";
    $message_body .= "Content-Disposition: attachment\r\n\r\n";
    $message_body .= chunk_split(base64_encode($data)) . "\r\n";
}

// Fermeture de la frontière
$message_body .= "--boundary--\r\n";

// Envoi du mail
if (mail("contact@juliengournay.fr", "FORMULAIRE DU SITE : $sujet", $message_body, $headers)) {
    echo "Votre message a bien été envoyé.";
} else {
    echo "Erreur lors de l'envoi du message.";
}

// Redirection après envoi
header('Location: /confirm-mail.html');
exit;
?>
