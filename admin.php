<html lang="fr">
<head>
    <!-- HEAD -->
    <?php include 'head.php'; ?>
    <title>Panel Admin : Julien Gournay</title>
    <meta name="robots" content="noindex">
    <link rel="stylesheet" type="text/css" href="css/admin.css">


    <!-- Google tag Analystic (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-T6V1XWV51D"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-T6V1XWV51D');
    </script>

    <script src="https://www.gstatic.com/firebasejs/9.0.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/9.0.0/firebase-database.js"></script>
</head>
<body>
    <?php
        // CONNEXION BDD
        include 'php/config.php';

        session_start(); // Démarrer la session

        //$loggedin = $_SESSION['loggedin'];
        //$userid = $_SESSION['userid'];
        //$usernom = $_SESSION['usernom'];
        //$userprenom = $_SESSION['userprenom'];

        // Vérifier si l'administrateur est connecté
        if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
            // Rediriger vers la page de connexion si non connecté
            header('Location: ./login.php');
            exit;
        }
        else{
            $loggedin = $_SESSION['loggedin'];
            $userid = $_SESSION['userid'];
            $usernom = $_SESSION['usernom'];
            $userprenom = $_SESSION['userprenom'];
        }
    ?>

    <!-- NAVBAR -->
    <?php include 'navbar.php'; ?>

    <section id="sec-1">
        <div>
            <h1>ADMIN</h1>
            <?php echo("<h2>Bienvenue $userprenom $usernom</h2>") ?>
        </div>
        <a href="#sec-2">
            <div class="scroll-down"></div>   
        </a>
    </section>

    <section id="sec-2">
        <nav class="navAdmin">
            <div class="navAdmin-links nav-portfolio"> <!-- Menu Admin -->
                <button data-index="0" class="active">Dashboard</button>
                <button data-index="1">Alertes+</button>
                <button data-index="2">Document+</button>
                <button data-index="3">Veille+</button>
                <button data-index="4">Ressource</button>
                <button data-index="5">Stat</button>
            </div>
            <div class="navAdmin-deco">
                <form action="php/deconnexion.php" method="post">
                    <button type="submit" class="btn-deconnexion">Déconnexion</button>
                </form>
            </div>
        </nav>

        <div class="tab-content" id="dashboard" style="display: block"> <!-- div grille carte -->
            <h3>Dashboard</h3>
        </div>

        <div class="tab-content" id="document">
            <h3>Alertes +</h3>

            <form action="" method="post" enctype="multipart/form-data">
                <label for="message">Message:</label>
                <textarea id="description" name="message"></textarea><br>

                <label for="format">Type d'alerte:</label>
                <select name="format" id="format">
                    <option value="Information">Information</option>
                    <option value="XLSX">XLSX</option>
                    <option value="DOCS">DOCS</option>
                    <option value="TXT">TXT</option>
                    <option value="PPT">PPT</option>
                    <option value="ZIP">ZIP</option>
                    </select><br>

                <label for="type">Affichage:</label>
                <input type="checkbox" id="type" name="1" required><br>

                <label for="fichier">Date de début:</label>
                <input type="date" name="fichier" id="fichier" required><br>

                <label for="fichier">Date de fin:</label>
                <input type="date" name="fichier" id="fichier" required><br>

                <input type="submit" value="Envoyer">
            </form>
        </div>

        <div class="tab-content" id="document">
            <h3>Document +</h3>

            <form action="php/upload.php" method="post" enctype="multipart/form-data">
                <label for="titre">Titre:</label>
                <input type="text" id="titre" name="titre" required><br>
                <label for="description">Description:</label>
                <textarea id="description" name="description"></textarea><br>
                <label for="type">Type de document:</label>
                <input type="text" id="type" name="type" required><br>
                <label for="format">Format:</label>
                <select name="format" id="format">
                    <option value="PDF">PDF</option>
                    <option value="XLSX">XLSX</option>
                    <option value="DOCS">DOCS</option>
                    <option value="TXT">TXT</option>
                    <option value="PPT">PPT</option>
                    <option value="ZIP">ZIP</option>
                    </select><br>
                <label for="fichier">Fichier:</label>
                <input type="file" name="fichier" id="fichier" required><br>
                <input type="submit" value="Envoyer">
            </form>
        </div>

        <div class="tab-content" id="veille">
            <h3>Veille +</h3>
            <form action="" method="POST">
                <div>
                    <label for="">Titre :</label>
                    <input type="text" name="titre" id="">
                </div>
                <div>
                    <label for="">Descirption :</label>
                    <input type="text" name="description" id="">
                </div>
                <div>
                    <label for="">Lien :</label>
                    <input type="url" name="lien" id="">
                </div>
                <div>
                    <label for="">Source :</label>
                    <input type="text" name="source" id="">
                </div>
                <div>
                    <label for="">Date :</label>
                    <input type="datetime-local" name="date" id="">
                </div>
                <div>
                    <label for="">Image :</label>
                    <input type="file" name="image" id="">
                </div>
                <div>
                    <button type="submit">Ajouter</button>
                    <button type="reset">Annuler</button>
                </div>
            </form>
        </div>

        <div class="tab-content" id="ressource">
            <h3>Ressource</h3>

            <div>
                <a href="https://manager.pulseheberg.com/login?language=french">pulseheberg</a>
            </div>
            <div>
                <a href="https://frweb10.pulseheberg.net:8443/login_up.php?success_redirect_url=%2Fsmb%2Fweb%2Fview">Plesk</a>
            </div>
            <div>
                <a href="">phpmyadmin</a>
            </div>
            <div>
                <a href="https://webmail.juliengournay.fr/">webmail</a>
            </div>
            <div>
                <a href="https://analytics.google.com/analytics/web/#p352081166/reports/home">Google Analystic</a>
            </div>
            <div>
                <a href="https://search.google.com/search-console?hl=fr&resource_id=sc-domain:juliengournay.fr">Search console</a>
            </div>
        </div>

        <div class="tab-content" id="stat">
            <h3>Statistique</h3>

            <iframe width="100%" height="700" src="https://lookerstudio.google.com/embed/reporting/7def5089-0ef8-4646-847c-1156e42ca2c1/page/kIV1C" frameborder="0" style="border:0" allowfullscreen sandbox="allow-storage-access-by-user-activation allow-scripts allow-same-origin allow-popups allow-popups-to-escape-sandbox"></iframe>
        </div>
    </section>

    <!-- FOOTER -->
    <?php include 'footer.php'; ?>
    
    <script type="text/javascript" src="js/portfolio.js"></script>
    <script type="text/javascript" src="js/mode_sombre.js"></script>
</body>
</html>