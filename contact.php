<html lang="fr">
<head>
    <?php include 'head.php'; ?>

    <title>Julien Gournay</title>
    <meta name="description" content="Vous souhaitez me contacter pour diverses sujets, venez me parler.">
    <meta name="keywords" content="julien,gournay,sio,bts,informatique,cv,portfolio,developpeur">

    <link rel="stylesheet" type="text/css" href="css/contact.css">

    <!-- Google tag Analystic (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-T6V1XWV51D"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-T6V1XWV51D');
    </script>
</head>

<body>
    <!-- NAVBAR -->
    <?php include 'navbar.php'; ?>

    <!-- SECTION 1 : EN TETE -->
    <section id="sec-1">
        <div>
            <h1>CONTACT</h1>
            <!--<p class="p1">Vous souhaitez me poser une question, me faire une demande, avoir des renseignements, me recruter... Contacter moi !</p>-->
        </div>
        <a href="#sec-2">
            <div class="scroll-down"></div>   
        </a>          
    </section>

    <section id="sec-2">
        <div class="formulaire">
            <h1>Formulaire d'envoi de mail</h1>

            <!--<li class="chipli">
                <span class="chip chip--error">
                  <em class="chip__icon-wrapper">
                    <svg class="cd-icon" viewBox="0 0 12 12" aria-hidden="true"><line x1="6" y1="1.75" x2="6" y2="7" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"/><circle cx="6" cy="10" r="1" fill="currentColor"/></svg>
                  </em>
                  <i class="chip__label">Suite à un problème technique, le formulaire ne fonctionne pas, veillez réessayer plus tard.<br>Une mise à jour de correctif est prévue prochainement.</i>
                </span>
            </li>-->

            <form action="php/mail.php" method="post" enctype="multipart/form-data">
                <div class="champ">
                    <label for="nom">Nom : *</label>
                    <input type="text" name="nom" id="nom" required>
                </div>
                <div class="champ">
                    <label for="prenom">Prénom : *</label>
                    <input type="text" name="prenom" id="prenom" required>
                </div>
                <div class="champ">
                    <label for="email">Adresse email : *</label>
                    <input type="email" name="email" id="email" required>
                </div>
                <div class="champ">
                    <label for="sujet">Sujet : *</label>
                    <select name="sujet" id="sujet">
                        <option value="">--Choisir un objet--</option>
                        <option value="Demande d'informations">Demande d'informations</option>
                        <option value="Proposition de stage">Proposition de stage</option>
                        <option value="Discuter ensemble">Discuter ensemble</option>
                        <option value="Me recruter">Me recruter</option>
                        <option value="Signaler un bug">Signaler un bug</option>
                        <option value="Autre demande">Autre demande</option>
                    </select>
                </div>
                <div class="champ">
                    <label for="message">Message : *</label>
                    <textarea name="message" id="message" required></textarea>
                </div>
                <div class="champ">
                    <label for="message">Pièce jointe :</label>
                    <input type="file" name="file" id="file">
                </div>

                <!--<input type="text" name="honeypot" style="display:none;">
                <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                <div class="g-recaptcha" data-sitekey="6Leq1soqAAAAAOjU7LMo09GSDwTJQm6qksoBAyT-"></div>-->

                <button type="submit">Envoyer</button>
            </form>
            <div class="message-container" id="message-container"></div>
          </div>
    </section>
    
    <!-- FOOTER -->
    <?php include 'footer.php'; ?>

    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/mode_sombre.js"></script>
    <!--<script type="text/javascript" src="js/contact.js"></script>-->
</body>
</html>