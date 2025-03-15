const themeToggleBtn = document.getElementById('theme-toggle');
var icon = document.getElementById("icon");
var logo = document.getElementById("logoName");
const body = document.body;
let isDarkMode = false;

// Récupérer le mode enregistré dans le localStorage (si existant)
var savedMode = localStorage.getItem('themeMode');

// Si un mode a été enregistré, l'appliquer au chargement de la page
if (savedMode !== null) {
    isDarkMode = savedMode === 'dark';
    body.classList.toggle("dark-theme", isDarkMode);
    updateTheme();
}

icon.onclick = function() {
    isDarkMode = !isDarkMode;
    body.classList.toggle("dark-theme");
    localStorage.setItem('themeMode', isDarkMode ? 'dark' : 'light');
    updateTheme();
};
function updateTheme() {
    icon.src = isDarkMode ? "img/sun.png" : "img/moon.png";
    logo.src = isDarkMode ? "img/logoName.png" : "img/logoName_s.png";
    //document.getElementById("logosvg1").style.filter = isDarkMode ? "invert(99%) sepia(72%) saturate(0%) hue-rotate(317deg) brightness(108%) contrast(101%)" : "invert(0%) sepia(93%) saturate(0%) hue-rotate(21deg) brightness(100%) contrast(103%)";
    //document.getElementById("logosvg2").style.filter = isDarkMode ? "invert(99%) sepia(72%) saturate(0%) hue-rotate(317deg) brightness(108%) contrast(101%)" : "invert(0%) sepia(93%) saturate(0%) hue-rotate(21deg) brightness(100%) contrast(103%)";
    //document.getElementById("logosvg3").style.filter = isDarkMode ? "invert(99%) sepia(72%) saturate(0%) hue-rotate(317deg) brightness(108%) contrast(101%)" : "invert(0%) sepia(93%) saturate(0%) hue-rotate(21deg) brightness(100%) contrast(103%)";
    //document.getElementById("logosvg4").style.filter = isDarkMode ? "invert(99%) sepia(72%) saturate(0%) hue-rotate(317deg) brightness(108%) contrast(101%)" : "invert(0%) sepia(93%) saturate(0%) hue-rotate(21deg) brightness(100%) contrast(103%)";
    //document.getElementById("logosvgfooter").style.filter = isDarkMode ? "invert(99%) sepia(72%) saturate(0%) hue-rotate(317deg) brightness(108%) contrast(101%)" : "invert(99%) sepia(72%) saturate(0%) hue-rotate(317deg) brightness(108%) contrast(101%)";
    //document.getElementById("logosvg6").style.filter = isDarkMode ? "invert(99%) sepia(72%) saturate(0%) hue-rotate(317deg) brightness(108%) contrast(101%)" : "invert(99%) sepia(72%) saturate(0%) hue-rotate(317deg) brightness(108%) contrast(101%)";
    //document.getElementById("logosvg7").style.filter = isDarkMode ? "invert(99%) sepia(72%) saturate(0%) hue-rotate(317deg) brightness(108%) contrast(101%)" : "invert(99%) sepia(72%) saturate(0%) hue-rotate(317deg) brightness(108%) contrast(101%)";
    //document.getElementById("footer-icon3").style.filter =isDarkMode ? "" : "invert(0%) sepia(93%) saturate(0%) hue-rotate(21deg) brightness(100%) contrast(103%)";
}