<html lang="fr">
<head>
    <!-- HEAD -->
    <?php include 'head.php'; ?>
    <title>Veille technologique - Julien Gournay</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css"  rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/veille-techno.css">

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
        include 'navbar.php'; // NAVBAR        
        include 'php/config.php'; // CONNEXION BDD

        if($mabase){
            $res = mysqli_query($cnt, "SELECT * FROM veille");        }
    ?>

    <section id="sec-1">
        <div>
            <h1>VEILLE TECHNO</h1>
        </div>
        <a href="#sec-2">
            <div class="scroll-down"></div>   
        </a>
    </section>

    <section id="sec-2">
        <img class="cover" src="img/sssquiggly.svg" alt="">
        <div class="sujet">
            <div class="card-info">
                <div class="card-info-ctn">
                    <h2>L’utilisation des assistants vocaux peut-il révolutionner notre quotidien ?</h2>
                    <div class="infinite-scroll-container">
                        <div class="scrolling-text">
                            <span> Contexte <span style="color: var(--orange);">Veille Technologique</span> Contexte <span style="color: var(--orange);">Veille Technologique</span> Contexte <span style="color: var(--orange);">Veille Technologique</span> Contexte <span style="color: var(--orange);">Veille Technologique </span></span>
                            <span> Contexte <span style="color: var(--orange);">Veille Technologique</span> Contexte <span style="color: var(--orange);">Veille Technologique</span> Contexte <span style="color: var(--orange);">Veille Technologique</span> Contexte <span style="color: var(--orange);">Veille Technologique </span></span>
                        </div>
                    </div>
                    <p>Les assistants vocaux (comme Siri, Alexa, Google Assistant) font partie intégrante de notre quotidien. Ils sont utilisés dans divers domaines : domotique, santé, éducation, divertissement, etc. Le sujet de cette veille est de déterminer dans quelle mesure ces technologies peuvent véritablement révolutionner notre manière de vivre.</p>
                </div>

                <div class="card-info-ctn">
                    <div class="infinite-scroll-container">
                        <div class="scrolling-text">
                            <span> Qu'est ce qu'un assistant vocal ? <span style="color: var(--orange);">Qu'est ce qu'un assistant vocal ?</span> Qu'est ce qu'un assistant vocal ? <span style="color: var(--orange);">Qu'est ce qu'un assistant vocal ? </span></span>
                            <span> Qu'est ce qu'un assistant vocal ? <span style="color: var(--orange);">Qu'est ce qu'un assistant vocal ?</span> Qu'est ce qu'un assistant vocal ? <span style="color: var(--orange);">Qu'est ce qu'un assistant vocal ? </span></span>
                        </div>
                    </div>
                    <p>Un assistant vocal est un logiciel capable de comprendre et de répondre à des commandes vocales données par un utilisateur. En s'appuyant sur des technologies telles que la reconnaissance vocale, le traitement du langage naturel (NLP, Natural Language Processing) et l'intelligence artificielle (IA), il permet d'interagir avec des appareils numériques de manière intuitive et sans nécessiter d’interface physique.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="sec-4">
    <?php
        $nb = 0;
        echo("<div class=\"list_card\">");
        While ($tab=mysqli_fetch_row($res)){
            $nb += 1;
            $titre = $tab[1];
            $image = $tab[2];
            $description = $tab[3];
            $lien = $tab[4];
            $source = $tab[5];
            $date = $tab[6];
            echo("<div class=\"card max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700\">
                <a href=\"#\">
                    <img class=\"rounded-t-lg\" src=\"$image\" alt=\"\" />
                </a>
                <div class=\"p-5\">
                    <p class=\"card-date\">$source | $date</p>
                    <a href=\"#\">
                        <h5 class=\"mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white\">$titre</h5>
                    </a>
                    <p class=\"mb-3 font-normal text-gray-700 dark:text-gray-400\">$description</p>
                    <a href=\"$lien\" class=\"inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800\">
                        Lire l'article
                        <svg class=\"rtl:rotate-180 w-3.5 h-3.5 ms-2\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 14 10\">
                            <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M1 5h12m0 0L9 1m4 4L9 9\"/>
                        </svg>
                    </a>
                </div>
            </div>");
        }
        echo("</div>");
        echo("Nombre d'article sur la veille : $nb");
    ?>
    </section>

    <!-- FOOTER -->
    <?php include 'footer.php'; ?>

    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/mode_sombre.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
</body>
</html>