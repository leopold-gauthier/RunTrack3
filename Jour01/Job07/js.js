// console.log("Hello Javascript !");
// console.log(joursemaines);
let yourDate = new Date("26 december 2020");

jour = yourDate.getDate();
mois = yourDate.getMonth();
annee = yourDate.getFullYear();

listeMois = [
    "Janvier", "Février", "Mars", "Avril", "Mai",
    "Juin", "Juillet", "Août", "Septembre",
    "Octobre", "Novembre", "Décembre"
];

function jourtravaille(yourDate) {
  if (
    (jour == 1 && mois == 0 && annee == 2020) ||
    (jour == 13 && mois == 3 && annee == 2020) ||
    (jour == 1 && mois == 4 && annee == 2020) ||
    (jour == 8 && mois == 4 && annee == 2020) ||
    (jour == 21 && mois == 4 && annee == 2020) ||
    (jour == 1 && mois == 5 && annee == 2020) ||
    (jour == 14 && mois == 6 && annee == 2020) ||
    (jour == 15 && mois == 7 && annee == 2020) ||
    (jour == 1 && mois == 10 && annee == 2020) ||
    (jour == 11 && mois == 10 && annee == 2020) ||
    (jour == 25 && mois == 11 && annee == 2020)
  ) {
    console.log(`Le ${jour} ${listeMois[mois]} ${annee} , est un jour fériée`);
  }else if (yourDate.getDay() == 6 || yourDate.getDay() == 0) {
    console.log(`Le ${jour} ${listeMois[mois]} ${annee} , est un jour fériée en week-end`);
  }else{
    console.log(`Le ${jour} ${listeMois[mois]} ${annee} , est un jour de travaille `);
  }
}

jourtravaille(yourDate);
