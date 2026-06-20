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

// // --- GESTION DE LA TRADUCTION AUTOMATIQUE (AMÉLIORÉE) ---
// const languageSelector = document.getElementById('language-selector');
// if (languageSelector) {
//   languageSelector.addEventListener('change', (event) => {
//     const selectedLanguage = event.target.value;
   
//     // Au lieu de chercher les ID, on cherche TOUS les éléments qui ont un attribut data-fr ou data-en
//     document.querySelectorAll('[data-fr]').forEach(element => {
//       if (element.dataset[selectedLanguage]) {
//         element.textContent = element.dataset[selectedLanguage];
//       }
//     });
//   });
// }

const languageSelector = document.getElementById('language-selector');

// Fonction isolée pour traduire tous les éléments de la page
function traduirePage(langue) {
  document.querySelectorAll('[data-fr]').forEach(element => {
    if (element.dataset[langue]) {
      element.textContent = element.dataset[langue];
    }
  });
}

if (languageSelector) {
  // Écoute le changement manuel du sélecteur
  languageSelector.addEventListener('change', (event) => {
    const selectedLanguage = event.target.value;
    localStorage.setItem('site-langue', selectedLanguage); // On mémorise le choix du client
    traduirePage(selectedLanguage);
  });

  // MAGIE : Au chargement de la page, on vérifie si l'utilisateur avait choisi "EN" sur la page précédente
  const langueEnregistree = localStorage.getItem('site-langue') || 'fr';
  languageSelector.value = langueEnregistree;
  traduirePage(langueEnregistree);
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

// On sélectionne TOUS les conteneurs de carrousel de la page
const carousels = document.querySelectorAll('.carousel-container');

carousels.forEach(carousel => {
  // Pour CHAQUE carrousel, on trouve sa piste et ses boutons spécifiques
  const track = carousel.querySelector('.carousel-track');
  const nextBtn = carousel.querySelector('.carousel-btn.next');
  const prevBtn = carousel.querySelector('.carousel-btn.prev');

  // Sécurité : on vérifie que les boutons existent bien dans ce carrousel
  if (nextBtn && prevBtn && track) {
    nextBtn.addEventListener('click', () => {
      track.scrollBy({ left: track.clientWidth, behavior: 'smooth' });
    });

    prevBtn.addEventListener('click', () => {
      track.scrollBy({ left: -track.clientWidth, behavior: 'smooth' });
    });
  }
});


// 1. On récupère l'email s'il est présent dans l'URL de la boutique
const urlParams = new URLSearchParams(window.location.search);
const emailClient = urlParams.get('email');

// 2. Si un email est trouvé, on l'ajoute aux boutons de validation
if (emailClient) {
    document.querySelectorAll('a[href^="validation-commande.php"]').forEach(bouton => {
        let hrefActuel = bouton.getAttribute('href');
        // On ajoute &email=... au bout du lien existant
        bouton.setAttribute('href', hrefActuel + '&email=' + encodeURIComponent(emailClient));
    });
}

 