<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include 'head.php'; ?>
    <title>RNCP 36463 - Julien Gournay</title>
    <link rel="stylesheet" type="text/css" href="css/rncp36463.css">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-T6V1XWV51D"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-T6V1XWV51D');
    </script>

    <?php
        // ----------------------------------------------------------------
        // Annexes du dossier de certification RNCP 36463, groupées par projet
        // ----------------------------------------------------------------
        $categories = [
            [
                'code' => '0',
                'titre' => 'Documents généraux',
                'description' => "Documents transverses liés à mon dossier de certification : liens utiles, attestations, et CV.",
                'annexes' => [
                    ['code' => '01', 'titre' => 'Liens',                                                    'type' => 'Lien',                    'lien' => null],
                    ['code' => '02', 'titre' => 'Portfolio',                                                'type' => 'Lien',                    'lien' => 'https://juliengournay.fr'],
                    ['code' => '03', 'titre' => 'Fiche évaluation entreprise',                               'type' => 'Attestation',             'lien' => 'https://github.com/julien-gournay/dossier-rncp-36463/blob/main/Annexes/03%20-%20Fiche%20%C3%A9valuation%20entreprise.pdf'],
                    ['code' => '04', 'titre' => "CV Julien Gournay",          'type' => 'CV',  'lien' => 'https://juliengournay.fr/cv'],
                ],
            ],
            [
                'code' => 'A',
                'titre' => 'POC Signature Editor (NeoLedge)',
                'description' => "Le POC est un éditeur permettant la création, la personnalisation et l'import/export au format JSON de signatures électroniques.",
                'annexes' => [
                    ['code' => 'A1',  'titre' => 'Cahier des charges',                    'type' => 'Extrait de documentation technique',                 'lien' => 'https://github.com/julien-gournay/dossier-rncp-36463/blob/main/Annexes/A1%20-%20POC%20Signature%20Editor%20-%20Cahier%20des%20charges.pdf'],
                    ['code' => 'A2',  'titre' => 'signature.test.ts',                     'type' => 'Extrait de code',                                    'lien' => 'https://github.com/julien-gournay/dossier-rncp-36463/blob/main/Annexes/A2%20-%20POC%20Signature%20Editor%20-%20signature.test.ts'],
                    ['code' => 'A3',  'titre' => 'Plan de tests unitaires',                'type' => 'Extrait de documentation technique',                'lien' => 'https://github.com/julien-gournay/dossier-rncp-36463/blob/main/Annexes/A3%20-%20POC%20Signature%20Editor%20-%20Plan%20de%20tests%20unitaires.pdf'],
                    ['code' => 'A4A',  'titre' => 'Sortie Vitest',                          'type' => "Capture d'écrans",                                  'lien' => 'https://github.com/julien-gournay/dossier-rncp-36463/blob/main/Annexes/A4_a%20-%20POC%20Signature%20Editor%20-%20Sortie%20Vitest.png'],
                    ['code' => 'A4B',  'titre' => 'Sortie Vitest',                          'type' => "Capture d'écrans",                                  'lien' => 'https://github.com/julien-gournay/dossier-rncp-36463/blob/main/Annexes/A4_b%20-%20POC%20Signature%20Editor%20-%20Sortie%20Vitest.png'],
                    ['code' => 'A5',  'titre' => 'Rapport audit accès',                    'type' => 'Extrait de documentation technique',                'lien' => 'https://github.com/julien-gournay/dossier-rncp-36463/blob/main/Annexes/A5%20-%20POC%20Signature%20Editor%20-%20Rapport%20audit%20access.pdf'],
                    ['code' => 'A6',  'titre' => 'Cahier de recette',                      'type' => 'Extrait de documentation technique',                'lien' => 'https://github.com/julien-gournay/dossier-rncp-36463/blob/main/Annexes/A6%20-%20POC%20Signature%20Editor%20-%20Cahier%20de%20recette.pdf'],
                    ['code' => 'A7',  'titre' => 'Compte rendu sprint 4',                  'type' => 'Compte rendu',                                      'lien' => 'https://github.com/julien-gournay/dossier-rncp-36463/blob/main/Annexes/A7%20-%20POC%20Signature%20Editor%20-%20Compte%20rendu%20sprint%204.pdf'],
                    ['code' => 'A8',  'titre' => 'Interface mode sombre',                  'type' => "Capture d'écrans",                                  'lien' => 'https://github.com/julien-gournay/dossier-rncp-36463/blob/main/Annexes/A8_b%20-%20POC%20Signature%20Editor%20-%20Interface%20mode%20sombre.png'],
                    ['code' => 'A9',  'titre' => 'Readme export JSON',                     'type' => 'Extrait de documentation technique',                'lien' => 'https://github.com/julien-gournay/dossier-rncp-36463/blob/main/Annexes/A9%20-%20POC%20Signature%20Editor%20-%20Readme%20export%20JSON.md'],
                    ['code' => 'A10', 'titre' => 'Schéma données',                         'type' => "Schéma d'architecture",                             'lien' => 'https://github.com/julien-gournay/dossier-rncp-36463/blob/main/Annexes/A10%20-%20POC%20Signature%20Editor%20-%20Sch%C3%A9ma%20donn%C3%A9es.png'],
                    ['code' => 'A11', 'titre' => 'useSignatureExport.ts',                  'type' => 'Extrait de code',                                   'lien' => 'https://github.com/julien-gournay/dossier-rncp-36463/blob/main/Annexes/A11%20-%20POC%20Signature%20Editor%20-%20useSignatureExport.ts'],
                    ['code' => 'A12', 'titre' => 'useSignatureJsonImport.ts',              'type' => 'Extrait de code',                                   'lien' => 'https://github.com/julien-gournay/dossier-rncp-36463/blob/main/Annexes/A12%20-%20POC%20Signature%20Editor%20-%20useSignatureJsonImport.ts'],
                    ['code' => 'A13', 'titre' => 'Workflow fonctionnalité',                'type' => "Schéma d'architecture",                             'lien' => 'https://github.com/julien-gournay/dossier-rncp-36463/blob/main/Annexes/A13%20-%20POC%20Signature%20Editor%20-%20Workflow%20fonctionnalit%C3%A9.png'],
                    ['code' => 'A14', 'titre' => 'Matrice des risques',                    'type' => 'Extrait de documentation technique',                'lien' => 'https://github.com/julien-gournay/dossier-rncp-36463/blob/main/Annexes/A14%20-%20POC%20Signature%20Editor%20-%20Matrice%20des%20risques.pdf'],
                    ['code' => 'A15', 'titre' => 'Compte rendu entretien process',         'type' => 'Compte rendu',                                      'lien' => 'https://github.com/julien-gournay/dossier-rncp-36463/blob/main/Annexes/A15%20-%20POC%20Signature%20Editor%20-%20Compte%20rendu%20d\'entretien%20process.pdf'],
                    ['code' => 'A16A', 'titre' => 'Structure projet',                       'type' => 'Capture d\'écrans',                                'lien' => 'https://github.com/julien-gournay/dossier-rncp-36463/blob/main/Annexes/A16_a%20-%20POC%20Signature%20Editor%20-%20Structure%20projet.png'],
                    ['code' => 'A16B', 'titre' => 'Structure projet',                       'type' => 'Capture d\'écrans',                                'lien' => 'https://github.com/julien-gournay/dossier-rncp-36463/blob/main/Annexes/A16_b%20-%20POC%20Signature%20Editor%20-%20Structure%20projet.png'],
                    ['code' => 'A17', 'titre' => 'README projet',                           'type' => 'Extrait de documentation technique',               'lien' => 'https://github.com/julien-gournay/dossier-rncp-36463/blob/main/Annexes/A17%20-%20POC%20Signature%20Editor%20-%20README%20projet.md'],
                    ['code' => 'A18', 'titre' => 'README preview',                          'type' => 'Extrait de documentation technique',               'lien' => 'https://github.com/julien-gournay/dossier-rncp-36463/blob/main/Annexes/A17%20-%20POC%20Signature%20Editor%20-%20README%20projet.md'],
                    ['code' => 'A19', 'titre' => 'README richEditor',                       'type' => 'Extrait de documentation technique',               'lien' => 'https://github.com/julien-gournay/dossier-rncp-36463/blob/main/Annexes/A19%20-%20POC%20Signature%20Editor%20-%20README%20richEditor.md'],
                    ['code' => 'A20', 'titre' => 'Exemple Export JSON',                     'type' => 'Extrait de code',                                  'lien' => 'https://github.com/julien-gournay/dossier-rncp-36463/blob/main/Annexes/A20%20-%20POC%20Signature%20Editor%20-%20Exemple%20Export%20JSON.json'],
                    ['code' => 'A21', 'titre' => 'Cartographie des flux documentaires',     'type' => 'Compte rendu',                                     'lien' => 'https://github.com/julien-gournay/dossier-rncp-36463/blob/main/Annexes/A21%20-%20POC%20Signature%20Editor%20-%20Cartographie%20des%20flux%20documentaires.pdf'],
                    ['code' => 'A22A', 'titre' => 'Interface POC',                          'type' => 'Capture d\'écrans',                                'lien' => 'https://github.com/julien-gournay/dossier-rncp-36463/blob/main/Annexes/A22_a%20-%20POC%20Signature%20Editor%20-%20Interface%20POC.png'],
                    ['code' => 'A22B', 'titre' => 'Interface POC',                          'type' => 'Capture d\'écrans',                                'lien' => 'https://github.com/julien-gournay/dossier-rncp-36463/blob/main/Annexes/A22_b%20-%20POC%20Signature%20Editor%20-%20Interface%20POC.png'],
                    ['code' => 'A22C', 'titre' => 'Interface POC',                          'type' => 'Capture d\'écrans',                                'lien' => 'https://github.com/julien-gournay/dossier-rncp-36463/blob/main/Annexes/A22_c%20-%20POC%20Signature%20Editor%20-%20Interface%20POC.png'],
                    ['code' => 'A22D', 'titre' => 'Interface POC',                          'type' => 'Capture d\'écrans',                                'lien' => 'https://github.com/julien-gournay/dossier-rncp-36463/blob/main/Annexes/A22_d%20-%20POC%20Signature%20Editor%20-%20Interface%20POC.png'],
                    ['code' => 'A23', 'titre' => 'Liste commits git',                          'type' => 'Capture d\'écrans',                                'lien' => 'https://github.com/julien-gournay/dossier-rncp-36463/blob/main/Annexes/A23%20-%20POC%20Signature%20Editor%20-%20Liste%20commit%20git.png'],
                ],
            ],
            [
                'code' => 'B',
                'titre' => 'Campus Companion (Challenge 48h)',
                'description' => "Application multi-plateforme pour accompagner les etudiants Ynov, avec une experience adaptee sur mobile, web et desktop. Focntionne avec une API connecté à un model d'IA pour permettre de répondre à l'utilisateur.",
                'annexes' => [
                    ['code' => 'B1', 'titre' => 'Documentation API',           'type' => 'Extrait de documentation technique', 'lien' => 'https://github.com/julien-gournay/dossier-rncp-36463/blob/main/Annexes/B1%20-%20Campus%20Companion%20-%20Documentation%20API.pdf'],
                    ['code' => 'B2', 'titre' => 'Readme intégration',          'type' => 'Extrait de documentation technique', 'lien' => 'https://github.com/julien-gournay/dossier-rncp-36463/blob/main/Annexes/B2%20-%20Campus%20Companion%20-%20Int%C3%A9gration.pdf'],
                    ['code' => 'B3', 'titre' => 'Documentation organisation',  'type' => 'Extrait de documentation technique', 'lien' => 'https://github.com/julien-gournay/dossier-rncp-36463/blob/main/Annexes/B3%20-%20Campus%20Companion%20-%20Coordination%20Agile.pdf'],
                    ['code' => 'B4', 'titre' => 'Présentation projet',          'type' => 'Compte rendu',                       'lien' => 'https://github.com/julien-gournay/dossier-rncp-36463/blob/main/Annexes/B4%20-%20Campus%20Companion%20-%20Pr%C3%A9sentation%20projet.pdf'],
                ],
            ],
            [
                'code' => 'C',
                'titre' => 'Concertothèque',
                'description' => "Application de gestion de ma collection de concerts, avec une interface CRUD complète pour administrer les données Firebase. Projet sous Flutter.",
                'annexes' => [
                    ['code' => 'C1', 'titre' => 'Documentation architecture', 'type' => "Diagramme UML, Extrait de documentation technique", 'lien' => 'https://juliengournay.fr/rncp_C1'],
                    ['code' => 'C2A', 'titre' => 'Interface CRUD',             'type' => "Capture d'écrans",                                  'lien' => 'https://github.com/julien-gournay/dossier-rncp-36463/blob/main/Annexes/C2_a%20-%20Concertotheque%20-%20Interface%20CRUD.png'],
                    ['code' => 'C2B', 'titre' => 'Interface CRUD',             'type' => "Capture d'écrans",                                  'lien' => 'https://github.com/julien-gournay/dossier-rncp-36463/blob/main/Annexes/C2_b%20-%20Concertotheque%20-%20Interface%20CRUD.png'],
                    ['code' => 'C2C', 'titre' => 'Interface CRUD',             'type' => "Capture d'écrans",                                  'lien' => 'https://github.com/julien-gournay/dossier-rncp-36463/blob/main/Annexes/C2_c%20-%20Concertotheque%20-%20Interface%20CRUD.png'],
                    ['code' => 'C2D', 'titre' => 'Interface CRUD',             'type' => "Capture d'écrans",                                  'lien' => 'https://github.com/julien-gournay/dossier-rncp-36463/blob/main/Annexes/C2_d%20-%20Concertotheque%20-%20Interface%20CRUD.png'],
                    ['code' => 'C2E', 'titre' => 'Interface CRUD',             'type' => "Capture d'écrans",                                  'lien' => 'https://github.com/julien-gournay/dossier-rncp-36463/blob/main/Annexes/C2_e%20-%20Concertotheque%20-%20Interface%20CRUD.png'],
                    ['code' => 'C2F', 'titre' => 'Interface CRUD',             'type' => "Capture d'écrans",                                  'lien' => 'https://github.com/julien-gournay/dossier-rncp-36463/blob/main/Annexes/C2_f%20-%20Concertotheque%20-%20Interface%20CRUD.png'],
                ],
            ],
            [
                'code' => 'D',
                'titre' => 'Billetterie (Ville de Tourcoing)',
                'description' => "Projet de billetterie réalisé en stage au sein de la Ville de Tourcoing, visant à digitaliser la gestion des billets pour les activitès des Parcs et Jardins. Projet sous Django.",
                'annexes' => [
                    ['code' => 'D1', 'titre' => 'Rapport de stage', 'type' => 'Compte rendu', 'lien' => 'https://github.com/julien-gournay/dossier-rncp-36463/blob/main/Annexes/D1%20-%20Billetterie%20Tourcoing%20-%20Rapport%20de%20stage.pdf'],
                    ['code' => 'D2A', 'titre' => 'Interface billetterie', 'type' => 'Capture d\'écrans', 'lien' => 'https://github.com/julien-gournay/dossier-rncp-36463/blob/main/Annexes/D2_a%20-%20Billetterie%20Tourcoing%20-%20Interface%20billetterie.png'],
                    ['code' => 'D2B', 'titre' => 'Interface billetterie', 'type' => 'Capture d\'écrans', 'lien' => 'https://github.com/julien-gournay/dossier-rncp-36463/blob/main/Annexes/D2_b%20-%20Billetterie%20Tourcoing%20-%20Interface%20billetterie.png'],
                    ['code' => 'D2C', 'titre' => 'Interface billetterie', 'type' => 'Capture d\'écrans', 'lien' => 'https://github.com/julien-gournay/dossier-rncp-36463/blob/main/Annexes/D2_c%20-%20Billetterie%20Tourcoing%20-%20Interface%20billetterie.png'],
                    ['code' => 'D2D', 'titre' => 'Interface billetterie', 'type' => 'Capture d\'écrans', 'lien' => 'https://github.com/julien-gournay/dossier-rncp-36463/blob/main/Annexes/D2_d%20-%20Billetterie%20Tourcoing%20-%20Interface%20billetterie.png'],
                    ['code' => 'D3A', 'titre' => 'Interface admin', 'type' => 'Capture d\'écrans', 'lien' => 'https://github.com/julien-gournay/dossier-rncp-36463/blob/main/Annexes/D3_a%20-%20Billetterie%20Tourcoing%20-%20Interface%20admin.png'],
                    ['code' => 'D3B', 'titre' => 'Interface admin', 'type' => 'Capture d\'écrans', 'lien' => 'https://github.com/julien-gournay/dossier-rncp-36463/blob/main/Annexes/D3_b%20-%20Billetterie%20Tourcoing%20-%20Interface%20admin.png'],
                    ['code' => 'D3C', 'titre' => 'Interface admin', 'type' => 'Capture d\'écrans', 'lien' => 'https://github.com/julien-gournay/dossier-rncp-36463/blob/main/Annexes/D3_c%20-%20Billetterie%20Tourcoing%20-%20Interface%20admin.png'],
                    ['code' => 'D3D', 'titre' => 'Interface admin', 'type' => 'Capture d\'écrans', 'lien' => 'https://github.com/julien-gournay/dossier-rncp-36463/blob/main/Annexes/D3_d%20-%20Billetterie%20Tourcoing%20-%20Interface%20admin.png'],
                    ['code' => 'D3E', 'titre' => 'Interface admin', 'type' => 'Capture d\'écrans', 'lien' => 'https://github.com/julien-gournay/dossier-rncp-36463/blob/main/Annexes/D3_e%20-%20Billetterie%20Tourcoing%20-%20Interface%20admin.png'],
                ],
            ],
            [
                'code' => 'E',
                'titre' => 'Dalkia',
                'description' => "Stage effectué chez Dalkia, en tant que technicien informatique, avec des missions de maintenance, de support et d'amélioration des systèmes informatiques. Le projet inclut la création d'un script PowerShell pour automatiser certaines tâches et la rédaction d'une documentation technique.",
                'annexes' => [
                    ['code' => 'E1', 'titre' => 'Script PowerShell',              'type' => 'Extrait de code',                    'lien' => 'https://github.com/julien-gournay/dossier-rncp-36463/blob/main/Annexes/E1_a%20-%20Dalkia%20-%20Script%20PowerShell.bat'],
                    ['code' => 'E2', 'titre' => 'Documentation mise à niveau',    'type' => 'Extrait de documentation technique', 'lien' => 'https://github.com/julien-gournay/dossier-rncp-36463/blob/main/Annexes/E2%20-%20Dalkia%20-%20Documentation%20mise%20%C3%A0%20niveau.pdf'],
                    ['code' => 'E3', 'titre' => 'Rapport de stage',               'type' => 'Compte rendu',                       'lien' => 'https://github.com/julien-gournay/dossier-rncp-36463/blob/main/Annexes/E3%20-%20Dalkia%20-%20Rapport%20de%20stage.pdf'],
                ],
            ],
            [
                'code' => 'F',
                'titre' => 'Olympe (Ydays)',
                'description' => "Projet « Olympe » mené dans le cadre de l'école Ydays, est une plateforme de cyberdéfense conçue pour tourner sur Kubernetes afin de créer dynamiquement des sandbox d'analyse et de paralléliser le traitement des captures réseau.",
                'annexes' => [
                    ['code' => 'F1A', 'titre' => 'Planning Jira',                     'type' => "Capture d'écrans",                  'lien' => 'https://github.com/julien-gournay/dossier-rncp-36463/blob/main/Annexes/F1_a%20-%20Olympe%20-%20Planning%20Jira.png'],
                    ['code' => 'F1B', 'titre' => 'Planning Jira',                     'type' => "Capture d'écrans",                  'lien' => 'https://github.com/julien-gournay/dossier-rncp-36463/blob/main/Annexes/F1_b%20-%20Olympe%20-%20Planning%20Jira.png'],
                    ['code' => 'F2', 'titre' => 'Présentation Olympe',                     'type' => "Compte rendu",                  'lien' => 'https://github.com/julien-gournay/dossier-rncp-36463/blob/main/Annexes/F2%20-%20Olympe%20-%20Pr%C3%A9sentation%20Olympe.pdf'],
                    ['code' => 'F3', 'titre' => 'ml/feature_extractor.py',                     'type' => "Extrait de code",                  'lien' => 'https://github.com/julien-gournay/Olympe_IA/blob/main/ml/feature_extractor.py '],
                    ['code' => 'F4', 'titre' => 'Documentation ML',                     'type' => "Extrait de documentation technique",                  'lien' => 'https://github.com/julien-gournay/Olympe_IA/blob/main/ml/DOCUMENTATION.md'],
                    ['code' => 'F5', 'titre' => 'Rapport modele ML',                     'type' => "Compte rendu",                  'lien' => 'https://github.com/julien-gournay/Olympe_IA/blob/main/ml/RAPPORT_MODELE.md'],
                ],
            ],
            [
                'code' => 'G',
                'titre' => 'Marie Team',
                'description' => "Projet réalisé pour mon examen final de BTS. Le projet Marie Team est une plateforme de réservation de traversées en ferry.",
                'annexes' => [
                    ['code' => 'G1', 'titre' => 'Documentation du projet', 'type' => 'Extrait de documentation technique', 'lien' => 'https://github.com/julien-gournay/dossier-rncp-36463/blob/main/Annexes/G1%20-%20Marie%20Team%20-%20Documentation%20du%20projet.pdf'],
                    ['code' => 'G2', 'titre' => 'Base de données',          'type' => 'Extrait de code',                   'lien' => 'https://github.com/julien-gournay/dossier-rncp-36463/blob/main/Annexes/G2%20-%20Marie%20Team%20-%20Base%20de%20donn%C3%A9es.sql'],
                    ['code' => 'G3', 'titre' => 'Users BDD',          'type' => 'Extrait de code',                   'lien' => 'https://github.com/julien-gournay/dossier-rncp-36463/blob/main/Annexes/G3%20-%20Marie%20Team%20-%20Users%20BDD.sql'],
                    ['code' => 'G4', 'titre' => 'Documentation technique Laravel',          'type' => 'Extrait de documentation technique',                   'lien' => 'https://github.com/julien-gournay/dossier-rncp-36463/blob/main/Annexes/G4%20-%20Marie%20Team%20-%20Documentation%20technique%20Laravel.pdf'],
                ],
            ],
            [
                'code' => 'H',
                'titre' => 'TicketsFlow',
                'description' => "Projet « TicketsFlow » est une plateforme de gestion d'évenements, avec une interface de dashboard et un portail SSO pour les utilisateurs.",
                'annexes' => [
                    ['code' => 'H1A', 'titre' => "Interface Dashboard", 'type' => 'Capture d\'écrans', 'lien' => 'https://github.com/julien-gournay/dossier-rncp-36463/blob/main/Annexes/H1_a%20-%20TicketsFlow%20-%20Interface%20Dashboard.png'],
                    ['code' => 'H1B', 'titre' => "Interface Dashboard", 'type' => 'Capture d\'écrans', 'lien' => 'https://github.com/julien-gournay/dossier-rncp-36463/blob/main/Annexes/H1_b%20-%20TicketsFlow%20-%20Interface%20Dashboard.png'],
                    ['code' => 'H1C', 'titre' => "Interface Dashboard", 'type' => 'Capture d\'écrans', 'lien' => 'https://github.com/julien-gournay/dossier-rncp-36463/blob/main/Annexes/H1_c%20-%20TicketsFlow%20-%20Interface%20Dashboard.png'],
                    ['code' => 'H1D', 'titre' => "Interface Dashboard", 'type' => 'Capture d\'écrans', 'lien' => 'https://github.com/julien-gournay/dossier-rncp-36463/blob/main/Annexes/H1_d%20-%20TicketsFlow%20-%20Interface%20Dashboard.png'],
                    ['code' => 'H1E', 'titre' => "Interface Dashboard", 'type' => 'Capture d\'écrans', 'lien' => 'https://github.com/julien-gournay/dossier-rncp-36463/blob/main/Annexes/H1_e%20-%20TicketsFlow%20-%20Interface%20Dashboard.png'],
                    ['code' => 'H1F', 'titre' => "Interface Dashboard", 'type' => 'Capture d\'écrans', 'lien' => 'https://github.com/julien-gournay/dossier-rncp-36463/blob/main/Annexes/H1_f%20-%20TicketsFlow%20-%20Interface%20Dashboard.png'],
                    ['code' => 'H2A', 'titre' => "Interface portail SSO", 'type' => 'Capture d\'écrans', 'lien' => 'https://github.com/julien-gournay/dossier-rncp-36463/blob/main/Annexes/H2_a%20-%20TicketsFlow%20-%20Interface%20portail%20SSO.png'],
                    ['code' => 'H2B', 'titre' => "Interface portail SSO", 'type' => 'Capture d\'écrans', 'lien' => 'https://github.com/julien-gournay/dossier-rncp-36463/blob/main/Annexes/H2_b%20-%20TicketsFlow%20-%20Interface%20portail%20SSO.png'],
                    ['code' => 'H2C', 'titre' => "Interface portail SSO", 'type' => 'Capture d\'écrans', 'lien' => 'https://github.com/julien-gournay/dossier-rncp-36463/blob/main/Annexes/H2_c%20-%20TicketsFlow%20-%20Interface%20portail%20SSO.png'],
                    ['code' => 'H3', 'titre' => "Interface Dashboard", 'type' => 'Extrait de documentation technique ', 'lien' => 'https://github.com/julien-gournay/dossier-rncp-36463/blob/main/Annexes/H3%20-%20TicketsFlow%20-%20Documentation%20int%C3%A9grations.md'],
                ],
            ],
            [
                'code' => 'I',
                'titre' => 'Nord Compo',
                'description' => "Stage effectué chez Nord Compo, avec la conception d'une interface de dashboard pour la gestion des ressources informatiques.",
                'annexes' => [
                    ['code' => 'I1', 'titre' => 'Rapport de stage',     'type' => 'Compte rendu',        'lien' => 'https://github.com/julien-gournay/dossier-rncp-36463/blob/main/Annexes/I1%20-%20Nord%20Compo%20-%20Rapport%20de%20stage.pdf'],
                    ['code' => 'I2A', 'titre' => 'Interface dashboard', 'type' => "Capture d'écrans",    'lien' => 'https://github.com/julien-gournay/dossier-rncp-36463/blob/main/Annexes/I2_a%20-%20Nord%20Compo%20-%20Interface%20dashboard.png'],
                    ['code' => 'I2B', 'titre' => 'Interface dashboard', 'type' => "Capture d'écrans",    'lien' => 'https://github.com/julien-gournay/dossier-rncp-36463/blob/main/Annexes/I2_b%20-%20Nord%20Compo%20-%20Interface%20dashboard.png'],
                    ['code' => 'I2C', 'titre' => 'Interface dashboard', 'type' => "Capture d'écrans",    'lien' => 'https://github.com/julien-gournay/dossier-rncp-36463/blob/main/Annexes/I2_c%20-%20Nord%20Compo%20-%20Interface%20dashboard.png'],
                    ['code' => 'I3A', 'titre' => 'Interface PRTG', 'type' => "Capture d'écrans",    'lien' => 'https://github.com/julien-gournay/dossier-rncp-36463/blob/main/Annexes/I3_a%20-%20Nord%20Compo%20-%20Interface%20PRTG.png'],
                    ['code' => 'I3B', 'titre' => 'Interface PRTG', 'type' => "Capture d'écrans",    'lien' => 'https://github.com/julien-gournay/dossier-rncp-36463/blob/main/Annexes/I3_b%20-%20Nord%20Compo%20-%20Interface%20PRTG.png'],
                    ['code' => 'I3C', 'titre' => 'Interface PRTG', 'type' => "Capture d'écrans",    'lien' => 'https://github.com/julien-gournay/dossier-rncp-36463/blob/main/Annexes/I3_c%20-%20Nord%20Compo%20-%20Interface%20PRTG.png'],
                ],
            ],
            [
                'code' => 'J',
                'titre' => 'Portfolio',
                'description' => "Ce portfolio personnel, développé et déployé pour présenter mes projets et mon parcours.",
                'annexes' => [
                    ['code' => 'J1', 'titre' => 'Schéma déploiement', 'type' => 'Schéma d\'architecture', 'lien' => 'https://github.com/julien-gournay/dossier-rncp-36463/blob/main/Annexes/J1%20-%20Portfolio%20-%20Sch%C3%A9ma%20d%C3%A9ploiement.png'],
                    ['code' => 'J2', 'titre' => 'Interface Plesk «Dépôts Git»', 'type' => 'Capture d\'écran', 'lien' => 'https://github.com/julien-gournay/dossier-rncp-36463/blob/main/Annexes/J2%20%E2%80%93%20Portfolio%20%E2%80%93%20Interface%20Plesk%20D%C3%A9p%C3%B4ts%20Git.png'],
                ],
            ],
            [
                'code' => 'K',
                'titre' => 'RealWorld',
                'description' => null,
                'annexes' => [
                    ['code' => 'K1', 'titre' => 'Documentation technique', 'type' => 'Extrait de documentation technique', 'lien' => 'https://github.com/julien-gournay/dossier-rncp-36463/blob/main/Annexes/K1%20-%20RealWorld%20-%20Documentation%20technique.md'],
                ],
            ],
        ];
    ?>
