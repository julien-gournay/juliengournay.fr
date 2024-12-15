<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include 'head.php'; ?>
    <title>Download - Julien Gournay</title>

    <link rel="stylesheet" type="text/css" href="css/document.css">

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
            <h1>DOCUMENTS</h1>
        </div>
        <a href="#sec-2">
            <div class="scroll-down"></div>   
        </a>
    </section>

    <section id="sec-2">
        <div>
            <form action="">
                
            </form>
        </div>
        <div>
            <table>
                <thead>
                    <tr>
                        <th scope="col">Type</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Description</th>
						<th scope="col">Format</th>
                        <th scope="col">Taille</th>
                        <th scope="col">Date création</th>
                        <th scope="col">Date modification</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        // CONNEXION BDD
                        include 'php/config.php';
                    
                        if($mabase){
                            $req = "SELECT * FROM document ORDER BY datePub DESC";
                            $res = mysqli_query($cnt,$req);
                        }
                        $nb = 0;
                        While ($tab=mysqli_fetch_row($res)){
                            $titre = $tab[1];
                            $description = $tab[2];
                            $type = $tab[3];
                            $format = $tab[4];
                            $taille = $tab[5];
                            $lien = $tab[6];
                            $dpub = $tab[7];
                            $dmaj = $tab[8];
                            echo("<tr>
                                <td>");
                                    if($format == "PDF"){echo("<img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAACIklEQVR4nO3Xz0sUYRzH8flX/EWidkihgymeBDt4dbRskTLBxENkIBGUEGR2i4oQC0IXL+IhCnQR0VsImh6ENsNCyeUxYoksf637jseHddLFIvN5dh96PjDM7GHh+5r5PvN9xvNcXPQGPxctR11Ot7WAZOsZcwg0ALbfzpK8UmEGoQUgYuYQ6AKYQqATIAwgtAOEZoQRgNCIMAYQmhBGAUIDwjhA7EdkJeBvDs8BfPcEsK+F7oRgZRF+rEG420LAlxh7Se5Aa7lFgEulQfHzr9W557JFgPMnYCehCl9+ZyHAz4UP80H7yHTWWgYI3wvaKJGAULFlgOYy2NpQgPdzRy6ejE7imXEFiE5DfZ5lgIYCiK8GbdR308JBJrO9tXvaHWjtVRYBJoZU4cMPYSqirmMfoeW0BYDmMtj4rmZBWyVcPAXLCwqx8EY9nWe3YeQ5jA1CJAyPrsG5giwBDD1QxcpFLH931EBkgD9mcjgLAE0n4VtcFRSdAbG0v8jUmkhlZRGWoup6cz3DALmFeNmXfmdl+7zoha4GaCxUQ04u6oOZncwQoD4fem/A509BMbJA2d+HbSHkhu9xB7x6CqP96v+hkgwArlarhflr5OSVrXSUt5dvEnCrDta+pvf49bPHVjzaAHLSplomLoJd5+D9Yy0ebYALRelvFDm8/mHPg/EWetKp7r78fOy/e+ggyl6Ab+bwHMB3TwDXQv91C7m4eL/NT9rWaYTkzttuAAAAAElFTkSuQmCC\">");}
                                    if($format == "XLSX"){echo("<img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAAB0ElEQVR4nO2W7StDURzH7591W4iIouZh5YWUv0DJQ6slGW8oXQ8z5VlKXli2LPZGYi/khZLsQdpGLA6zLXFb28xPbu2XOyWsc5zV+davzv2dN9/P+X3vPVeShIToSlbKgFKNlCyAcb6ZHYRMAcB374emBRMbCBoARL1nByFTAmAGIVMEICwgaAMQ2hAsAAhNCFYAhBYESwBCA4I1ACmA4BLgNyUJAEVMAESEipGIkCIiVJx+eoJLRysQJOda7V3s6/a6nX24FyABaJxv4e8eaF1ug2wuC3l1bfbgXoAEse/2bfN7kW2cONDo2a1P6/W6zNhLZVO/On2ZNUDtTD08pZ7QcKejC/x3AXyeO1zg/1fCdmBHw7HnGK4fnh+gcqqGf4DyySq4Tt5Aoaye4T/dyBJrgI+a2J/SmU+oCTCMV5QGgGG8AkKx8JcJmLcspQEwujuGpl/SL7iOJqNavLgGqJ6ug7gaR9MWdz+EP03D5rXzDbB2vI5mw48RLU4DO1bsqWkVGmaNfAKYFlsh85rRnX7+nbiKX2HfeeriE+Ag5EWTkcdL3Vdn0DOEe7m3HLSvdvAHIFMqSQAoYgIgIlSMRIQUEaHiJCKk/HOEhISkb/UOpOEWFDl3nRkAAAAASUVORK5CYII=\">");}
                                    if($format == "DOCS"){echo("<img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAACMUlEQVR4nGNgGAWjgLZAsuzSf1pgibJLHUPWA0atN+jnCUkaeOD0kx//Tdro5AlJGnjg8ae/9POEJI08QDdPSNLQA4/p4Qlae+AxrT1BDw88pqUn6OWBx7TyBD098JgWnqC3Bx6jeWJQeoAUzDDqgbLRGPg/moQoAaNJqGw0CVEGCIXgvmvv/5998AmMDVuuwcVXnHoDFjtx9+N/2YrLcPE9V7GrlxyoegDkoF+/foFxzNx7YDG5ysv/P3/7CRd3nXALLK7VcBUu9ubT9//S5YOgIuve+QzuqPbtz8BiXpNvw8VAuGLtY7B4yIy7cLG9194Pjpo4dt49uKM2nH8LFqve8ATFA6tOvwGL125EiPfuejY4PKDTeA3uqFvPv4DF1px5g+KBOy+/gsWXnXwNFwN5XHIweACE7778CnbUj5+//ivXXAE7GMT/+h2RD/Sarv0/9+ATnG/QfG3weGDd2bcoIQtjI4d48sL7/79AM/aD198GV2u0Dilt77j8Ds52m3Dr/8evPzDEYXlFcrB4wHcqotT5/uMnSjF58OYHFHEQbtz8dHB5QLH6Ckp6B+FdV96B5XqQilkYDpx+Z3B5QLLs0v/zDxEZFLlOiJyDyBOwjK5ae2XweWDekVcoDg2eAQlltborKMnn0uPPRDtekp4eyFvxEO7Ibz9+/lepQYTyhYef4XKLjr0anB6QpBFmGPVA2WgM/B9NQpSA0SRUNpqEKAOjSahsgJPQKBgFDHgBAJeSBw0Mc0kLAAAAAElFTkSuQmCC\">");}
                                    if($format == "TXT"){echo("<img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAACMUlEQVR4nGNgGAWjgLZAsuzSf1pgibJLHUPWA0atN+jnCUkaeOD0kx//Tdro5AlJGnjg8ae/9POEJI08QDdPSNLQA4/p4Qlae+AxrT1BDw88pqUn6OWBx7TyBD098JgWnqC3Bx6jeWJQeoAUzDDqgbLRGPg/moQoAaNJqGw0CVEGCIXgvmvv/5998AmMDVuuwcVXnHoDFjtx9+N/2YrLcPE9V7GrlxyoegDkoF+/foFxzNx7YDG5ysv/P3/7CRd3nXALLK7VcBUu9ubT9//S5YOgIuve+QzuqPbtz8BiXpNvw8VAuGLtY7B4yIy7cLG9194Pjpo4dt49uKM2nH8LFqve8ATFA6tOvwGL125EiPfuejY4PKDTeA3uqFvPv4DF1px5g+KBOy+/gsWXnXwNFwN5XHIweACE7778CnbUj5+//ivXXAE7GMT/+h2RD/Sarv0/9+ATnG/QfG3weGDd2bcoIQtjI4d48sL7/79AM/aD198GV2u0Dilt77j8Ds52m3Dr/8evPzDEYXlFcrB4wHcqotT5/uMnSjF58OYHFHEQbtz8dHB5QLH6Ckp6B+FdV96B5XqQilkYDpx+Z3B5QLLs0v/zDxEZFLlOiJyDyBOwjK5ae2XweWDekVcoDg2eAQlltborKMnn0uPPRDtekp4eyFvxEO7Ibz9+/lepQYTyhYef4XKLjr0anB6QpBFmGPVA2WgM/B9NQpSA0SRUNpqEKAOjSahsgJPQKBgFDHgBAJeSBw0Mc0kLAAAAAElFTkSuQmCC\">");}
                                    if($format == "CSV"){echo("<img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAAB10lEQVR4nGNgGAWjgPZgV8aJ/7TAO9NPdAxZDxysOEc/T9DCA2+uffh/sJJOnqCFBz4//Uo/T9DKA5/p5QlaeuAzPTxBaw98prUn6OGBz7T0BL088JlWnqCnBz7TwhP09sBnNE8MSg+QghlGPZAxGgP/R5MQJWA0CWWMJiHKwLBMQmWmi/8HSk3AiueH7PwfrzwdzJ7ivRmsfrrfVjA/WnHa/4Whu3HqLTZeRB8PtDis/p+hPed/ouqM/14iPf8DJSeA+SC8NHLv/06XdWDxNM3ZYPXZOnPB/FaH1f9XRu+Hqw2Q7AeLJ6nNBPOb7FbRtyZeELoL7gBk8W2pR/8HS0/47y3S839e0M7/3qI9YMduTjqCoi4RGgALQ3cNTFMClwfAsWS/GiwXIj0RTNfbrMBQkziYPbA5+Qg4aYHk/cT6/q9PODS0PLAp6cj/AIk+sLyvWO//9fFDzAONtqtQklCt1fKh44GtqUf/B0lPhGTiYEgm9hfv/78x6fDQ8ECb4xqweLrWHDA/W3cemI9eTCYORg9sTzv+P1R2Elh8ktcmeEUG4gdJTfi/NeXo4PHALjpghlEPZIzGwP/RJEQJGE1CGaNJiDIwmoQyRpPQCE9Co2AUMOAEAJwwiBR+LIQRAAAAAElFTkSuQmCC\">");}
                                    if($format == "PPT"){echo("<img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAAC1klEQVR4nO2WbU8TQRDHDxBRiYVEQyRGooRgEINR1KiJCQr4QNtvQKkgQWlBigUKai0l1bZYQqVVGkGaFnxoKfjQ9t7pV/Ar3FvjK/0CY2YOaqsEos2umuwkm97M3N3u7/Y/s5UkYcLYml5OAIuhSyc8/y2A8UOKH4SeAcCnL5+h82OaDwQLAOXbV34QekYA3CD0DAEUHhCsARTWEDwAFJYQvAAUVhA8ARQWELwBlJ8g/kmA3xmSAJDFDoCQUD4mJCQLCeVnm37B9DJcefdq0yLdKq//W+fAsdAUlFi6Qepth23916DKfRe0ybj6F0BOQM2Uk+KY3zHYDY3zfsodeHgHim91wmH/g8y7GudnKFY22scH4Gx0FiSTgSbFBe0eMdFCa/0uytcHPeSXDt0gsCKzEQpMHXAhHoaGkI9ye+yWzPsOeu0Uw18uAPtdNprw+LNp8ltXF8nfZe0hv2LcSv7pcJD8Q5P3yT8S8EDLSpSui/qMoE0tU15jM+fczxwAtxonbIot5EiqYdZH8qly36P8PucwXH778pfnNWs7dv7FHFx9/xoKTAbapbZkjA/Azts9tIDmRHTD+sA46h7vKR7ogtppV87ianxOytUHvXAm8pSuKxxWfkW8FQCOS2+WoHrSQV8W78Vd06bUIj8XDVGscmKE4PD66BMvP4CyUVWzTbFwJnby+WPqJiih5kSEBsZbVhZBY1Mlc2JOrRnUPnaoEst12GsfpNzF5Qg/gMoJtYhxwdlFjLJBH7sT+q2rS+RXP3KQXxdwZ71jmGLYnUqHbvI9B04tBGhyPAew9ZWPqUWNC81ui+Vj/aT37QNd5KN0sote6m1fe26c/0GGLXH9oCo0G+g8wI6CubZUjDpRobkj0zLrZn58/cyumQyUx0LmDrCuZVyILh3fOJ+Mk4x0abXf/8mQWALwGJIAkMUOgJBQPiYkJAsJ5WdCQrKQkDBhEkP7DpsEYDa6aelNAAAAAElFTkSuQmCC\">");}
                                    if($format == "ZIP"){echo("<img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAABnUlEQVR4nO2XPUtDMRSGI0I3h4KIIIiD4OQvUEfRRXASXdxcXAQXFzcX0cXYQqu2XPyoQ630Q0FFHEQFQVCQYrGWNv/klesZ6sVWK5ckrZ4XDuSEM5zn5s1NIgSLpVeQAlpiQ6y2LsBOlzkI6AAoxIFYtxkILQAqZw4CugBMQUAngDIAoR1AaYYwAqA0QhgDUJogjAIoDRDGAZQXojkBfhGCASSvANhCfsQWkmwhf/rbFno7rB2ZUcDppfHjGtWeTnpr8lHgchYIBSwCPKx4o5Klq0BiEHD6aPwcotqzKcpfYlRbcCi/nm+Skzg1Qg3dL1NeD8D96m6+FQTKaaCSBjbbLQOEA3QBc5uJ9zQG4MbrAc1Fg5YBzqepkau56lw9gJsFYLcfyIxTXtwHZJtFgO1OoJQEigkg0vEzwOcoHwOpYct74HaRmjmZ8M7XA3haJxtlx6oPF2sAewOAygL5yNeN2MgekLbPAfcf/9FkGLhbqsbRUIsAlJK1n4QXMy0CIPWHYADJKwC2kB+xhSRbyJ/YQpIt9M8txGKJb/UOJFOCiMRgcS0AAAAASUVORK5CYII=\">");}
                                    echo("</td>
                                <td scope=\"row\"><a href=$lien>$titre</a></td>
                                <td>$description</td>
							    <td>");
                                    switch($type) {
                                        case 0 :echo("CV"); break;
                                        case 1 :echo("Rapport"); break;
                                        case 2 :echo("Synthèse"); break;
                                    }
							    echo("</td>
                                <td>$taille</td>
                                <td>$dpub</td>
                                
                                <td>");
                                    if($dmaj != "0000-00-00"){echo("$dmaj");}
                                    if($dmaj == "0000-00-00"){echo("Aucune modification");}
                                echo("</td>
                            </tr>");
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </section>

    <!-- FOOTER -->
    <?php include 'footer.php'; ?>

</body>
</html>