<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include 'head.php'; ?>
    <title>Confidentialité - Julien Gournay</title>

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
            <h1>POLITIQUE</h1>
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
                    <li><a href="#intro">Introduction</a></li>    
                    <li><a href="#collecte">Collecte des données</a></li>
                    <li><a href="#utilisation">Utilisation des données</a></li>
                    <li><a href="#protection">Protection des données</a></li>
                    <li><a href="#conservation">Conservation des données</a></li>
                    <li><a href="#acces">Accès aux données</a></li>
                    <li><a href="#modification">Modification de la politique</a></li>
                </ol>
            </div>
        </div>
        <article>
            <div id="intro">
                <p style="color: var(--color-text3);"><i>Dernière modification le 07 novembre 2024</i></p><br>
                <p><b>Je m'engage à protéger la confidentialité des informations que vous me communiquez lorsque vous visitez mon site web, juliengournay.fr. Cette politique de confidentialité a pour objectif de vous informer sur les pratiques que j'adopte en matière de collecte, d'utilisation et de protection de vos données personnelles.</b></p>
            </div>

            <div id="collecte" class="partie">
                <h3>Quelles données je collecte ?</h3>
                <p>Lorsque vous naviguez sur mon site, je collecte certaines informations de manière automatique grâce à Google Analytics. Ces données me permettent d'améliorer l'expérience utilisateur et d'obtenir des statistiques sur la fréquentation de mon site.<br>Si vous souhaitez me contacter, je vous demanderai de me fournir votre nom, votre prénom et votre adresse électronique. Ces informations me sont nécessaires pour pouvoir vous répondre.</p>
            </div>

            <div id="utilisation" class="partie">
                <h3>À quoi servent ces données ?</h3>
                <p>Les données que je collecte sont utilisées à plusieurs fins :
                    <ul>
                        <li><b>Pour vous répondre :</b> Si vous me contactez via le formulaire de contact, j'utiliserai vos coordonnées pour vous répondre dans les meilleurs délais.</li>
                        <li><b>Pour améliorer mon site :</b> Les données collectées par Google Analytics me permettent d'analyser la fréquentation de mon site et d'identifier les points à améliorer.</li>
                        <li><b>Pour vous envoyer des newsletters (si vous vous y êtes abonné) :</b> Si vous avez souscrit à ma newsletter, je vous enverrai régulièrement des informations sur mes projets, mes actualités et mes offres.</li>
                    </ul>
                </p>
            </div>

            <div id="protection" class="partie">
                <h3>Comment je protège vos données ?</h3>
                <p>Je prends toutes les mesures nécessaires pour assurer la sécurité de vos données personnelles. Les données collectées par Google Analytics sont hébergées sur les serveurs sécurisés de Google. Les adresses électroniques que vous me communiquez sont stockées sur les serveurs sécurisés de mon hébergeur, PulseHerberg.</p>
            </div>

            <div id="conservation" class="partie">
                <h3>Combien de temps je conserve vos données ?</h3>
                <p>Je conserve vos données personnelles pendant une durée maximale d'un an. Passé ce délai, elles sont supprimées de mes bases de données.</p>
            </div>

            <div id=droit class="partie">
                <h3>Quels sont vos droits ?</h3>
                <p>Conformément à la réglementation en vigueur, vous disposez des droits suivants :
                    <ul>
                        <li><b>Droit d'accès :</b> Vous pouvez me demander de vous communiquer les données personnelles que je détiens à votre sujet. </li>
                        <li><b>Droit de rectification :</b> Si des informations sont erronées, vous pouvez me demander de les rectifier.</li>
                        <li><b>Droit d'effacement :</b> Vous pouvez me demander de supprimer vos données personnelles.</li>
                    </ul>
                    Pour exercer vos droits, il vous suffit de me contacter à l'adresse suivante : contact@juliengournay.fr
                </p>
            </div>

            <div id="modification" class="partie">
                <h3>Modifications de cette politique</h3>
                <p>Je me réserve le droit de modifier cette politique de confidentialité à tout moment. Toute modification sera effective dès sa publication sur cette page</p>
            </div>

            <div class="partie">
                <p><b>En utilisant mon site web, vous acceptez les termes de cette politique de confidentialité.</b></p>
                <p><b>N'hésitez pas à me solliciter si vous avez besoin de plus d'informations.</b></p>
            </div>
        </article>
    </section>

    <!-- FOOTER -->
    <?php include 'footer.php'; ?>

</body>
</html>