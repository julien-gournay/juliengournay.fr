<html lang="fr">
<head>
    <?php include 'head.php'; ?>
    <title>Julien Gournay - Portfolio</title>
    <link rel="stylesheet" type="text/css" href="css/portfolio.css">

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
    <?php include 'php/config.php';?>
    <?php include 'navbar.php'; ?>

    <!-- TITRE PAGE -->
    <section id="sec-1">
        <div>
            <h1>PORTFOLIO</h1>
        </div>
        <a href="#sec-2">
            <div class="scroll-down"></div>   
        </a>          
    </section>

    <!-- SECTION 2 -->
    <section id="sec-2">
        <div class="nav-portfolio"> <!-- Menu portfolio -->
            <button data-index="0" class="active">Tout voir</button>
            <button data-index="1">Projet</button>
            <button data-index="2">Site Web</button>
            <button data-index="3">Application</button>
            <button data-index="4">Design/UI</button>
            <button data-index="5">Vidéo</button>
        </div>

        <div class="tab-content" id="all-card" style="display: block"> <!-- div grille carte -->
            <?php
                if($mabase){
                    $req = "SELECT count(titre) FROM portfolio WHERE affichage=\"oui\"";
                    $res = mysqli_query($cnt,$req);
                    while ($tab = mysqli_fetch_row($res)) {
                        $nb = $tab[0];
                    }
                }
                echo("<h2 class=\"title-section\">Tout mon portfolio ($nb)</h2>");
            ?>
            <div class="grid-card">
                <?php
                    if($mabase){
                        $req = "SELECT * FROM portfolio WHERE affichage=\"oui\"";
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
                        $technologie = $tab[10];
                        $nb++;

                        if(empty($image)){
                            $image="https://dev.juliengournay.fr/img/portfolio/none.png";
                        }

                        // Si vous souhaitez afficher un tableau contenu dans une colonne (JSON ou CSV)
                        if ($technologie) { // Supposons que $type contient un tableau JSON ou CSV
                            $tableau = []; // Initialisation

                            // Vérifiez si c'est un JSON
                            if ($decoded = json_decode($technologie, true)) {
                                $tableau = $decoded; // JSON décodé en tableau PHP
                            } else {
                                // Sinon, considérez que c'est une chaîne CSV
                                $tableau = explode(",", $technologie);
                            }

                            echo("<div class=\"card\">");
                            echo("<a href=\"$lien\"><img src=\"$image\" class=\"card-img\"></a>");
                            echo("<a href=\"$lien\">");
                            echo("<div class=\"card-body\">");
                            echo("<h2 class=\"card-title\">$titre</h2>");
                            echo("<p class=\"card-sub-title\">$soustitre</p>");
                            echo("<p class=\"card-info\">".substr($description, 0, 130)."</p>");
                            echo "<p>";
                            foreach ($tableau as $valeur) {
                                echo(htmlspecialchars($valeur).", "); // Protégez les données avec htmlspecialchars
                            }
                            echo "</p>";
                            echo("</div></a></div>");
                        }
                    }
                ?>
            </div>
        </div>

        <div class="tab-content" id="projet-card">
            <h2 class="title-section">Mes projets</h2>
            <div class="grid-card">
                <?php
                    if($mabase){
                        $req = "SELECT * FROM portfolio WHERE affichage=\"oui\" AND type=4";
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
                        echo("<p class=\"card-info\">".substr($description, 0, 130)."</p>");
                        echo("</div></a></div>");
                    }
                    if($nb ==0){
                        echo("<div><h2>Aucune données n'est disponible actuellement !</h2></div>");
                    }
                ?>
            </div>

        </div>

        <div class="tab-content" id="siteweb-card">
            <h2 class="title-section">Mes sites web</h2>
            <div class="grid-card">
                <?php
                    if($mabase){
                        $req = "SELECT * FROM portfolio WHERE affichage=\"oui\" AND type=1";
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
                        echo("<p class=\"card-info\">".substr($description, 0, 130)."</p>");
                        echo("</div></a></div>");
                    }
                    if($nb ==0){
                        echo("<div><h2>Aucune données n'est disponible actuellement !</h2></div>");
                    }
                ?>
            </div>
        </div>

        <div class="tab-content" id="application-card">
            <h2 class="title-section">Application</h2>
            <div class="grid-card">
                <?php
                    if($mabase){
                        $req = "SELECT * FROM portfolio WHERE affichage=\"oui\" AND type=5";
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
                        echo("<p class=\"card-info\">".substr($description, 0, 130)."</p>");
                        echo("</div></a></div>");
                    }
                    if($nb ==0){
                        echo("<div><h2>Aucune données n'est disponible actuellement !</h2></div>");
                    }
                ?>
            </div>
        </div>

        <div class="tab-content" id="design-card">
            <h2 class="title-section">Mes design</h2>
            <div class="grid-card">
                <?php
                    if($mabase){
                        $req = "SELECT * FROM portfolio WHERE affichage=\"oui\" AND type=2";
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
                        echo("<p class=\"card-info\">".substr($description, 0, 130)."</p>");
                        echo("</div></a></div>");
                    }
                    if($nb ==0){
                        echo("<div><h2>Aucune données n'est disponible actuellement !</h2></div>");
                    }
                ?>
            </div>
        </div>

        <div class="tab-content" id="video-card">
            <h2 class="title-section">Mes vidéos</h2>
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
                        echo("<p class=\"card-info\">".substr($description, 0, 130)."</p>");
                        echo("</div></a></div>");
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
    <script type="text/javascript" src="js/mode_sombre.js"></script>
    <script type="text/javascript" src="js/portfolio.js"></script>

</body>
</html>