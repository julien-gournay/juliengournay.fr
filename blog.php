<html lang="fr">
<head>
    <?php include 'head.php'; ?>

    <title>Julien Gournay - Blog</title>
    <link rel="stylesheet" type="text/css" href="css/blog.css">

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

    <?php
        // CONNEXION BDD
        include 'php/config.php';

        if($mabase){
            $req = "SELECT * FROM `article` WHERE `statut`='publie' ORDER BY `datePublication` DESC;";
            $res = mysqli_query($cnt,$req);
        }
    ?>

    <section id="sec-1">
        <div>
            <h1>BLOG</h1>
        </div>
        <a href="#sec-2">
            <div class="scroll-down"></div>   
        </a>
    </section>

    <section id="sec-3">
        <div class="container">
            <div class="liste-cadre-titre">
                <h3>Derniers articles</h3>
            </div>
            <div class="liste-cadre">
                <?php
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
                        $url = $tab[11];
                        $duree = $tab[12];

                        $datePub = new DateTime($datePublication);
                        $formatter = new IntlDateFormatter('fr_FR', IntlDateFormatter::FULL, IntlDateFormatter::NONE, null, null, 'd MMMM yyyy');
                        $datePubFormatee = $formatter->format($datePub);

                        echo("
                            <a href=\"article.php?url=$url\"><div class=\"cadre\">
                            <div class=\"cadre-img\">
                                <img class=\"imgcover\" src=\"$imgConverture\" alt=\"\">
                            </div>
                            <div class=\"cadre-info\">
                                <div class=\"cadre-info2\"> 
                                    <div class=\"tags\">");
                                    if($tab[10] != null){
                                        $tags = json_decode($tab[10], true);
                                        if($tags){
                                            foreach ($tags as $tag) {
                                                echo("<span class=\"tag\">$tag</span>");
                                            }
                                        }
                                    }
                                    echo("</div>
                                    <h4>$titre</h4>
                                    <p class=\"pdescription\">$description</p>
                                </div>
                                <p class=\"pdate\">$datePubFormatee | $duree min de lecture</p>
                            </div>
                            </div></a>
                        ");
                    }
                ?>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <?php include 'footer.php'; ?>
</body>
</html>