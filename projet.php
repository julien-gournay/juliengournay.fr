<html lang="fr">
<head>
    <?php include 'head.php'; ?>
    <title>Julien Gournay - Projet</title>
    <link rel="stylesheet" type="text/css" href="css/projet.css">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-T6V1XWV51D"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'G-T6V1XWV51D');
    </script>
</head>

<body>
<?php
// CONNEXION BDD
include 'php/config.php';

if (isset($_GET["url"])) {
    $url = $_GET["url"];
}

if ($mabase) {
    $res = mysqli_query($cnt, "SELECT * FROM portfolio WHERE portfolio.idPortfolio=$url");
}
?>

<!-- NAVBAR -->
<?php include 'navbar.php'; ?>

<section id="sec-projet">
    <?php
    $tab = mysqli_fetch_row($res);
    if ($tab) {
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
        $outils = [];
        if (!empty($tab[13])) {
            $decoded = json_decode($tab[13], true);
            if (json_last_error() === JSON_ERROR_NONE && is_array($decoded)) {
                $outils = $decoded;
            } else {
                $outils = explode(',', $tab[13]);
            }
        }

        $languages = [];
        if (!empty($tab[14])) {
            $decoded = json_decode($tab[14], true);
            if (json_last_error() === JSON_ERROR_NONE && is_array($decoded)) {
                $languages = $decoded;
            } else {
                $languages = explode(',', $tab[14]);
            }
        }

        $tags = [];
        if (!empty($tab[15])) {
            $decoded = json_decode($tab[15], true);
            if (json_last_error() === JSON_ERROR_NONE && is_array($decoded)) {
                $tags = $decoded;
            } else {
                $tags = explode(',', $tab[15]);
            }
        }
        $idProject = $tab[16];
        $idDocument = $tab[17];
    } ?>

    <div class="sec-ct">
        <article class="article">
            <div class='sec-header'>
                <div class="sec-header-icon">
                    <a href='portfolio.php'>
                        <img class="sec-header-icon-img" width="40" height="40" src="https://img.icons8.com/ios-glyphs/40/circled-left.png" alt="circled-left"/>
                    </a>
                </div>
                <div class="sec-header-title">
                    <h1><?php echo("$titre : $soustitre"); ?></h1>
                </div>
            </div>
            <img src="<?php echo("$image"); ?>" alt="image" class="sec-projet-image">

            <div>
                <h2>Présentation</h2>
                <p class="description"><?php echo("$description"); ?></p>
            </div>

            <?php
            if (!empty($github)) {
                echo("<div><h2>Code source</h2>
                            <p>Cet projet est disponible sur mon Github : <a href='$github'>$github</a></p>    
                        </div>");
            }

            // TYPE DE PROJET
            if ($type == 2 && !empty($github)) {
                echo("<div><h2>Maquette Figma</h2>
                            test   
                        </div>");
            }

            // PROJETS
            if (!empty($idProject)) {
                echo("<div><h2>Projet</h2>
                            <p>Cet projet appartient à un grand projet : <a href=\"projet.php?url=$idProject\" target=\"_blank\">Voir le projet principal.</a></p>
                    </div>");
            }

            // COMPETENCES
            if($mabase){
                $res_comp = mysqli_query($cnt,"SELECT type_competence.nom,type_competence.sousTitre,competence.nomComp FROM competence, lien_competence, type_competence WHERE lien_competence.idComp = competence.idComp AND lien_competence.idCatComp = type_competence.id AND competence.projet=$id ORDER BY type_competence.id;");
                if (mysqli_fetch_row($res_comp)) {
                    echo("<div><h2>Compétences</h2>
                            <p>Pour ce projet, j'ai pu développer diverses compétences selon le tableau de synthèse de BTS SIO : </p>");
                    while ($tab = mysqli_fetch_row($res_comp)) {
                        $nomCatComp = $tab[0];
                        $sousTitreComp = $tab[1];
                        $nomComp = $tab[2];

                        echo("<li><strong>$sousTitreComp ($nomCatComp)</strong> :<br>$nomComp,</li><br>");
                    }
                    echo("</div>");
                }
            }
            ?>
        </article>
    </div>

    <div class="aside">
        <?php
            switch ($statut) {
                case 1:
                    echo("<div class=\"aside-alert\">
                            <h2>Prochainement</h2>
                            <p>Actuellement, ce projet est en phase de reflexion et débutera bientôt.</p>
                        </div>");
                    break;
                case 2:
                    echo("<div class=\"aside-alert\">
                            <h2>En développement</h2>
                            <p>Actuellement, ce projet est en phase de développement car il y a d'autres fonctionnalités à ajouter.</p>
                        </div>");
                    break;
                case 3:
                    echo("<div class=\"aside-alert-finish\">
                            <h2>Terminé</h2>
                            <p>Actuellement, ce projet est fini. Il est possible que des mises à jours ai lieu dans le futur.</p>
                        </div>");
                    break;
                case 4:
                    echo("<div class=\"aside-alert-break\">
                            <h2>En pause</h2>
                            <p>Actuellement, le développement de ce projet est en pause, il est possible qu'il soit abandonné à l'avenir.</p>
                        </div>");
                    break;
            }
        ?>


        <div class="aside-main">
            <div class="aside-main-date">
                <strong>Année : </strong>
                <p class="date">
                    <?php echo("$anneeDebut");
                    if ($anneFin){
                        if ($anneFin !== $anneeDebut){
                            echo(" - $anneFin");
                        }
                    } else{
                        echo(" - Actuellement");
                    }?>
                </p>
            </div>

            <div class="aside-main-type">
                <strong>Type de projet : </strong>
                <p class="type">
                    <?php
                        switch ($type){
                            case 1 : echo("Site Web"); break;
                            case 2 : echo("Design UI"); break;
                            case 3 : echo("Vidéo"); break;
                            case 4 : echo("Projet"); break;
                            case 5 : echo("Application"); break;
                            case 6 : echo("Logiciel"); break;
                        }
                    ?>
                </p>
            </div>

            <div class="aside-main-cat">
                <strong>Catégorie : </strong>
                <p class="categorie"><?php echo("$categorie"); ?></p>
            </div>

            <?php if($languages){
                echo("<div class=\"aside-main-lang\">
                    <strong>Language : </strong>");
                    foreach ($languages as $language) {
                        echo("<span class=\"sec2-tag\">$language, </span>");
                    }
                echo("</div>");
            } ?>

            <?php if($outils){
                echo("<div class=\"aside-main-outil\">
                    <strong>Outils : </strong>");
                    foreach ($outils as $outil) {
                        echo("<span class=\"sec2-tag\">$outil, </span>");
                    }
                echo("</div>");
            } ?>

            <div class="aside-main-bt">
                <button onclick="location.href='<?php echo("$siteweb"); ?>'">Voir le projet</button>
            </div>

            <?php if($idDocument){
                if ($mabase) {
                    $res2 = mysqli_query($cnt, "SELECT lien FROM document WHERE document.idDoc=$idDocument");
                }
                $tab = mysqli_fetch_row($res2);
                if ($tab) {
                    $lienDoc = $tab[0];

                    echo("<div class=\"aside-main-bt\">
                        <button onclick=\"location.href='$lienDoc'\">Voir le document</button>
                    </div>");
                }
            } ?>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
</body>
</html>