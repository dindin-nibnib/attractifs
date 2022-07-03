"use strict";
window.onload = async () => {
    let commande = document.querySelector("#commande");
    if (!commande)
        return;
    var commandesJson = await (await fetch("./commandes.json")).json();
    var commandes = new Map(Object.entries(commandesJson));
    let types = commande.innerHTML.split("; ");
    commande.innerHTML = "<ul></ul>";
    for (var i = 0; i < types.length; i++) {
        if (commandes.get(types[i]) === undefined)
            continue;
        let commandeLi = document.createElement("li");
        commandeLi.innerHTML = commandes.get(types[i]);
        commande.firstElementChild?.appendChild(commandeLi);
    }
};
