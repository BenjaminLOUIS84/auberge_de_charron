// --- GESTION DU SCROLL ---
window.onscroll = function () { scrollFunction() };

function scrollFunction() {
  // On détecte si on est sur la page d'accueil ou une autre page (comme la boutique)
  const estAccueil = document.querySelector('.accueil') !== null;
  // Si c'est l'accueil, on garde ton seuil de 1160px, sinon (boutique) un seuil plus court de 50px suffit
  const seuilScroll = estAccueil ? 1160 : 50;

  if (document.body.scrollTop > seuilScroll || document.documentElement.scrollTop > seuilScroll) {
    document.getElementById("wrapper").style.top = "-150px";
  } else {
    document.getElementById("wrapper").style.top = "0";
  }
}

// --- GESTION DE LA TRADUCTION AUTOMATIQUE (AMÉLIORÉE) ---
const languageSelector = document.getElementById('language-selector');
if (languageSelector) {
  languageSelector.addEventListener('change', (event) => {
    const selectedLanguage = event.target.value;
   
    // Au lieu de chercher les ID, on cherche TOUS les éléments qui ont un attribut data-fr ou data-en
    document.querySelectorAll('[data-fr]').forEach(element => {
      if (element.dataset[selectedLanguage]) {
        element.textContent = element.dataset[selectedLanguage];
      }
    });
  });
}

// --- HORLOGE ---
function rafraichirHorloge() {
  const date = new Date();
  const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
  const dateString = date.toLocaleDateString('fr-FR', options);
  const timeString = date.toLocaleTimeString('fr-FR');
  const horlogeEl = document.getElementById('horloge');
  if (horlogeEl) {
    horlogeEl.textContent = `${dateString} ${timeString}`;
  }
}
rafraichirHorloge();
setInterval(rafraichirHorloge, 1000);

 