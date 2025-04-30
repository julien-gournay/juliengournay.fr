<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include 'head.php'; ?>
    <title>Crédit - Julien Gournay</title>

    <link rel="stylesheet" type="text/css" href="css/confidentialite.css">

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
            <h1>CREDIT</h1>
        </div>
        <a href="#sec-2">
            <div class="scroll-down"></div>   
        </a>
    </section>

    <section id="sec-2">
        <div class="menu">
            <div class="menudiv">
                <h3>Sommaire</h3>
                <ol>
                    <li><a href="#intro">Crédits</a></li>
                    <li><a href="#intro">Mentions Légales</a></li>
                    <ol>   
                        <li><a href="#collecte">Droit d'auteur</a></li>
                        <li><a href="#protection">Liens hypertextes</a></li>
                        <li><a href="#conservation">Politiques de confidentialité</a></li>
                        <li><a href="#utilisation">Hébergement</a></li>

                    </ol>
                </ol>
            </div>
        </div>

        <article>
            <h2>Crédit</h2>
            <div class="partie">
                <p>
                    <ul>
                        <li><b>Conception et réalisation:</b> Julien Gournay <a href="https://github.com/julien-gournay/">(@https://github.com/julien-gournay/)</a></li>
                        <li><b>Photographies:</b> [Votre nom] sauf mention contraire</li>
                        <li><b>Illustrations:</b> [Votre nom] sauf mention contraire</li>
                        <li><b>Design graphique:</b>  Julien Gournay (maquette réalisé sur Figma)</li>
                        <li><b>Développement web:</b>  Julien Gournay <a href="https://github.com/julien-gournay/">(@https://github.com/julien-gournay/)</a></li>
                    </ul>
                </p>
            </div>

            <h2>Mentions légales</h2>
            <div class="partie">
                <h3>Droits d'auteur</h3>
                <p>L'ensemble de ce site, notamment les textes, images, graphismes, logo, icônes et sons, sont la propriété de [Votre nom] et sont protégés par les lois françaises et internationales relatives à la propriété intellectuelle. Toute reproduction, représentation, modification, publication, adaptation totale ou partielle de l'un quelconque de ces éléments, par quelque procédé que ce soit, sans l'autorisation préalable écrite de [Votre nom] est interdite et constitue une contrefaçon sanctionnée par les articles L. 335-2 et suivants du Code de la propriété intellectuelle. </p>
            </div>

            <div class="partie">
                <h3>Liens hypertextes</h3>
                <p>Le site peut contenir des liens hypertextes vers d'autres sites web. [Votre nom] n'exerce aucun contrôle sur ces sites et décline toute responsabilité quant à leur contenu, fonctionnement ou accès.</p>
            </div>

            <div class="partie">
                <h3>Données personnelles</h3>
                <p>Conformément à la réglementation en vigueur, notamment le Règlement Général sur la Protection des Données (RGPD), je m'engage à protéger vos données personnelles</p>
                <a href="confidentialite.php">Lire la Politique de Confidentité</a>
            </div>
            
            <div class="partie">
                <h3>Hébergement</h3>
                <p>Ce site est hébergé par PulsHeberg.</p>
            </div>
        </article>
    </section>

    <!-- FOOTER -->
    <?php include 'footer.php'; ?>

</body>
</html>