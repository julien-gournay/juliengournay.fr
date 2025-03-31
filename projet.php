<html lang="fr">
<head>
    <?php include 'head.php'; ?>
    <title>Julien Gournay - Projet</title>
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
            $req = "";
            $res = mysqli_query($cnt,"SELECT * FROM portfolio WHERE portfolio.idPortfolio=$url");
        }
    ?>

    <!-- NAVBAR -->
    <?php include 'navbar.php'; ?>

    <section id="sec-1">
        <?php
            while ($tab = mysqli_fetch_row($res)) {
            $id = $tab[0];
            $titre = $tab[1];
            $soustitre = $tab[2];
            $description = $tab[3];
            $anneeDebut = $tab[4];
            $anneFin = $tab[5];
            $type = $tab[6];
            $categorie = $tab[7];
            $image = $tab[8];
            $siteweb = $tab[9];
            $github = $tab[10];
            $statut = $tab[11];
            $affichage = $tab[12];
            $outils = $tab[13];
            $languages = $tab[14];
            $tags = $tab[15];
            $idProject = $tab[16];
            $idDocument = $tab[17];
            }

            echo("<img src=\"$image\" alt=\"image\" class=\"image\">");
            echo("
            <div class=\"grid-card\">
                <h2>$titre</h2>
                <h3>$soustitre</h3>
                <p class=\"description\">$description</p>
                <p class=\"date\">$anneeDebut - $anneFin</p>
                <p class=\"type\">$type</p>
                <p class=\"categorie\">$categorie</p>
                <p class=\"statut\">$statut</p>
                <p class=\"outils\">$outils</p>
                <p class=\"languages\">$languages</p>
                <p class=\"tags\">$tags</p>
                <p class=\"siteweb\"><a href=\"$siteweb\" target=\"_blank\">$siteweb</a></p>
                <p class=\"github\"><a href=\"$github\" target=\"_blank\">$github</a></p>
                <p class=\"idProject\"><a href=\"https://dev.juliengournay.fr/projet.php?url=$idProject\" target=\"_blank\">$idProject</a></p>
                <p class=\"idDocument\"><a href=\"https://dev.juliengournay.fr/document.php?url=$idDocument\" target=\"_blank\">$idDocument</a></p>
            </div>");
        ?>
    </section>

    <?php include 'footer.php'; ?>
</body>
</html>