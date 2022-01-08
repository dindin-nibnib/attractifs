function deleteAllCookies() {
    var cookies = document.cookie.split(";");

    for (var i = 0; i < cookies.length; i++) {
        var cookie = cookies[i];
        var eqPos = cookie.indexOf("=");
        var name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
        document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
    }
}

deleteAllCookies();

function showMenu(myself) {
    if (myself.parentElement.lastElementChild.style.display === 'grid') {
        myself.parentElement.lastElementChild.style.display = 'none'
        myself.lastElementChild.style.transform = "rotate(0)"
    } else {
        myself.parentElement.lastElementChild.style.display = 'grid'
        myself.lastElementChild.style.transform = "rotate(180deg)"
    }

}

function selectOption(myself) {
    if (myself.firstElementChild.lastElementChild.getAttribute('src') === "assets/images/icons/checkbox-full.png") {
        myself.firstElementChild.lastElementChild.src = "assets/images/icons/checkbox-mt.png"
        myself.style.border = "2px solid darkgrey"
        myself.style.boxShadow = ""
        document.cookie = myself.id + "=false, SameSite=Lax"
    } else {
        myself.firstElementChild.lastElementChild.src = "assets/images/icons/checkbox-full.png"
        document.cookie = myself.id + "=true, SameSite=Lax"
        myself.style.border = "4px solid var(--color-accent)"
        myself.style.boxShadow = "0 0 10px black"
    }

    if (document.querySelector('img[src="assets/images/icons/checkbox-full.png"]')) {
        document.querySelector('.checkout-prompt').style.top = "calc(100vh - 85px)"
        document.querySelector('.checkout-prompt').style.bottom = "5px"
        document.querySelector("footer").style.paddingBottom = "100px"
    } else {
        document.querySelector('.checkout-prompt').style.top = "calc(100vh + 5px)"
        document.querySelector('.checkout-prompt').style.bottom = "-75px"
        document.querySelector("footer").style.paddingBottom = ""
    }
}

function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for (let i = 0; i < ca.length; i++) {
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
