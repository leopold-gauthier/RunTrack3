document.addEventListener("DOMContentLoaded", () =>{

// Récupération de l'élément textarea avec l'ID "keylogger"
var textarea = document.getElementById("keylogger");

// Ajout d'un écouteur d'événements sur le document pour capturer les saisies du clavier
document.addEventListener("keydown", function(event) {
  // Vérification que la touche pressée est une lettre de l'alphabet (a-z)
  if (/^[a-zA-Z]$/.test(event.key)) {
    // Si le focus est sur le textarea, on ajoute la lettre deux fois
    if (document.activeElement === textarea) {
      textarea.value += event.key;
    } else {
      // Sinon, on ajoute la lettre une seule fois
      textarea.value += event.key;
    }
  }
});
})