<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include 'head.php'; ?>
    <title>Download - Julien Gournay</title>

    <link rel="stylesheet" type="text/css" href="css/btssio.css">

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
    <!-- NAVBAR -->
    <?php include 'navbar.php'; ?>

    <section id="sec-1">
        <div>
            <h1>BTS SIO</h1>
        </div>
        <a href="#sec-2">
            <div class="scroll-down"></div>   
        </a>
    </section>

    <section id="sec-2">
        <div class="sec2-frame">
            <div class="sec2-text">
                <div class="sec2-text-titre">
                    <p class="cat_p lien">Ma formation</p>
                    <h3>BTS Service aux Organisation</h3>
                </div>
                <div class="sec2-text-info">
                    <div class="sec2-text-info-des">
                        <p class="des_p">Le BTS SIO est un diplôme de niveau Bac+2 qui forme les futurs techniciens en informatique. Il prépare à exercer des métiers variés dans le domaine des technologies de l'information, que ce soit dans les petites entreprises ou les grandes organisations.</p>
                    </div>
                </div>
            </div>
            <div class="sec2-box">
                <div class="sec2-boite">
                    <div class="box-icon">
                        <p>SLAM</p>
                    </div>
                    <div class="box-text">
                        <h4 class="">Solutions logicielles et applications métiers</h4>
                        <p class="">Cette spécialité est plus orientée vers le développement d'applications. Les diplômés sont capables de concevoir, de développer et de mettre en œuvre des logiciels adaptés aux besoins spécifiques d'une entreprise.</p>
                    </div>
                </div>
                <div class="sec2-boite">
                    <div class="box-icon">
                        <p>SISR</p>
                    </div>
                    <div class="box-text">
                        <h4 class="">Solutions d'infrastructure, systèmes et réseaux</h4>
                        <p class="">Cette spécialité forme les futurs administrateurs systèmes et réseaux. Les diplômés sont capables d'installer, de configurer et de maintenir les infrastructures informatiques d'une entreprise.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="sec-3">
        <div class="sec3-frame">
            <div class="sec3-text">
                <div class="sec3-text-titre">
                    <p class="cat_p lien">Experiences</p>
                    <h3>Mes stages</h3>
                    <p class="des_p">Lors de mes deux années de BTS, j’ai du réaliser 2 stages professionnel d’une durée totale de minimum 10 semaines. </p>
                </div>
            </div>
            <div class="sec3-box">
                <div class="sec3-boite">
                    <figure><img src="https://juliengournay.fr/img/experience/nordcompo.jpg" alt=""></figure>
                    <div>
                        <h4>Nord Compo</h4>
                        <p class="sec3-boite-date">13 mai au 29 juin 2024</p>
                    </div>
                    <p class="des_p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nulla tellus, semper dictum tortor a, tempus iaculis mi. Vestibulum pretium in mi sed sollicitudin. Aenean et rutrum ligula.</p>
                    <div>
                        <button onclick="location.href='files/stage/rapport_stage_nordcompo'" class="button_cv">Rapport de stage</button>
                        <button onclick="location.href='files/stage/certificat_stage_nordcompo'" class="button_cv">Certificat de stage</button>
                    </div>
                </div>
                    
                <div class="sec3-boite">
                    <figure><img src="https://juliengournay.fr/img/recherche_stage_2025.png" alt=""></figure>
                    <div>
                        <h4>Prochainement</h4>
                        <p class="sec3-boite-date">24 février au 04 avril 2025 </p>
                    </div>
                    <p class="des_p">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nulla tellus, semper dictum tortor a, tempus iaculis mi. Vestibulum pretium in mi sed sollicitudin. Aenean et rutrum ligula.</p>
                    <div>
                        <button onclick="location.href='stage-2025.html'" class="button_cv">Ma candidature</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="sec-4">
        <div class="sec4-frame">
            <div class="sec4-text">
                <h3>Mes certifications et<br>compétences</h3>
                <div>
                    <button onclick="location.href=''" class="button_cv">Voir tout les diplômes et certifications</button>
                    <button onclick="location.href='files/tableau_synthese_slam.xlsx'" class="button_cv">Télécharger mon tableau des compétences</button>
                </div>
            </div>
            <div class="sec4-box">

            </div>
        </div>
    </section>

    <section id="sec-5">
        <div class="sec5-frame">
            <div class="sec5-text">
                <h3>Ma veille Technologique</h3>
                <h4>"L'accésibilité de L'IA au grand public"</h4>
                <div>
                    <button onclick="location.href='veille-technologique.php'" class="button_cv">Voir toute ma veille</button>
                </div>
            </div>
            <div class="sec5-box">

            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <?php include 'footer.php'; ?>
</body>
</html>