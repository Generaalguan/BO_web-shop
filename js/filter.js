let allpersoonen = document.getElementsByClassName("col-4")
let filters = document.getElementsByClassName("filter");




//back-end
let BackendFilter = document.getElementById("checkbox-Back-end");

BackendFilter.onchange = function () {
    if (BackendFilter.checked === true) {
        for (let i = 0; i < allpersoonen.length; i++){
            if (allpersoonen[i].dataset.category === "Back-end") {
                allpersoonen[i].style.display = "block"
            }

        }
    }
    else {
        for (let i = 0; i < allpersoonen.length; i++){
            if (allpersoonen[i].dataset.category === "Back-end") {
                allpersoonen[i].style.display = "none"
            }

        }
    }
}

//front end
let frontendFilter = document.getElementById("checkbox-front-end");

frontendFilter.onchange = function () {
    if (frontendFilter.checked === true) {
        for (let i = 0; i < allpersoonen.length; i++){
            if (allpersoonen[i].dataset.category === "front-end") {
                allpersoonen[i].style.display = "block"
            }

        }
    }
    else {
        for (let i = 0; i < allpersoonen.length; i++){
            if (allpersoonen[i].dataset.category === "front-end") {
                allpersoonen[i].style.display = "none"
            }

        }
    }
}

//logo
let logoFilter = document.getElementById("checkbox-Logo-design");

logoFilter.onchange = function () {
    if (logoFilter.checked === true) {
        for (let i = 0; i < allpersoonen.length; i++){
            if (allpersoonen[i].dataset.category === "Logo-design") {
                allpersoonen[i].style.display = "block"
            }

        }
    }
    else {
        for (let i = 0; i < allpersoonen.length; i++){
            if (allpersoonen[i].dataset.category === "Logo-design") {
                allpersoonen[i].style.display = "none"
            }

        }
    }
}
