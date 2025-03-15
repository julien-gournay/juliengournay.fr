<!DOCTYPE html>
<html lang="fr">
<head>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css"  rel="stylesheet" />
    <?php include 'head.php'; ?>
    <title>BTS SIO - Julien Gournay</title>
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
                        <p class="des_p">Le BTS SIO est un diplôme de niveau Bac+2 qui forme des techniciens en informatique. Il prépare à divers métiers dans le domaine des technologies de l'information, aussi bien au sein de petites entreprises que de grandes organisations.</p>
                    </div>
                </div>
            </div>
            <div class="sec2-box">
                <div class="sec2-boite">
                    <div class="sec2-boite-header">
                        <div class="box-icon">
                            <p>SLAM</p>
                        </div>
                        <div class="box-tag">
                            <p>Mon choix</p>
                        </div>
                    </div>
                    <div class="box-text">
                        <h4 class="">Solutions logicielles et applications métiers</h4>
                        <p class="">Cette spécialité est axée sur le développement d’applications. Les diplômés sont capables de concevoir, développer et déployer des logiciels répondant aux besoins spécifiques des entreprises.</p>
                    </div>
                </div>
                <div class="sec2-boite">
                    <div class="box-icon">
                        <p>SISR</p>
                    </div>
                    <div class="box-text">
                        <h4 class="">Solutions d'infrastructure, systèmes et réseaux</h4>
                        <p class="">Cette spécialité forme les futurs administrateurs systèmes et réseaux. Les diplômés sont en mesure d’installer, de configurer et de maintenir les infrastructures informatiques d’une entreprise, garantissant ainsi leur performance et leur sécurité.</p>
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
                    <figure><img src="https://nordcompo.fr/app/uploads/2020/02/accueil_bg.jpg" alt=""></figure>
                    <div>
                        <h4>Nord Compo</h4>
                        <p class="sec3-boite-date">13 mai au 29 juin 2024</p>
                    </div>
                    <p class="des_p">Lors de ma première année de BTS SIO, j'ai réalisé un stage chez Nord Compo. Pendant ces 7 semaines, ma mission était de concevoir un dashboard pour les collaborateurs, leur permettant de visualiser le statut des serveurs NAS.</p>
                    <div class="sec3-boite-bt">
                        <button onclick="location.href='files/stage/rapport_stage_nordcompo'" class="button_cv">Rapport de stage</button>
                        <button onclick="location.href='files/stage/certificat_stage_nordcompo'" class="button_cv">Certificat de stage</button>
                    </div>
                </div>
                    
                <div class="sec3-boite">
                    <figure><img src="img/experience/villeTourcoing.jpg" alt=""></figure>
                    <div>
                        <h4>Ville de Tourcoing</h4>
                        <p class="sec3-boite-date">24 février au 04 avril 2025 </p>
                    </div>
                    <p class="des_p">En février, je vais effectuer un stage de six semaines dans les locaux de la Mairie de Tourcoing. Ce stage sera une nouvelle occasion d’apprendre de nouvelles méthodes de développement et de valider mon BTS.</p>
                    <div class="sec3-boite-bt">
                        <button onclick="location.href='files/stage/convention_stage_mtourcoing'" class="button_cv">Convention de stage</button>
                        <button onclick="location.href='#'" class="button_cv" disabled>Certificat de stage (indisponible)</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="sec-4">
        <div class="sec4-frame">
            <div class="sec4-text">
                <h3>Mes certifications et<br>compétences</h3>
                <div class="sec4-text-bt">
                    <button onclick="location.href='experience.php'" class="button_cv">Voir tout les diplômes et certifications</button>
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
                <h4>"L’utilisation des assistants vocaux peut-il révolutionner notre quotidien ?"</h4>
                <div>
                    <button onclick="location.href='veille-technologique.php'" class="button_cv">Voir toute ma veille</button>
                </div>
            </div>
            <div class="sec5-box">

            </div>
        </div>
    </section>

    <section id="sec-6">
        <div class="sec6-frame">
            <div class="sec6-text">
                <h3>Centre de documentation pour les cours</h3>
                <div>
                    <button onclick="location.href='https://documentation.juliengournay.fr'" class="button_cv">Accéder à l'espace</button>
                </div>
            </div>
            <div class="sec6-img">
                <img src="img/centre_documentation.png" alt="">
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <?php include 'footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
</body>
</html>