// ----- Sommaire sticky : mise en avant de la section visible -----
document.addEventListener('DOMContentLoaded', function () {
    var sommaire = document.getElementById('sommaire');
    if (!sommaire) return;

    var liens = Array.prototype.slice.call(sommaire.querySelectorAll('.sommaire-lien'));
    var sections = liens
        .map(function (lien) {
            return document.getElementById(lien.dataset.target);
        })
        .filter(Boolean);

    if (!sections.length) return;

    // Aligne l'atterrissage des ancres sur la vraie hauteur du sommaire
    // (fixe et sensiblement plus grande que le sommaire réel sur mobile,
    // ce qui laissait un grand vide entre le sommaire et le titre de section).
    function majHauteurSommaire() {
        document.documentElement.style.setProperty('--sommaire-height', sommaire.offsetHeight + 'px');
    }
    majHauteurSommaire();
    window.addEventListener('resize', majHauteurSommaire);

    var activeId = null;

    function setActive(id) {
        if (id === activeId) return;
        activeId = id;
        liens.forEach(function (lien) {
            lien.classList.toggle('active', lien.dataset.target === id);
        });
        var lienActif = sommaire.querySelector('.sommaire-lien.active');
        if (lienActif) {
            lienActif.scrollIntoView({ behavior: 'smooth', inline: 'center', block: 'nearest' });
        }
    }

    // La section active est celle dont le haut vient de passer sous le sommaire
    // (et non celle qui atteint le milieu de l'écran) : la mise en avant colle
    // ainsi au contenu réellement visible, y compris sur mobile où les sections
    // sont plus courtes.
    function sectionActive() {
        var limite = sommaire.offsetHeight + 16;
        var courante = sections[0];
        for (var i = 0; i < sections.length; i++) {
            if (sections[i].getBoundingClientRect().top - limite <= 0) {
                courante = sections[i];
            } else {
                break;
            }
        }
        return courante.id;
    }

    var ticking = false;
    function majActive() {
        setActive(sectionActive());
        ticking = false;
    }
    function onScroll() {
        if (!ticking) {
            window.requestAnimationFrame(majActive);
            ticking = true;
        }
    }

    window.addEventListener('scroll', onScroll);
    window.addEventListener('resize', onScroll);
    majActive();
});

// ----- Bouton retour en haut -----
document.addEventListener('DOMContentLoaded', function () {
    var bouton = document.getElementById('back-to-top');
    if (!bouton) return;

    var seuil = 400;
    var ticking = false;

    function majVisibilite() {
        bouton.classList.toggle('visible', window.scrollY > seuil);
        ticking = false;
    }

    window.addEventListener('scroll', function () {
        if (!ticking) {
            window.requestAnimationFrame(majVisibilite);
            ticking = true;
        }
    });
    majVisibilite();

    bouton.addEventListener('click', function () {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
});
