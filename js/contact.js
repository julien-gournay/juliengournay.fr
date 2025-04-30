function envoyer() {
    // Récupération des données du formulaire
    var nom = document.getElementById("nom").value;
    var prenom = document.getElementById("prenom").value;
    var email = document.getElementById("email").value;
    var sujet = document.getElementById("sujet").value;
    var message = document.getElementById("message").value;
    var messageContainer = document.querySelector('#message-container');
    //var file = document.querySelector("input[type='file']").files[0];
  
     // Validation du fichier
    //if (file.size > 1000000) {
    //  alert("Le fichier est trop volumineux.");
    //  return;
    //}

    // Création d'un objet FormData
    var formData = new FormData();
    formData.append("nom", nom);
    formData.append("prenom", prenom);
    formData.append("email", email);
    formData.append("sujet", sujet);
    formData.append("message", message);
    //formData.append("file", file);

  
    // Envoi du formulaire
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "php/mail.php", true);
    xhr.onload = function() {
      if (xhr.status === 200) {
        // Formulaire envoyé avec succès
        messageContainer.innerHTML = '<p>Votre message a été envoyé avec succès.</p>';
        // Effacez le formulaire après l'envoi si nécessaire
        form.reset();
      } else {
        // Erreur : Affichez un message d'erreur
        messageContainer.innerHTML = '<p>Une erreur s\'est produite lors de l\'envoi du message.</p>';
    };
    xhr.send(formData);
    return false; // Empêcher la soumission normale du formulaire
    }
  
  // Activation du bouton d'envoi
  document.getElementById("submit").addEventListener("click", envoyer);
}