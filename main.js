function showMenu (myself) {
    if(myself.parentElement.lastElementChild.style.display === 'grid') {
        myself.parentElement.lastElementChild.style.display = 'none'
        myself.lastElementChild.style.transform = "rotate(0)"
    } else {
        myself.parentElement.lastElementChild.style.display = 'grid'
        myself.lastElementChild.style.transform = "rotate(180deg)"
    }

}

function selectOption (myself) {
    if (myself.firstElementChild.lastElementChild.getAttribute('src') === "assets/images/icons/checkbox-full.png") {
        myself.firstElementChild.lastElementChild.src = "assets/images/icons/checkbox-mt.png"
        myself.style.border = "2px solid darkgrey"
        myself.style.boxShadow = ""
        document.cookie = myself.id + "=false"
    } else {
        myself.firstElementChild.lastElementChild.src = "assets/images/icons/checkbox-full.png"
        document.cookie = myself.id + "=true"
        myself.style.border = "4px solid var(--color-accent)"
        myself.style.boxShadow = "0 0 10px black"
    }

    document.querySelector('.checkout-prompt').hidden = !document.querySelector('img[src="assets/images/icons/checkbox-full.png"]');
}

function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for(let i = 0; i <ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) === ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) === 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}
