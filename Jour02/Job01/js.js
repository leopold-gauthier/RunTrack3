document.addEventListener("DOMContentLoaded", () => {
    // Défini le boutton
const btn = document.getElementById("button");
    // function citation
function citation(){
   
        const article = document.getElementById("citation");
        console.log(article.innerHTML);
}

// ecoute si le button est clicker alors active la function citation
btn.addEventListener("click", citation);
})
