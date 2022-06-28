var dayOfWeek;
(function (dayOfWeek) {
    dayOfWeek[dayOfWeek["LUNDI"] = 1] = "LUNDI";
    dayOfWeek[dayOfWeek["MARDI"] = 2] = "MARDI";
    dayOfWeek[dayOfWeek["MERCREDI"] = 3] = "MERCREDI";
    dayOfWeek[dayOfWeek["JEUDI"] = 4] = "JEUDI";
    dayOfWeek[dayOfWeek["VENDREDI"] = 5] = "VENDREDI";
    dayOfWeek[dayOfWeek["SAMEDI"] = 6] = "SAMEDI";
    dayOfWeek[dayOfWeek["DIMANCHE"] = 7] = "DIMANCHE";
})(dayOfWeek || (dayOfWeek = {}));
function dayOfTheWeek(day, month, year) {
    var yearOffset;
    var yearResult;
    var monthOffset;
    var dayNumber;
    yearOffset = Math.floor((14 - month) / 12);
    yearResult = year - yearOffset;
    monthOffset = month + 12 * yearOffset - 2;
    dayNumber =
        (day +
            yearResult +
            Math.floor(yearResult / 4) -
            Math.floor(yearResult / 100) +
            Math.floor(yearResult / 400) +
            Math.floor((31 * monthOffset) / 12)) %
            7;
    if (dayNumber === 0) {
        dayNumber = 7;
    }
    return dayNumber;
}
function firstDayOfMonth(month, year) {
    return dayOfTheWeek(1, month, year);
}
function getCurrentDate() {
    var current = new Date(Date.now());
    return current;
}
//!
//! \brief estBissextile détermine si une année est bissextile ou non
//! \param annee l'année, en format YYYY
//! \return true si elle est bissextile, sinon false
//!
function estBissextile(annee) {
    var resultat = (annee % 4 == 0 && annee % 100 != 0) || annee % 400 == 0;
    return resultat;
}
//!
//! \brief maxJoursMois Retourne le nombre de jours dans un mois donné
//! \param mois Le nombre du mois, format MM, de 1 à 12
//! \param annee L'année, format YYYY
//! \return Le nombre de jours
//!
function maxJoursMois(mois, annee) {
    if (mois < 1 || mois > 12)
        return -1;
    if (mois == 2) {
        return estBissextile(annee) ? 29 : 28;
    }
    else {
        return ((mois - 1) % 7) % 2 == 0 ? 31 : 30;
    }
}
//!
//! \brief digitChar2int transforme un caractère représentant un chiffre en nombre entier
//! \param digit le caractère, qui doit être un chiffre
//! \return le nombre représenté par le caractère donné
//!
function digitChar2int(digit) {
    switch (digit) {
        case "0":
            return 0;
            break;
        case "1":
            return 1;
            break;
        case "2":
            return 2;
            break;
        case "3":
            return 3;
            break;
        case "4":
            return 4;
            break;
        case "5":
            return 5;
            break;
        case "6":
            return 6;
            break;
        case "7":
            return 7;
            break;
        case "8":
            return 8;
            break;
        case "9":
            return 9;
            break;
        default:
            return -1;
    }
}
//!
//! \brief nomMois Retourne le nom du mois en fonction de la date
//! \param mois Le numéro du mois (MM), compris entre 1 et 12
//! \return Le nom du mois, ou ERROR si ce n'est pas valide
//!
function nomMois(mois) {
    switch (mois) {
        case 1:
            return "janvier";
        case 2:
            return "février";
        case 3:
            return "mars";
        case 4:
            return "avril";
        case 5:
            return "mai";
        case 6:
            return "juin";
        case 7:
            return "juillet";
        case 8:
            return "août";
        case 9:
            return "septembre";
        case 10:
            return "octobre";
        case 11:
            return "novembre";
        case 12:
            return "décembre";
        default:
            return "ERROR";
    }
}
//!
//! \brief nomMois Retourne le numero du mois en fonction de son nom
//! \param mois Le nom du mois
//! \return Le numéro du mois, ou -1 si ce n'est pas valide
//!
function numeroMois(mois) {
    switch (mois) {
        case "janvier":
            return 1;
        case "février":
            return 2;
        case "mars":
            return 3;
        case "avril":
            return 4;
        case "mai":
            return 5;
        case "juin":
            return 6;
        case "juillet":
            return 7;
        case "août":
            return 8;
        case "septembre":
            return 9;
        case "octobre":
            return 10;
        case "novembre":
            return 11;
        case "décembre":
            return 12;
        default:
            return -1;
    }
}
const CARACTERES_VALIDES = [
    "0",
    "1",
    "2",
    "3",
    "4",
    "5",
    "6",
    "7",
    "8",
    "9",
    "+",
    "-",
];
//!
//! \brief string2int transforme une chaine de charactère représentant un nombre en nombre entier
//! \param s la chaine a transformer
//! \return le nombre représenté par la chaine
//!
function string2int(s) {
    var nombre = 0;
    var negatif = false;
    for (var i = 0; i < s.length; i++) {
        if (!CARACTERES_VALIDES.includes(s[i]))
            return 0;
        if (s[i] == "-")
            negatif = true;
        else if (s[i] == "+")
            negatif = false;
        else {
            nombre *= 10;
            nombre += digitChar2int(s[i]);
        }
    }
    if (negatif)
        nombre *= -1;
    return nombre;
}
function selectDay(day) {
    let monthString = document.querySelector("#mois > span")?.innerHTML;
    monthString = monthString?.split(" ")[0];
    if (monthString === undefined)
        return;
    let month = numeroMois(monthString);
    if (month === 0)
        return;
    let yearString = document.querySelector("#mois > span")?.innerHTML;
    yearString = yearString?.split(" ")[1];
    if (yearString === undefined)
        return;
    let year = string2int(monthString);
    if (year === 0)
        return;
}
function fillCalendar(month = getCurrentDate().getMonth(), year = getCurrentDate().getFullYear()) {
    let calendar = document.querySelector("#jours-numeros");
    if (calendar === null)
        return;
    calendar.innerHTML = "";
    month -= 1;
    if (month <= 0) {
        month = 12;
        year--;
    }
    for (var i = maxJoursMois(month, year); dayOfTheWeek(i, month, year) !== dayOfWeek.DIMANCHE; i--) {
        var dayNumber = document.createElement("span");
        dayNumber.innerHTML = i;
        if (dayOfTheWeek(i, month, year) === dayOfWeek.LUNDI) {
            dayNumber.classList.add("unavailable");
        }
        dayNumber.classList.add("not-this-month");
        calendar.insertBefore(dayNumber, calendar.firstChild);
    }
    month += 1;
    if (month >= 13) {
        month = 1;
        year++;
    }
    for (var i = 1; i <= maxJoursMois(month, year); i++) {
        var dayButton = document.createElement("a");
        dayButton.href = "#";
        dayButton.setAttribute("onclick", "");
        var dayNumber = document.createElement("span");
        dayNumber.innerHTML = i;
        if (dayOfTheWeek(i, month, year) === dayOfWeek.DIMANCHE ||
            dayOfTheWeek(i, month, year) === dayOfWeek.LUNDI) {
            dayNumber.classList.add("unavailable");
            calendar.appendChild(dayNumber);
        }
        else {
            dayButton.appendChild(dayNumber);
            calendar.appendChild(dayButton);
        }
    }
    month += 1;
    if (month >= 13) {
        month = 1;
        year++;
    }
    for (var i = 1; dayOfTheWeek(i, month, year) !== dayOfWeek.LUNDI; i++) {
        var dayNumber = document.createElement("span");
        dayNumber.innerHTML = i;
        if (dayOfTheWeek(i, month, year) === dayOfWeek.DIMANCHE) {
            dayNumber.classList.add("unavailable");
        }
        dayNumber.classList.add("not-this-month");
        calendar.appendChild(dayNumber);
    }
}
function nextMonth() {
    let monthLabel = document.querySelector("#mois > span");
    if (!monthLabel)
        return;
    let nextMonthNumber = numeroMois(monthLabel.innerHTML.split(" ")[0]) + 1;
    let nextYearNumber = string2int(monthLabel.innerHTML.split(" ")[1]);
    if (nextMonthNumber >= 13) {
        nextYearNumber++;
        nextMonthNumber = 1;
    }
    fillCalendar(nextMonthNumber, nextYearNumber);
    monthLabel.innerHTML = nomMois(nextMonthNumber) + " " + nextYearNumber;
}
function previousMonth() {
    let monthLabel = document.querySelector("#mois > span");
    if (!monthLabel)
        return;
    let nextMonthNumber = numeroMois(monthLabel.innerHTML.split(" ")[0]) - 1;
    let nextYearNumber = string2int(monthLabel.innerHTML.split(" ")[1]);
    if (nextMonthNumber <= 0) {
        nextYearNumber--;
        nextMonthNumber = 12;
    }
    fillCalendar(nextMonthNumber, nextYearNumber);
    monthLabel.innerHTML = nomMois(nextMonthNumber) + " " + nextYearNumber;
}
window.onload = () => {
    fillCalendar();
    let mois = document.querySelector("#mois > span");
    if (mois === null)
        return;
    mois.innerHTML =
        nomMois(getCurrentDate().getMonth()) + " " + getCurrentDate().getFullYear();
};
