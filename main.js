document.cookie = ""

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
    myself.firstElementChild.lastElementChild.checked = !myself.firstElementChild.lastElementChild.checked;
    document.cookie = myself.firstElementChild.lastElementChild.value + "=" + myself.firstElementChild.lastElementChild.checked;
    for (const checkbox of document.getElementsByClassName('checkbox')) {
        if(checkbox.checked) {
            document.getElementsByClassName('checkout-prompt').item(0).style.display = "block"
            break;
        }
        document.getElementsByClassName('checkout-prompt').item(0).style.display = "none"
    }
}