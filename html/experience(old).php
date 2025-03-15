<html lang="fr">
<head>
    <?php include 'head.php'; ?>

    <title>Julien Gournay - Expérience</title>
    <link rel="stylesheet" type="text/css" href="css/experience.css">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-T6V1XWV51D"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-T6V1XWV51D');
    </script>
</head>

<body>
    <?php
        // CONNEXION BDD
        include 'php/config.php';
    ?>

    <!-- NAVBAR -->
    <?php include 'navbar.php'; ?>

    <!-- TITRE PAGE -->
    <section id="sec-1">
        <div>
            <h1>EXPERIENCE</h1>
        </div>
        <a href="#sec-2">
            <div class="scroll-down"></div>   
        </a>          
    </section>

    <!-- SECTION 2 -->
    <section id="sec-2">
        <div class="nav-portfolio"> <!-- Menu portfolio -->
            <button data-index="0" class="active">Expériences</button>
			<button data-index="1">Compétences</button>
			<button data-index="2">Certifications</button>
        </div>

        <div class="tab-content" id="all-card" style="display: block"> <!-- div grille carte -->
            <h2 class="title-section">Toutes mes expériences</h2>
            <div class="grid-card">
                <?php
                    if($mabase){
                        $req = "SELECT * FROM experience WHERE affichage=\"oui\" ORDER BY dateDebut DESC";
                        $res = mysqli_query($cnt,$req);
                    }

                    while ($tab = mysqli_fetch_row($res)) {
                        $id = $tab[0];
                        $type = $tab[1];
                        $titre = $tab[2];
                        $description = $tab[3];
                        $entreprise = $tab[4];
                        $lieu = $tab[5];
                        $dateDebut = $tab[6];
                        $dateFin = $tab[7];
                        $lien = $tab[8];
                        $image = $tab[9];
                        $logo = $tab[10];

                        $dateDebutObjet = new DateTime($dateDebut);
                        $formatter = new IntlDateFormatter('fr_FR', IntlDateFormatter::FULL, IntlDateFormatter::NONE, null, null, 'MMMM yyyy');
                        $dateDebutFormatee = $formatter->format($dateDebutObjet);
                        
                        echo("<div class=\"card\">
                            <a href=\"$lien\"><div class=\"card-information ");switch($type) {case 1 :echo("c-act"); break;case 2 :echo("c-sta"); break;case 3 :echo("c-job"); break;case 4 :echo("c-ent"); break;case 5 :echo("c-sal"); break;case 6 :echo("c-mis"); break;}echo("\">
                                <div class=\"card-info-sup\">
                                    <p>");
                                        switch($type) {
                                            case 1 :echo("Activité"); break;
                                            case 2 :echo("Stage"); break;
                                            case 3 :echo("Job"); break;
                                            case 4 :echo("Entreprenariat"); break;
                                            case 5 :echo("Salon"); break;
                                            case 6 :echo("Mission"); break;
                                        }
                                    echo("</p>
                                    <p>$dateDebutFormatee</p>
                                </div>
                                <div class=\"card-info-titre\">
                                    <p>$titre</p>
                                </div>
                            </div></a>
                            <a href=\"#popup1\"><div class=\"card-description ");switch($type) {case 1 :echo("c-act"); break;case 2 :echo("c-sta"); break;case 3 :echo("c-job"); break;case 4 :echo("c-ent"); break;case 5 :echo("c-sal"); break;case 6 :echo("c-mis"); break;}echo("\">
                                <div class=\"card-description-img\">");
                                    if(isset($image)){echo("<img src=\"$image\">");}
                                echo("</div>
                                <div class=\"card-description-texte\">
                                    <p>$description</p>
                                </div>
                            </div></a>
                            <div class=\"card-entreprise\">
                                <div class=\"card-entreprise-logo\">");
                                    if(isset($logo)){echo("<img src=\"$logo\">");}
                                echo("</div>
                                <div class=\"card-entreprise-sup\">
                                    <p>$entreprise</p>
                                    <p>$lieu</p>
                                </div>
                            </div>
                        </div>");
                    }
                ?>
            </div>
        </div>

        <div class="tab-content" id="video-card">
            <h2 class="title-section">Mes compétences</h2>
            <div class="grid-card">
                <?php
                    if($mabase){
                        $req = "SELECT * FROM portfolio WHERE affichage=\"oui\" AND type=3";
                        $res = mysqli_query($cnt,$req);
                        $nb=0;
                    }

                    while ($tab = mysqli_fetch_row($res)) {
                        $id = $tab[0];
                        $titre = $tab[1];
                        $soustitre = $tab[2];
                        $description = $tab[3];
                        $annee = $tab[4];
                        $type = $tab[5];
                        $image = $tab[6];
                        $lien = $tab[7];
                        $affichage = $tab[8];
                        $nb++;

                        if(empty($image)){
                            $image="https://dev.juliengournay.fr/img/portfolio/none.png";
                        }

                        echo("<div class=\"card\">");
                        echo("<a href=\"\"><img src=\"$image\" class=\"card-img\"></a>");
                        echo("<a href=\"\">");
                        echo("<div class=\"card-body\">");
                        echo("<h2 class=\"card-title\">$titre</h2>");
                        echo("<p class=\"card-sub-title\">$soustitre</p>");
                        echo("<p class=\"card-info\">$description</p>");
                        echo("</div></a></div>");
                    }
                    if($nb ==0){
                        echo("<div><h2>Aucune données n'est disponible actuellement !</h2></div>");
                    }
                ?>
            </div>
        </div>

        <div class="tab-content" id="video-card">
            <h2 class="title-section">Mes certifications et diplômes</h2>
            <div class="grid-card">
                <?php
                    if($mabase){
                        $req = "SELECT * FROM portfolio WHERE affichage=\"oui\" AND type=3";
                        $res = mysqli_query($cnt,$req);
                        $nb=0;
                    }

                    while ($tab = mysqli_fetch_row($res)) {
                        $id = $tab[0];
                        $titre = $tab[1];
                        $soustitre = $tab[2];
                        $description = $tab[3];
                        $annee = $tab[4];
                        $type = $tab[5];
                        $image = $tab[6];
                        $lien = $tab[7];
                        $affichage = $tab[8];
                        $nb++;

                        if(empty($image)){
                            $image="https://dev.juliengournay.fr/img/portfolio/none.png";
                        }
                    }
                    if($nb ==0){
                        echo("<div><h2>Aucune données n'est disponible actuellement !</h2></div>");
                    }
                ?>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <?php include 'footer.php'; ?>

    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/portfolio.js"></script>
</body>
</html>