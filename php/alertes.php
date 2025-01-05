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
                    echo("<div class=\"popup\">");
                    echo("<p>$messageAlerte</p>");
                    echo("</div>");
                    break;
                
                case "Update" :
                    echo("<div class=\"popup\">");
                    echo("<p>$messageAlerte <a href=\"$lienAlerte\">Note de version</a></p>");
                    echo("</div>");
                    break;
            }
        }
    }
}