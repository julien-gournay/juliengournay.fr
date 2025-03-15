/*function openTab(x) {
    let contents = document.querySelectorAll(".tab-content");
    let btns = document.querySelectorAll(".nav-portfolio button"); // Assurez-vous que les boutons sont bien ciblés
  
    for (let i = 0; i < contents.length; i++) {
      contents[i].style.display = "none";
      btns[i].classList.remove("active");
    }
  
    contents[x].style.display = "block";
    btns[x].classList.add("active");
  
    // Ajout d'un console.log pour vérifier les indices
    console.log("Clicked button index:", x);
    console.log("Selected content:", contents[x]);
  }*/

// Fonction pour ouvrir un onglet spécifique
function openTab(x) {
  let contents = document.querySelectorAll(".tab-content");
  let btns = document.querySelectorAll(".nav-portfolio button");

  for (let i = 0; i < contents.length; i++) {
    contents[i].style.display = "none";
    btns[i].classList.remove("active");
  }

  contents[x].style.display = "block";
  btns[x].classList.add("active");
}

// Ajouter des écouteurs d'événements pour tous les boutons
document.querySelectorAll(".nav-portfolio button").forEach((button, index) => {
  button.addEventListener("click", () => openTab(index));
});