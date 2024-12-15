<html lang="fr">
<head>
    <!-- HEAD -->
    <?php include 'head.php'; ?>
    <title>Julien Gournay</title>
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
        <div class="sujet">
            <img class="cover" src="img/ia.jpg" alt="">
            <div class="card-info">
                <h2>L'accésibilité de L'IA au grand public</h2>
                <p>Depuis maintenant plusieurs années des intélligences artificielle voit le jour mais depuis 2023, le developpement c'est accéléré avec l'appartition de l'open source "ChatGPT".<br><br>L'apparition de nombreuse IA font suite, mais souvent accésible qu'en Bêta, à certaine personne ou même payant. Mais avec la démocratisation de cette outil et du lancement des IA par les mastodons du secteur, les chatbots et assitants intéligent deviennt de plus en plus accésible au grand public.<br><br>En 2024, l'IA est partout, dans nos téléphones, réseaux sociaux, messages, dans les entreprises, dans le domaine de la santé ...</p>
            </div>
        </div>
    </section>

    <section id="sec-3">
        <div id="sec3-div1">
            <h2>Qu'est ce que l'Intelligence Artificielle ?</h2>
            <p>L'intélligence artificielle (IA) ou en anglais Artificial Intelligence est un outil utilisé par une machine afin de reproduire des comportements liés aux humains, tels que le raisonnement, la planification et la créativité.<br>L'IA fonctionne grâce à du Machine Learning, une technologie qui vise à apprendre aux IA à tirer des enseignements des données et à s'améliorer avec l'expérience, au lieu d'être explicitement programmées pour le faire. Plus on l'utilise et apporte du savoir, plus elle sera puissante.</p>
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