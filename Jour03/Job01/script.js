let p = document.createElement("p");
document.body.appendChild(p);
$("button").click(() => {
    p.textContent = "Les logiciels et les cathédrales, c'est un peu la même chose - d'abord on les construit ensuite on prie.";
    $('p').toggle();
});
$("#btn").click(() => {
    $("html").hide();
});