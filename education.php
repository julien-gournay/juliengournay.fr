<html lang="fr">
<head>
    <!-- HEAD -->
    <?php include 'head.php'; ?>

    <title>Julien Gournay</title>
    <link rel="stylesheet" type="text/css" href="css/education.css">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-T6V1XWV51D"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-T6V1XWV51D');
    </script>
    
    <?php
        // CONNEXION BDD
        include 'php/config.php';

        if($mabase){
            $reqSup = "SELECT * FROM education WHERE education.type='Supérieure' ORDER BY education.date DESC";
            $resSup = mysqli_query($cnt,$reqSup);

            $reqCL = "SELECT * FROM education WHERE education.type='Collège' OR education.type='Lycée' ORDER BY education.date DESC";
            $resCL = mysqli_query($cnt,$reqCL);

            $reqMP = "SELECT * FROM education WHERE education.type='Maternelle' OR education.type='Primaire'ORDER BY education.date DESC";
            $resMP = mysqli_query($cnt,$reqMP);
        }
    ?>
</head>

<body>
    <!-- NAVBAR -->
    <?php include 'navbar.php'; ?>

    <section id="sec-1">
        <div>
            <h1>EDUCATION</h1>
        </div>
        <a href="#sec-2">
            <div class="scroll-down"></div>   
        </a>
    </section>

    <section id="sec-2">
        <div class="listeEcole">
            <div class="ecoleSup">
            <?php
                if($resSup){
                    echo("<h2>Ecole supérieur</h2>");
                    echo("<div class=\"list-cadre\">");
                    While ($tab=mysqli_fetch_row($resSup)){
						$idEduc = $tab[0];
                        $nom = $tab[1];
                        $lieu = $tab[2];
                        $type = $tab[3];
                        $description = $tab[4];
                        $date = $tab[5];
                        $statut = $tab[6];
                        $diplome = $tab[7];
                        $specialite = $tab[8];
                        $option = $tab[9];
                        $img = $tab[10];
						$stage = $tab[11];
						if($mabase){
							$reqStage = "SELECT experience.titre,experience.entreprise,experience.lien FROM experience,education WHERE experience.formation=education.idEduc AND education.idEduc=$idEduc ORDER BY dateDebut DESC;";
							$resStage = mysqli_query($cnt,$reqStage);
						}
				
                        echo("<div class=\"cadre ");
                        if($statut=='Actuellement'){echo('actuel');};
                        echo("\">
                            <div class=\"cadre-date\">
                                <p>$date</p>
                            </div>
                            <div class=\"cadre-donnee\">
                                <div class=\"cadre_image\">
                                    <img src=\"$img\" alt=\"\">
                                </div>
                                <div class=\"cadre_info\">
                                    <div class=\"cadre_info_titre\">
                                        <h3>$nom, $lieu</h3>
                                    </div>
                                    <div class=\"cadre_info_detail\">");
                                        if($description){
                                            echo("<div class=\"cadre_info_detail_des\">
                                                <p>$description</p>
                                                </div>"
                                            );
                                        };
                                        if($diplome){
                                            echo("<div class=\"cadre_info_detail_spe\">
                                                        <p class=\"detail_cat\">Diplôme : </p>
                                                        <p>$diplome</p>
                                                    </div>"
                                            );
                                        };
                                        if($specialite){
                                            echo("<div class=\"cadre_info_detail_spe\">
                                                        <p class=\"detail_cat\">Spécialités : </p>
                                                        <p>$specialite</p>
                                                    </div>"
                                            );
                                        };
                                        if($option){
                                            echo("<div class=\"cadre_info_detail_spe\">
                                                    <p class=\"detail_cat\">Option : </p>
                                                    <p>$option</p>
                                                </div>"
                                            );
                                        };
                                        if($stage){
                                            echo("<div class=\"cadre_info_detail_spe\">
                                                    <p class=\"detail_cat\">Stage effectué : </p><div class=\"stage\">");
                                            While ($tab=mysqli_fetch_row($resStage)){
                                                $stageNom = $tab[0];
                                                $stageEntreprise = $tab[1];
                                                $stageLien = $tab[2];
                                                
                                                echo("<a href=\"$stageLien\">- $stageNom $stageEntreprise</a><br>");
                                            }
                                            echo("</div></div>");
                                        };
                                    echo("</div>
                                </div>
                            </div>
                        </div>");
                    }
                    echo("</div>");      
                }
            ?>
            </div>

            <div class="ecoleCL">
            <?php
                if($resCL){
                    echo("<h2>Collége / Lycée</h2>");
                    While ($tab=mysqli_fetch_row($resCL)){
						$idEduc = $tab[0];
                        $nom = $tab[1];
                        $lieu = $tab[2];
                        $type = $tab[3];
                        $description = $tab[4];
                        $date = $tab[5];
                        $statut = $tab[6];
                        $diplome = $tab[7];
                        $specialite = $tab[8];
                        $option = $tab[9];
                        $img = $tab[10];
						$stage = $tab[11];
						if($mabase){
							$reqStage = "SELECT experience.titre,experience.entreprise,experience.lien FROM experience,education WHERE experience.formation=education.idEduc AND experience.titre LIKE '%stage%' AND education.idEduc=$idEduc ORDER BY dateDebut DESC;";
							$resStage = mysqli_query($cnt,$reqStage);
						}
						
                        echo("<div class=\"list-cadre\">
                                <div class=\"cadre\">
                                    <div class=\"cadre-date\">
                                        <p>$date</p>
                                    </div>
                                    <div class=\"cadre-donnee\">
                                        <div class=\"cadre_image\">
                                            <img src=\"$img\" alt=\"\">
                                        </div>
                                        <div class=\"cadre_info\">
                                            <div class=\"cadre_info_titre\">
                                                <h3>$nom, $lieu</h3>
                                            </div>
                                            <div class=\"cadre_info_detail\">");
                                                if($description){
                                                    echo("<div class=\"cadre_info_detail_des\">
                                                        <p>$description</p>
                                                        </div>"
                                                    );
                                                };
                                                if($diplome){
                                                    echo("<div class=\"cadre_info_detail_spe\">
                                                                <p class=\"detail_cat\">Diplôme : </p>
                                                                <p>$diplome</p>
                                                            </div>"
                                                    );
                                                };
                                                if($specialite){
                                                    echo("<div class=\"cadre_info_detail_spe\">
                                                                <p class=\"detail_cat\">Spécialités : </p>
                                                                <p>$specialite</p>
                                                            </div>"
                                                    );
                                                };
                                                if($option){
                                                    echo("<div class=\"cadre_info_detail_spe\">
                                                            <p class=\"detail_cat\">Option : </p>
                                                            <p>$option</p>
                                                        </div>"
                                                    );
                                                };
												if($stage){
													echo("<div class=\"cadre_info_detail_spe\">
                                                            <p class=\"detail_cat\">Stage effectué : </p><div class=\"stage\">");
													While ($tab=mysqli_fetch_row($resStage)){
                        								$stageNom = $tab[0];
														$stageEntreprise = $tab[1];
														$stageLien = $tab[2];
														
														echo("<a href=\"$stageLien\">- $stageNom $stageEntreprise</a><br>");
													}
													echo("</div></div>");
                                                };
                                            echo("</div>
                                        </div>
                                    </div>
                                </div>
                            </div>");
                    }
                }
            ?>
            </div>

            <div class="ecoleMP">
            <?php
                if($resMP){
                    echo("<h2>Ecole maternelle / Primaire</h2>");
                    While ($tab=mysqli_fetch_row($resMP)){
						$idEduc = $tab[0];
                        $nom = $tab[1];
                        $lieu = $tab[2];
                        $type = $tab[3];
                        $description = $tab[4];
                        $date = $tab[5];
                        $statut = $tab[6];
                        $diplome = $tab[7];
                        $specialite = $tab[8];
                        $option = $tab[9];
                        $img = $tab[10];
						$stage = $tab[11];
						if($mabase){
							$reqStage = "SELECT experience.titre,experience.entreprise,experience.lien FROM experience,education WHERE experience.formation=education.idEduc AND education.idEduc=$idEduc ORDER BY dateDebut DESC;";
							$resStage = mysqli_query($cnt,$reqStage);
						}
						
                        echo("<div class=\"list-cadre\">
                                <div class=\"cadre\">
                                    <div class=\"cadre-date\">
                                        <p>$date</p>
                                    </div>
                                    <div class=\"cadre-donnee\">
                                        <div class=\"cadre_image\">
                                            <img src=\"$img\" alt=\"\">
                                        </div>
                                        <div class=\"cadre_info\">
                                            <div class=\"cadre_info_titre\">
                                                <h3>$nom, $lieu</h3>
                                            </div>
                                            <div class=\"cadre_info_detail\">");
                                                if($description){
                                                    echo("<div class=\"cadre_info_detail_des\">
                                                        <p>$description</p>
                                                        </div>"
                                                    );
                                                };
                                                if($diplome){
                                                    echo("<div class=\"cadre_info_detail_spe\">
                                                                <p class=\"detail_cat\">Diplôme : </p>
                                                                <p>$diplome</p>
                                                            </div>"
                                                    );
                                                };
                                                if($specialite){
                                                    echo("<div class=\"cadre_info_detail_spe\">
                                                                <p class=\"detail_cat\">Spécialités : </p>
                                                                <p>$specialite</p>
                                                            </div>"
                                                    );
                                                };
                                                if($option){
                                                    echo("<div class=\"cadre_info_detail_spe\">
                                                            <p class=\"detail_cat\">Option : </p>
                                                            <p>$option</p>
                                                        </div>"
                                                    );
                                                };
												if($stage){
													echo("<div class=\"cadre_info_detail_spe\">
                                                            <p class=\"detail_cat\">Stage effectué : </p><div class=\"stage\">");
													While ($tab=mysqli_fetch_row($resStage)){
                        								$stageNom = $tab[0];
														$stageEntreprise = $tab[1];
														$stageLien = $tab[2];
														
														echo("<a href=\"$stageLien\">- $stageNom $stageEntreprise</a>");
													}
													echo("</div></div>");
                                                };
                                            echo("</div>
                                        </div>
                                    </div>
                                </div>
                            </div>");
                    }
                }
            ?>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <?php include 'footer.php'; ?>

    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/mode_sombre.js"></script>
</body>
</html>