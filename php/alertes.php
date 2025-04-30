<?php
include 'config.php';

if($mabase){
    $req= "SELECT * 
        FROM alertes 
        WHERE affichage = 1 
        AND (date_debut <= NOW() AND date_fin >= NOW() OR date_fin IS NULL)
        ORDER BY priorite ASC, date_debut DESC 
        LIMIT 1;";
    $resAlerte = mysqli_query($cnt,$req);
    while ($tab = mysqli_fetch_row($resAlerte)) {
        if ($resAlerte->num_rows > 0) {
            $idAlerte = $tab[0];
            $typeAlerte = $tab[1];
            $messageAlerte = $tab[2];
            $prioriteAlerte = $tab[6];
            $lienAlerte = $tab[7];

            switch($typeAlerte){
                case "Information" :
                    echo("<div class=\"popup p-inf\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" x=\"0px\" y=\"0px\" width=\"30\" height=\"30\" viewBox=\"0,0,256,256\">
                            <g fill=\"#ffffff\" fill-rule=\"nonzero\" stroke=\"none\" stroke-width=\"1\" stroke-linecap=\"butt\" stroke-linejoin=\"miter\" stroke-miterlimit=\"10\" stroke-dasharray=\"\" stroke-dashoffset=\"0\" font-family=\"none\" font-weight=\"none\" font-size=\"none\" text-anchor=\"none\" style=\"mix-blend-mode: normal\"><g transform=\"scale(8.53333,8.53333)\"><path d=\"M15,3c-6.627,0 -12,5.373 -12,12c0,6.627 5.373,12 12,12c6.627,0 12,-5.373 12,-12c0,-6.627 -5.373,-12 -12,-12zM16,21h-2v-7h2zM15,11.5c-0.828,0 -1.5,-0.672 -1.5,-1.5c0,-0.828 0.672,-1.5 1.5,-1.5c0.828,0 1.5,0.672 1.5,1.5c0,0.828 -0.672,1.5 -1.5,1.5z\"></path></g></g>
                            </svg>
                            <p>$messageAlerte</p>
                        </div>");
                    break;
                
                case "Update" :
                    echo("<div class=\"popup p-upd\">
                        <p>$messageAlerte <a href=\"$lienAlerte\">En savoir plus</a></p>
                        </div>");
                    break;

                case "Maintenance" :
                    echo("<div class=\"popup p-mai\">
                        <p>$messageAlerte <a href=\"$lienAlerte\">Note de version</a></p>
                        </div>");
                    break;

                case "Probleme" :
                    echo("<div class=\"popup p-pro\">
                        <p>$messageAlerte</p>
                        </div>");
                    break;
            }
        }
    }
}