</head>

<body>
    <!-- NAVBAR -->
    <?php include 'navbar.php'; ?>

    <!-- HERO -->
    <section id="sec-1">
        <div class="hero-frame">
            <p class="cat_p lien">Titre RNCP 36463</p>
            <h1>Dossier de<br>certification</h1>
            <p class="des_p hero-des">Concepteur Développeur d'Applications — retrouvez ci-dessous mon rapport de certification ainsi que l'ensemble des annexes justificatives de mon dossier, classées par projet.</p>
            <div class="hero-bt">
                <button onclick="location.href='files/rncp/rapport_certification_rncp36463.pdf'" class="button_cv">Télécharger mon rapport de certification</button>
            </div>
        </div>
        <a href="#sec-2">
            <div class="scroll-down"></div>
        </a>
    </section>

    <!-- SOMMAIRE -->
    <nav class="sommaire" id="sommaire">
        <ul class="sommaire-list">
            <?php foreach ($categories as $categorie): ?>
                <li>
                    <a href="#annexe-<?php echo htmlspecialchars($categorie['code']); ?>" class="sommaire-lien" data-target="annexe-<?php echo htmlspecialchars($categorie['code']); ?>">
                        <span class="sommaire-code"><?php echo htmlspecialchars($categorie['code']); ?></span>
                        <span class="sommaire-titre"><?php echo htmlspecialchars($categorie['titre']); ?></span>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>

    <!-- ANNEXES -->
    <section id="sec-2">
        <div class="annexes-frame">
            <div class="annexes-titre">
                <p class="cat_p lien">Dossier de preuves</p>
                <h3>Toutes mes annexes</h3>
                <p class="des_p">Chaque annexe est reliée aux activités professionnelles de mon dossier RNCP et regroupée par projet ou entreprise.</p>
            </div>

            <?php foreach ($categories as $categorie): ?>
                <div class="annexe-groupe" id="annexe-<?php echo htmlspecialchars($categorie['code']); ?>">
                    <div class="annexe-groupe-header">
                        <p class="cat_p lien">Annexe <?php echo htmlspecialchars($categorie['code']); ?></p>
                        <h4><?php echo htmlspecialchars($categorie['titre']); ?></h4>
                        <?php if (!empty($categorie['description'])): ?>
                            <p class="annexe-groupe-des des_p"><?php echo htmlspecialchars($categorie['description']); ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="annexe-grid">
                        <?php foreach ($categorie['annexes'] as $annexe):
                            $disponible = !empty($annexe['lien']);
                            $tag = $disponible ? 'a' : 'div';
                        ?>
                            <<?php echo $tag; ?>
                                class="annexe-carte<?php echo $disponible ? '' : ' annexe-carte-indisponible'; ?>"
                                <?php if ($disponible): ?>href="<?php echo htmlspecialchars($annexe['lien']); ?>" target="_blank" rel="noopener"<?php endif; ?>
                            >
                                <span class="annexe-code">Annexe <?php echo htmlspecialchars($annexe['code']); ?></span>
                                <h5><?php echo htmlspecialchars($annexe['titre']); ?></h5>
                                <p class="annexe-type"><?php echo htmlspecialchars($annexe['type']); ?></p>
                                <span class="annexe-action">
                                    <?php echo $disponible ? "Consulter l'annexe" : 'Bientôt disponible'; ?>
                                    <?php if ($disponible): ?><i class='bx bx-link-external'></i><?php endif; ?>
                                </span>
                            </<?php echo $tag; ?>>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- FOOTER -->
    <?php include 'footer.php'; ?>

    <!-- RETOUR EN HAUT -->
    <button id="back-to-top" class="back-to-top" aria-label="Retour en haut de la page" title="Retour en haut">
        <i class='bx bx-up-arrow-alt'></i>
    </button>

    <script src="js/rncp36463.js" defer></script>
</body>
</html>
