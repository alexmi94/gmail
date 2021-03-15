document.addEventListener("DOMContentLoaded", () => {
    let compte = document.getElementsByClassName("connexion")[0];
    compte.style.backgroundColor = "#9d2b29";
    compte.style.color = "#fafafa";

    let h3 = document.querySelectorAll("h3")[0];
    let value_storage = sessionStorage.getItem("prenom");
    sessionStorage.clear();
    if(value_storage){
    h3.innerText+=(" " + value_storage);
    }

})