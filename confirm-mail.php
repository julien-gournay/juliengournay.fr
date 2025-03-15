<html lang="fr">
<head>
    <!-- HEAD -->
    <?php include 'head.php'; ?>

    <title>Julien Gournay</title>
    <meta name="author" content="Julien Gournay">
    <meta name="description" content="Vous souhaitez me contacter pour diverses sujets, venez me parler.">
    <meta name="keywords" content="julien,gournay,sio,bts,informatique,cv,portfolio,developpeur">
    <meta name="robots" content="noindex">

    <link rel="stylesheet" type="text/css" href="css/confirm-mail.css">

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
            <div>
                <h1>Merci de m’avoir contacté</h1>
                <p class="p1">Votre message à bien été envoyé.<br>Je vous répondrez dans les plus bref délais.</p>
            </div>
            <div class="bouton">
                <button onclick="location.href='.'" class="sec1-bou1">Revenir à l’accueil</button>
                <button onclick="location.href='./contact.html'" class="sec1-bou2">Renvoyer un message</button>
            </div>
        </div>
        
    </section>


    <!-- FOOTER -->
    <?php include 'footer.php'; ?>

    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/mode_sombre.js"></script> 
</body>
</html>