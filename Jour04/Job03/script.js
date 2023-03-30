const button = document.querySelector('#button');
const p = document.querySelector('p');

// FUNCTION FILTRER
function filtrer() {
  // Récupérer les valeurs des champs du formulaire
  const id = document.getElementById('id').value.trim().toLowerCase();
  const nom = document.getElementById('nom').value.trim().toLowerCase();
  const type = document.getElementById('type').value;

  // Charger les données depuis le fichier JSON (voir ci-dessus)
  fetch('pokemon.json')
    .then(response => response.json())
    .then(data => {
      // La fonction filter parcourt chaque élément du tableau data et exécute une fonction de rappel 
      // (callback) fournie en argument.
      // La fonction de rappel prend un élément pokemon comme argument et renvoie un booléen qui indique si l'élément doit être
      // conservé (true) ou rejeté (false) dans le nouveau tableau filtré.
      const filteredData = data.filter(pokemon => {
        if (id && !pokemon.id.toString().toLowerCase().includes(id)) {
          return false;
        }
        if (nom && !pokemon.name.french.toLowerCase().includes(nom)) {
          return false;
        }
        if (type && !pokemon.type.includes(type)) {
          return false;
        }
        return true;
      });

      // Afficher le résultat dans la page
      const resultDiv = document.getElementById('result');
      resultDiv.innerHTML = '';

      if (filteredData.length === 0) {
        resultDiv.innerHTML = 'Aucun résultat';
      } else {
        filteredData.forEach(pokemon => {
          const pokemonDiv = document.createElement('div');
          pokemonDiv.textContent = `${pokemon.id} - ${pokemon.name.french} (${pokemon.type.join(', ')})`;
          resultDiv.appendChild(pokemonDiv);
        });
      }
    });
}