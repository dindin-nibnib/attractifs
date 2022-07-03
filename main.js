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
  if (myself.parentElement.lastElementChild.style.display === "grid") {
    myself.parentElement.lastElementChild.style.display = "none";
    myself.lastElementChild.style.transform = "rotate(0)";
  } else {
    myself.parentElement.lastElementChild.style.display = "grid";
    myself.lastElementChild.style.transform = "rotate(180deg)";
  }
}

function selectOption(myself) {
  if (
    myself.firstElementChild.lastElementChild.getAttribute("src") ===
    "assets/images/icons/checkbox-full.png"
  ) {
    myself.firstElementChild.lastElementChild.src =
      "assets/images/icons/checkbox-mt.png";
    myself.style.border = null;
    myself.style.boxShadow = null;
  } else {
    myself.firstElementChild.lastElementChild.src =
      "assets/images/icons/checkbox-full.png";
    myself.style.border = "4px solid var(--color-accent)";
    myself.style.boxShadow = "0 0 10px black";
  }

  if (
    myself.firstElementChild.lastElementChild.getAttribute("src") ===
    "assets/images/icons/checkbox-full.png"
  ) {
    document.getElementById("type").value += `${myself.id}; `;
    let currentTime = Number(document.getElementById("temps").value);
    let additionnalTime = myself.lastElementChild.children[0].innerHTML;
    let additionnalTimeArray = additionnalTime.split(" ");
    additionnalTimeArray.splice(1, 1);
    additionnalTimeArray.splice(3, 1);
    let additionnalTimeNumber;
    if (additionnalTimeArray[1]) {
      additionnalTimeArray =
        Number(additionnalTimeArray[0]) * 60 + Number(additionnalTimeArray[1]);
    } else {
      additionnalTimeNumber = Number(additionnalTimeArray[0]);
    }

    document.getElementById("temps").value =
      currentTime + additionnalTimeNumber;
  } else {
    let types = document.getElementById("type").value.split(";");
    types.forEach((element, key) => {
      if (element.includes(myself.id)) {
        types.splice(key, 1);
      }
    });
    document.getElementById("type").value = types.join(";");

    let currentTime = Number(document.getElementById("temps").value);
    let additionnalTime = myself.lastElementChild.children[0].innerHTML;
    let additionnalTimeArray = additionnalTime.split(" ");
    additionnalTimeArray.splice(1, 1);
    additionnalTimeArray.splice(3, 1);
    let additionnalTimeNumber;
    if (additionnalTimeArray[1]) {
      additionnalTimeArray =
        Number(additionnalTimeArray[0]) * 60 + Number(additionnalTimeArray[1]);
    } else {
      additionnalTimeNumber = Number(additionnalTimeArray[0]);
    }
    document.getElementById("temps").value =
      currentTime - additionnalTimeNumber;
  }

  if (
    document.querySelector('img[src="assets/images/icons/checkbox-full.png"]')
  ) {
    document.querySelector(".checkout-prompt").style.top = "calc(100vh - 85px)";
    document.querySelector(".checkout-prompt").style.bottom = "5px";
    document.querySelector("footer").style.paddingBottom = "100px";
  } else {
    document.querySelector(".checkout-prompt").style.top = "calc(100vh + 5px)";
    document.querySelector(".checkout-prompt").style.bottom = "-75px";
    document.querySelector("footer").style.paddingBottom = "";
  }
}

function getCookie(cname) {
  let name = cname + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(";");
  for (let i = 0; i < ca.length; i++) {
    let c = ca[i];
    while (c.charAt(0) === " ") {
      c = c.substring(1);
    }
    if (c.indexOf(name) === 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

window.onload = async () => {
  let processDataCuts = function (divCuts) {
    var coupes = new Array();
    divCuts.innerHTML.split("<br><br>").forEach(coupe => {
      coupeMap = new Map();
      coupe.split("<br>").forEach(value => {
        coupeMap.set(value.split(": ")[0], value.split(": ")[1])
      })
      coupes.push(coupeMap)
    })
    coupes.pop();

    divCuts.innerHTML = "";

    coupes.forEach(coupe => {
      let div = document.createElement("div");
      div.setAttribute("onclick", "selectOption(this)");
      div.setAttribute("id", coupe.get("id"))

      let divTitle = document.createElement("div");
      let h2 = document.createElement("h2");
      h2.innerHTML = coupe.get("name");
      divTitle.appendChild(h2);
      let checkbox = document.createElement("img");
      checkbox.setAttribute("src", "assets/images/icons/checkbox-mt.png");;
      checkbox.setAttribute("alt", "Sélectionner l'option");
      divTitle.appendChild(checkbox);
      div.appendChild(divTitle);

      let divMeta = document.createElement("div");
      divMeta.classList.add("meta");
      let duration = document.createElement("p");
      duration.classList.add("meta");
      let hours = Math.floor(Number(coupe.get("duration") / 60))
      let mins = Number(coupe.get("duration")) % 60;
      if (hours != 0)
        duration.innerHTML = `${hours} h ${mins} min`;
      else
        duration.innerHTML = `${mins} min`;
      divMeta.appendChild(duration);
      let price = document.createElement("p");
      price.classList.add("meta");
      price.innerHTML = `${coupe.get("price")} CHF`;
      divMeta.appendChild(price);
      div.appendChild(divMeta);

      divCuts.appendChild(div);
    })
  }

  processDataCuts(document.querySelector("#coupe > div.enfant > div"));
  processDataCuts(document.querySelector("#coupe > div.femme > div"));
  processDataCuts(document.querySelector("#coupe > div.homme > div"));
}