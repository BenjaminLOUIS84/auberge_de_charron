window.onscroll = function () { scrollFunction() };

function scrollFunction() {

  if (document.body.scrollTop > 1160 || document.documentElement.scrollTop > 1160) {
    document.getElementById("wrapper").style.top = "-150px";
  } else {
    document.getElementById("wrapper").style.top = "0";
  }

}

const languageSelector = document.getElementById('language-selector');
languageSelector.addEventListener('change', (event) => {
  const selectedLanguage = event.target.value;
  document.querySelectorAll('[id]').forEach(element => {
    if (element.dataset[selectedLanguage]) {
      element.textContent = element.dataset[selectedLanguage];
    }
  });
});


function rafraichirHorloge() {
  
const date = new Date();
const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
const dateString = date.toLocaleDateString('fr-FR', options);
const timeString = date.toLocaleTimeString('fr-FR');
document.getElementById('horloge').textContent = `${dateString} ${timeString}`;
}
rafraichirHorloge();
setInterval(rafraichirHorloge, 1000);
