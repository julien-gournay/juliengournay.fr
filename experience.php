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
			<button data-index="1">Certifications</button>
			<button data-index="2">Compétences</button>
        </div>

        <div class="tab-content" id="all-card" style="display: block"> <!-- div grille carte -->
            <h2 class="title-section">Toutes mes expériences</h2>
            <div class="grid-all">
            <?php
                if($mabase){
                    $req = "SELECT DISTINCT type_experience.idTypeExp,type_experience.libelle FROM experience,type_experience WHERE experience.type=type_experience.idTypeExp ORDER BY idTypeExp;";
                    $res = mysqli_query($cnt,$req);
                }

                while($tab = mysqli_fetch_row($res)) {
                    $idType = $tab[0];
                    $libelleType = $tab[1];
                 
                    $req2 = "SELECT * FROM experience,type_contrat WHERE affichage=\"oui\" AND type=$idType AND experience.typeContrat=type_contrat.idContrat ORDER BY dateDebut DESC;";
                    $res2 = mysqli_query($cnt,$req2);

                    echo("
                    <div class=\"grid-type\">
                        <h3>$libelleType</h3>
                        <div class=\"grid-card\">");

                    while($tab = mysqli_fetch_row($res2)) {
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
                        $idcontrat = $tab[16];
                        $contrat = $tab[18];

                        $dateDebutObjet = new DateTime($dateDebut);
                        $formatter = new IntlDateFormatter('fr_FR', IntlDateFormatter::FULL, IntlDateFormatter::NONE, null, null, 'MMMM yyyy');
                        $dateDebutFormatee = $formatter->format($dateDebutObjet);
                        
                        echo("
                        <div class=\"card\">
                            <a href=\"$lien\"><div class=\"card-information ");switch($type) {case 1 :echo("c-act"); break;case 2 :echo("c-sta"); break;case 3 :echo("c-job"); break;case 4 :echo("c-ent"); break;case 5 :echo("c-sal"); break;case 6 :echo("c-mis"); break;}echo("\">
                                <div class=\"card-info-sup\">");

                                    echo("<p>$contrat</p>
                                    <p class=\"card-info-sup-date\">$dateDebutFormatee</p>
                                </div>
                                <div class=\"card-info-titre\">
                                    <p>$titre</p>
                                </div>
                            </div></a>
                            <a href=\"$lien\"><div class=\"card-description ");switch($type) {case 1 :echo("c-act"); break;case 2 :echo("c-sta"); break;case 3 :echo("c-job"); break;case 4 :echo("c-ent"); break;case 5 :echo("c-sal"); break;case 6 :echo("c-mis"); break;}echo("\">");
                                if(isset($image)){echo("<div class=\"card-description-img\">
                                    <img src=\"$image\">
                                </div>");}
                                echo("<div class=\"card-description-texte\">
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
                    echo("</div></div>");
                }
                ?>
            </div>
        </div>

        <div class="tab-content" id="certif-card">
            <h2 class="title-section">Mes certifications et diplômes</h2>
            <div class="certif-sec">
                <div class="grid-cardCertif">
                    <?php
                        if($mabase){
                            $req = "SELECT * FROM certification";
                            $res = mysqli_query($cnt,$req);
                            $nb=0;
                        }

                        while ($tab = mysqli_fetch_row($res)) {
                            $idCertif = $tab[0];
                            $nomCertif = $tab[1];
                            $organisme = $tab[2];
                            $dateEmission = $tab[3];
                            $idDiplome = $tab[4];
                            $urlDiplome = $tab[5];
                            $idDocument = $tab[6];
                            $imgOrg = $tab[7];
                            //$imgDip = $tab[8];
                            $nb++;

                            $formatter = new IntlDateFormatter('fr_FR', IntlDateFormatter::NONE, IntlDateFormatter::NONE, NULL, NULL, 'MMMM yyyy');
                            $date = new DateTime($dateEmission);

                            echo("<a  class=\"acardCertif\" href=\"$urlDiplome\"><div class=\"cardCertif\">
                                    <div class=\"cardCertif-ct\">
                                        <div class=\"cardCertif-txt\">
                                            <h2 class=\"card-title\">$nomCertif</h2>
                                            <p class=\"card-info\">Organisme : $organisme</p>
                                            <p class=\"card-info\">Délivré en ".$formatter->format($date)."</p>");
                                            if($idDiplome > 0){echo("<p class=\"card-info\">Id du diplôme : $idDiplome</p>");}
                                        echo("</div>
                                    </div>
                                    <div class=\"cardCertif-cover\">
                                        <img src=\"$imgOrg\" alt=\"\">
                                    </div>
                                </div></a>");
                        }
                        if($nb ==0){
                            echo("<div><h2>Aucune données n'est disponible actuellement !</h2></div>");
                        }
                    ?>
                </div>

                <h2 class="title-section">Mon parcours de certification</h2>
                <div class="certifC-cadre">

                    <h4 class="">Epreuve BTS SIO EF3</h4>
                    <div class="certifC-cadre-figma">
                        <iframe class="certifC-cadre-figma-iframe" style="border: 1px solid rgba(0, 0, 0, 0.1);"  height="450" src="https://embed.figma.com/deck/WGptB7BA3BIiCePmhwZrYl/Certification-Figma?node-id=5-325&viewport=-1259%2C-98%2C0.53&scaling=min-zoom&content-scaling=fixed&page-id=0%3A1&embed-host=share" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-content" id="competence-card">
            <div class="header-cardCompetence">
                <h2 class="title-section">Mes compétences</h2>
                <button onclick="location.href='files/tableau_synthese_slam.xlsx'" class="button_cv">Télécharger mon tableau des compétences</button>
            </div>
            <div class="grid-cardCompetence">
                <?php
                    if($mabase){
                        $res4 = mysqli_query($cnt,"SELECT * FROM type_competence");
                        $nb=0;
                    }

                    while ($tab = mysqli_fetch_row($res4)) {
                        $idTC = $tab[0];
                        $nomTC = $tab[1];
                        $sousTitreTC = $tab[2];
                        $descriptionTC = $tab[3];
                        $nb++;

                        echo("<br><h3>$nomTC - $sousTitreTC</h3>
                            <p>$descriptionTC</p>");
                        if($mabase){
                            $res5 = mysqli_query($cnt,"SELECT * FROM competence, lien_competence WHERE lien_competence.idCatComp = $idTC AND lien_competence.idComp=competence.idComp;");
                            $nb=0;
                        }
                        while ($tab = mysqli_fetch_row($res5)) {
                            $idComp = $tab[0];
                            $nomComp = $tab[1];
                            $catComp = $tab[2];
                            $dateDebutComp = new DateTime($tab[3]);
                            $dateFinComp = !empty($tab[4]) ? new DateTime($tab[4]) : null;
                            $etatComp = $tab[5];
                            $projetComp = $tab[6];
                            $urlComp = $tab[7];

                            // Formatter français
                            $formatterFull = new IntlDateFormatter('fr_FR', IntlDateFormatter::LONG, IntlDateFormatter::NONE);
                            $formatterFull->setPattern('MMMM yyyy');

                            $formatterMonth = new IntlDateFormatter('fr_FR', IntlDateFormatter::LONG, IntlDateFormatter::NONE);
                            $formatterMonth->setPattern('MMMM');

                            if ($dateDebutComp !== null && $dateFinComp !== null) {
                                if ($dateDebutComp->format('Y-m') === $dateFinComp->format('Y-m')) {
                                    $date = $formatterFull->format($dateDebutComp);
                                } elseif ($dateDebutComp->format('Y') === $dateFinComp->format('Y')) {
                                    $dateDebutStr = $formatterMonth->format($dateDebutComp);
                                    $dateFinStr = $formatterMonth->format($dateFinComp);
                                    $annee = $dateDebutComp->format('Y');
                                    $date = "$dateDebutStr - $dateFinStr $annee";
                                } else {
                                    $dateDebutStr = $formatterFull->format($dateDebutComp);
                                    $dateFinStr = $formatterFull->format($dateFinComp);
                                    $date = "$dateDebutStr - $dateFinStr";
                                }
                            } else {
                                $date = "Date inconnue";
                            }



                            if($urlComp){
                                echo("<a href='$urlComp' target='_blank'>👉 $nomComp [$date]</a>");
                            }
                            else{
                                echo("<a href='projet.php?url=$projetComp' target='_blank'>👉 $nomComp [$date]</a>");
                            }
                        }
                    }
                    if(empty($idTC)){
                        echo("<div><h2>Aucune compétence n'est disponible actuellement !</h2></div>");
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