<html lang="fr">
<head>
    <?php include 'head.php'; ?>
    <title>Julien Gournay - Blog</title>

    <!--<link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css"  rel="stylesheet" />-->
    <link rel="stylesheet" type="text/css" href="css/article.css">

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

        if(isset($_GET["url"])){
            $url = $_GET["url"];
        }

        if($mabase){
            $req = "SELECT * FROM article WHERE article.url='$url'";
            $res = mysqli_query($cnt,$req);
        }
        // Définir le compteur
        $i = 0;
        // Itérer sur les résultats
        while ($tab = mysqli_fetch_row($res)) {
            $titre = $tab[1];
            $description = $tab[2];
            $contenu = $tab[3];
            $auteur = $tab[4];
            $datePublication = $tab[5];
            $dateModification = $tab[6];
            $categorie = $tab[8];
            $imgConverture = $tab[9];
            $duree = $tab[12];
            break;
        }

        $date = new DateTime($datePublication); // Création de l'objet DateTime
        $formattedDate = $date->format('d F Y à H\hi'); // Formatage de la date

        $moisFrancais = [ // Traduction des mois en français
            'January' => 'janvier',
            'February' => 'février',
            'March' => 'mars',
            'April' => 'avril',
            'May' => 'mai',
            'June' => 'juin',
            'July' => 'juillet',
            'August' => 'août',
            'September' => 'septembre',
            'October' => 'octobre',
            'November' => 'novembre',
            'December' => 'décembre'
        ];

        foreach ($moisFrancais as $anglais => $francais) { // Remplacement du mois en anglais par le mois en français
            $formattedDate = str_replace($anglais, $francais, $formattedDate);
        }
    ?>

    <!-- NAVBAR -->
    <?php include 'navbar.php'; ?>

    <section id="sec-1">
        <div class="cadre">
            <div class="cadre-info">
                <div class="cadre-info-text">
                    <div>
                        <?php print("<h1>$titre</h1>"); ?>
                        <?php print("<p class=\"pdate\">$formattedDate | $duree min de lecture</p>"); ?>
                    </div>
                    <?php print("<p class=\"pdescription\">$description</p>"); ?>
                </div>
            </div>
            <div class="cadre-img">
                <?php print("<img class=\"ad5-block ad5-width-100% ad5-radius-lg\" src=\"$imgConverture\" alt=\"\">"); ?>
            </div>
        </div>
        <a class="plire" href="#sec-2">↓ Lire l'article ↓</a>
    </section>

    <section id="sec-2">
        <?php
            print("
                <article>
                $contenu

                </article>
            ");
        ?>
    </section>


    <!-- FOOTER -->
    <?php include 'footer.php'; ?>

    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/mode_sombre.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
</body>
</html>