<html lang="fr">
<head>
    <!-- HEAD -->
    <?php include 'head.php'; ?>

    <title>Julien Gournay</title>
    <meta name="author" content="Julien Gournay">
    <meta name="description" content="">
    <meta name="keywords" content="julien,gournay,sio,bts,informatique,cv,portfolio,developpeur">

    <link rel="stylesheet" type="text/css" href="css/login.css">

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
        <div class="sec1-login">
            <h1>Portail de connexion</h1>
            <p>La page que vous tentez d’accédé est protégé.<br>Veuillez vous connecter.</p>
            <form action="login.php" method="post">
                <label for="username" style="display: block;">Nom d'utilisateur</label>
                <input class="saisi" type="text" name="username" id="username">
                <br>
                <label for="password" style="display: block;">Mot de passe</label>
                <input class="saisi" type="password" name="password" id="password">
                <br>
                <input class="bouton" type="submit" value="Se connecter">
              </form>

              <?php
                // CONNEXION BDD
                include 'php/config.php';
                session_start();

                // Définir le nom d'utilisateur et le mot de passe de l'administrateur
                //$admin_username = "admin"; // Remplacez par le nom d'utilisateur de l'administrateur
                //$admin_password = "password"; // Remplacez par le mot de passe de l'administrateur

                // Vérifiez si le formulaire a été soumis
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $username = $_POST['username'];
                    $password = $_POST['password'];

                    if($mabase){
                        $req = "SELECT * FROM `user` WHERE `rôle`='admin' AND `identifiant`='$username'";
                        $res = mysqli_query($cnt,$req);
                        if (mysqli_num_rows($res) > 0) {
                            $tab = mysqli_fetch_row($res);
                            $admin_nom = $tab[1];
                            $admin_prenom = $tab[2];
                            $admin_username = $tab[4];
                            $admin_password = $tab[5];
                        } else {
                            $admin_username = 'none';
                        }
                    }
                    

                    // Vérifiez les informations d'identification
                    if ($username === $admin_username && $password === $admin_password) {
                        // Si les informations d'identification sont correctes, définissez une session
                        $_SESSION['loggedin'] = true;
                        $_SESSION['userid'] = $username;
                        $_SESSION['usernom'] = $admin_nom;
                        $_SESSION['userprenom'] = $admin_prenom;

                        // Redirigez vers la page admin
                        header("Location: admin.php");
                        exit();
                    } else {
                        // Si les informations d'identification sont incorrectes, affichez un message d'erreur
                        $error_message = "Nom d'utilisateur ou mot de passe incorrect.";
                    }
                }

                if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
                    // Si l'administrateur n'est pas connecté, affiche le formulaire
                    if (isset($error_message)) {
                        echo "<br><p>$error_message</p>";
                    }
                } else {
                    // Si l'administrateur est déjà connecté, affiche un message
                    echo "<p>Vous êtes déjà connecté en tant qu'administrateur.<br><a href='admin.php'>Accéder à votre espace</a></p>";
                    echo "<form action=\"php/deconnexion.php\" method=\"post\"><button type=\"submit\" class=\"btn-deconnexion bouton\">Se déconnecter</button></form>";
                }
                ?>
        </div>
    </section>

    <!-- FOOTER -->
    <?php include 'footer.php'; ?>

    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/mode_sombre.js"></script>
</body>
</html>