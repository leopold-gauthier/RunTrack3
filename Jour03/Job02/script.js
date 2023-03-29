document.addEventListener("DOMContentLoaded", () => {

// Sélectionnez les deux divs contenant les images
let exemple = document.getElementById("exemple");
let container_verif = document.getElementById("arc-en-ciel-verif");
let btn = document.getElementById("button");
let container = document.getElementById("arc-en-ciel-container");
let resultat = document.getElementById("resultat");
let images1 = exemple.getElementsByTagName("img");


console.log(images1)

btn.addEventListener("click", () => {
  for (var i = container.children.length; i >= 0; i--) {
    container.appendChild(container.children[Math.random() * i | 0]);
  }

  container.addEventListener("click", function(event) {
    if (event.target.tagName == "IMG") {
        container_verif.appendChild(event.srcElement);

        let images2 = container_verif.getElementsByTagName("img");
        // Comparez les images en utilisant leur ordre d'apparition
        let imagesEnOrdre = true;

        for (let i = 0; i < images2.length; i++) {
          if (images1[i].src !== images2[i].src) {
            imagesEnOrdre = false;
          }
        }
        // Au bout de 6 image alors ...
        if(images2.length == 6){
        // Vérifiez si les images sont dans le bon ordre
        if (imagesEnOrdre == true) {
          console.log("Les images sont dans le bon ordre.");
          resultat.textContent = "Vous avez gagné"
        } else {
          console.log("Les images ne sont pas dans le bon ordre.");
          resultat.textContent = "Vous avez perdu"
        }
}

       
    }
        // window.alert("that working")
        // console.log(container_verif)
          })
      })
    });



