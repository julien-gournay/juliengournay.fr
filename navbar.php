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
    <div class="nav-links">
        <ul>
            <li class="<?php echo addActiveClass('index.php', $currentPage); ?>"><a href="index.php">Home</a></li>
            <li class="<?php echo addActiveClass('education.php', $currentPage); ?>"><a href="education.php">Éducation</a></li>
            <li class="<?php echo addActiveClass('experience.php', $currentPage); ?>"><a href="experience.php">Expérience</a></li>
            <li class="<?php echo addActiveClass('portfolio.php', $currentPage); ?>"><a href="portfolio.php">Portfolio</a></li>
            <li class="<?php echo addActiveClass('btssio.php', $currentPage); ?>"><a href="btssio.php">BTS SIO</a></li>
            <li class="<?php echo addActiveClass('contact.php', $currentPage); ?>"><a href="contact.php">Contact</a></li>
        </ul>
    </div>
    <div class="navright">
        <button onclick="location.href='./cv.html'" class="button_cv">Mon CV</button>
        <button id="theme-toggle">
            <img id="icon" src="img/moon.png" alt="Basculer le thème">
        </button>
    </div>
</nav>