<?php
// Récupérer le nom du fichier PHP en cours
$currentPage = basename($_SERVER['PHP_SELF']);

// Fonction pour ajouter la classe active à un élément de menu
function addActiveClass($page, $current) {
    return ($page == $current) ? 'active' : '';
}
?>

<nav class="navbar">
    <a href="index.php"><img src="img/logoName_s.png" id="logoName"></a>
    <i class='bx bx-menu' id="menuIcon"></i>
    <div class="nav-links">
        <i class='bx bx-x' id="closeMenu"></i>
        <ul>
            <li class="<?php echo addActiveClass('index.php', $currentPage); ?>">
                <a href="index.php"><i class='bx bx-home-alt-2'></i>Home</a>
            </li>
            <li class="<?php echo addActiveClass('education.php', $currentPage); ?>">
                <a href="education.php"><i class='bx bx-map-alt'></i>Éducation</a>
            </li>
            <li class="<?php echo addActiveClass('experience.php', $currentPage); ?>">
                <a href="experience.php"><i class='bx bx-calendar-check'></i>Expérience</a>
            </li>
            <li class="<?php echo addActiveClass('portfolio.php', $currentPage); ?>">
                <a href="portfolio2.php"><i class='bx bx-calendar-plus'></i>Portfolio</a>
            </li>
            <li class="<?php echo addActiveClass('btssio.php', $currentPage); ?>">
                <a href="btssio.php"><i class='bx bx-calendar-plus'></i>BTS SIO</a>
            </li>
            <li class="<?php echo addActiveClass('contact.php', $currentPage); ?>">
                <a href="contact.php"><i class='bx bx-calendar-plus'></i>Contact</a>
            </li>
        </ul>

        <div class="navright">
            <button onclick="location.href='./cv.html'" class="button_cv">Mon CV</button>
        </div>
    </div>
</nav>
<script src="js/navbar.js"></script>