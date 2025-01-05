<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include 'head.php'; ?>
    <title>Julien Gournay</title>
    <meta name="description" content="Je m'appelle Julien Gournay, j'ai 19 ans et j'habite dans la Métropole Lilloise en France. Je suis actuellement Etudiant en BTS SIO (Informatique).">
    <meta name="keywords" content="julien,gournay,sio,bts,informatique,cv,portfolio,developpeur">

    <link rel="stylesheet" type="text/css" href="css/index.css">

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
        <?php include 'php/alertes.php'; ?>
        
        <div class="wrapper">
            <div class="static-txt">Je suis étudiant</div>
            <ul class="dynamic-txts">
                <li><span>Technicien</span></li>
                <li><span>Développeur</span></li>
                <li><span>Designer</span></li>
                <li><span>Vidéaste</span></li>
            </ul>
        </div>

        <a href="#sec-2"> <!-- bouton scrool -->
            <div class="scroll-down"></div>   
        </a>
    </section>


    <!-- SECTION 2 : INFOS -->
    <section id="sec-2">
        <div class="conteneur reveal">
            <article>
                <h1 class="scroolh1">2ème année BTS SIO (Service Informatique aux Organisations)</h1>
                <p class="scroolp">Aprés un bac Technologique STI2D, une 1ère année de bts SNIR au lycée Colbert de Tourcoing, et une 1ère année de BTS SIO option SLAM au lycée Gaston Berger de Lille.</p>
                <p class="scroolp">J'etudie le dev web, les structures reseaux, l'algorithmique.</p>
            </article>
        </div>
    </section>


    <!-- SECTION 3 : Experiences -->
    <section id="sec-5">
        <div class="sec5-frame">
            <div class="sec5-text">
                <div class="sec5-text-titre">
                    <p class="cat_p lien">Expériences </p>
                    <h3>Des stages d’observations aux job d’été ...</h3>
                </div>
                <div class="sec5-text-info">
                    <div class="sec5-text-info-des">
                        <p class="des_p">Tout au long de ma scolarité, j'ai pu effectuer plusieurs stages d'observation ou professionnel, créé des mini entreprises au collège/lycée et réalisé des job d’été.</p>
                    </div>
                    <div class="sec5-text-info-bou">
                        <button onclick="location.href='./experience.php'" class="sec5-text-info-bou-plus">En savoir plus</button>
                        <button onclick="location.href='./cv.html'" class="sec5-text-info-bou-cv">Accéder au CV</button>
                    </div>
                </div>
            </div>
            <div class="sec5-box">
                <a href="article.php?url=stage-nordcompo"><div class="sec5-boite">
                    <div class="box-icon">
                        <img src="img/nordcompo_min.png" alt="">
                    </div>
                    <div class="box-text">
                        <h4 class="">Stage de BTS<br>NORD COMPO</h4>
                        <p class="">J'ai pu effectuer un stage de première année de bts au sein du service informatique chez Nord Compo.</p>
                    </div>
                </div></a>
                <a href="article.php?url=stage-dalkia"><div class="sec5-boite">
                    <div class="box-icon">
                        <img src="img/experience/dalkia_min.png" alt="">
                    </div>
                    <div class="box-text">
                        <h4 class="">Stage de BTS<br>DALKIA</h4>
                        <p class="">J'ai pu effectuer un stage de première année de bts au sein des bureaux de Dalkia au service informatique.</p>
                    </div>
                </div></a>
                <a href="article.php?url=job-dutexdor"><div class="sec5-boite">
                    <div class="box-icon">
                        <img src="img/dutexdor_min.png" alt="">
                    </div>
                    <div class="box-text">
                        <h4 class="">Job d’été DUTEXDOR</h4>
                        <p class="">Pendant les vacances d'étés entre 2022 et 2024, j’ai eu l'occasion de travailler dans un entrepôt de textile.</p>
                    </div>
                </div></a>
            </div>
        </div>
    </section>


    <!-- SECTION 4 : Entreprises experiences -->
    <section id="sec-3">
        <div class="sec3-logo">
            <div class="logo_frame">
                <div class="logo_box">
                    <img id="logosvg1" class="logosvg" src="img/logo/nordcompo.svg" alt="">
                </div>
                <div class="logo_box">
                    <img id="logosvg2" class="logosvg" src="img/logo/dalkia.svg" alt="">
                </div>
                <div class="logo_box">
                    <img id="logosvg3" class="logosvg" src="img/logo/laredoute.svg" alt="">
                </div>
                <div class="logo_box">
                    <img id="logosvg4" class="logosvg" src="img/logo/dutexdor.svg" alt="">
                </div>
            </div>
        </div>
        <div class="sec3-text">
            <a><p class="cat_p">Expériences</p></a>
            <h3>Entreprise avec qui j’ai pu collaborer </h3>
            <p class="des_p">Toute au long de ma scolarité j'ai pu travailler avec de nombreuse entreprise lors de mes multiples stages de découverte, expériences dans les minis-entreprises ou mes jobs.</p>
        </div>
    </section>


    <!-- SECTION 5 : CERCLE -->
    <section id="sec-4" class="circle">
        <div>
            <h2>Informatique / Web / Programmation / Création / Design UI / Informatique / Web / Programmation / Création / Design UI / Informatique / Web / Programmation / Création / Design UI</h2>
        </div>
        <div>
            <h2>Informatique / Web / Programmation / Création / Design UI / Informatique / Web / Programmation / Création / Design UI / Informatique / Web / Programmation / Création / Design UI</h2>
        </div>
        <img class="imgcircle" src="css/img/bg_404.png">
    </section>
    
    <!-- FOOTER -->
    <?php include 'footer.php'; ?>

    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/mode_sombre.js"></script>
</body>
</html>