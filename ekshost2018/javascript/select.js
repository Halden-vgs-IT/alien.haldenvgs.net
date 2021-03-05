let exp = false;

const search = document.getElementById("search");
const sel = document.getElementById("results");
const dd = document.getElementById("chev");

search.addEventListener("click", (e) => {
    find(search.value);
});

dd.addEventListener("click", (e) => {
    if (exp) {
        hidelist();
    } else {
        /*if (search.value != "") {
            find(search.value);
        } else {*/
        populate(arr);
        showlist();
        //}
    }
});

sel.addEventListener("click", (e) => {
    hidelist();
    search.value = e.target.innerHTML;
});

window.addEventListener("click", (e) => {
    if (!dd.contains(e.target) && !search.contains(e.target)) {
        if (e.target.className != "uil uil-angle-up") {
            hidelist();
        }
    }
});

function showlist() {
    dd.innerHTML = '<i class="uil uil-angle-up"></i>';
    sel.style.display = "inline";
    exp = true;
}

function hidelist() {
    sel.style.display = "none";
    exp = false;
    dd.innerHTML = '<i class="uil uil-angle-down"></i>';
}

function find(str) {
    str = str.toLowerCase();
    let sres = [];
    for (i = 0; i < arr.length; i++) {
        let n = arr[i].indexOf(str);
        if (n > -1) {
            sres.push(arr[i]);
        }
    }
    populate(sres);
    if (sres.length > 0) {
        showlist();
    } else {
        hidelist();
    }
}

function populate(items) {
    if (items.length > 0) {
        sel.innerHTML = "";
        let sorted_list = [];
        for (i = 0; i < items.length; i++) {
            sorted_list.push(items[i]);
        }
        sorted_list.sort(function (a, b) {
            return a.toLowerCase().localeCompare(b.toLowerCase());
        });
        for (i = 0; i < sorted_list.length; i++) {
            let item = document.createElement("span");
            item.setAttribute("class", "item");
            item.innerHTML = sorted_list[i];
            sel.appendChild(item);
        }
    }
}

let arr = [
    "Jul",
    "Vinter",
    "Påske"
];


if (search.value !== arr[0] || search.value !== arr[1] ||search.value !== arr[2] ) {
    buyBtn[0].innerHTML = "Du må velge tidspunkt";
    buyBtn[1].innerHTML = "Du må velge tidspunkt";
    buyBtn[2].innerHTML = "Du må velge tidspunkt";
    buyBtn[3].innerHTML = "Du må velge tidspunkt";
    buyBtn[0].style.pointerEvents = "none";
    buyBtn[1].style.pointerEvents = "none";
    buyBtn[2].style.pointerEvents = "none";
    buyBtn[3].style.pointerEvents = "none";
} else {

}

search.addEventListener("input", checker);
sel.addEventListener("mouseout", checker);

function checker() {
    if (search.value === arr[0]) {
        console.log(hytter[0]["utleid"]["jul"]);
    } else {
        console.log(hytter[0]["utleid"]["jul"]);
    }
    // 1
    if (hytter[0]["utleid"]["jul"] === true) {
        buyBtn[0].innerHTML = "Hytten er opptatt";
        buyBtn[0].style.pointerEvents = "none";
    } else {
        buyBtn[0].innerHTML = buyBtnIcon + " Lei for " + Intl.NumberFormat('no-NO', { style: 'currency', currency: 'NOK' }).format(hytter[0]["ukepris"]) + buyBtnInner;
        buyBtn[0].style.pointerEvents = "auto";
    }
    if (hytter[0]["utleid"]["paske"] === true) {
        buyBtn[0].innerHTML = "Hytten er opptatt";
        buyBtn[0].style.pointerEvents = "none";
    } else {
        buyBtn[0].innerHTML = buyBtnIcon + " Lei for " + Intl.NumberFormat('no-NO', { style: 'currency', currency: 'NOK' }).format(hytter[0]["ukepris"]) + buyBtnInner;
        buyBtn[0].style.pointerEvents = "auto";
    }
    if (hytter[0]["utleid"]["vinter"] === true) {
        buyBtn[0].innerHTML = "Hytten er opptatt";
        buyBtn[0].style.pointerEvents = "none";
    } else {
        buyBtn[0].innerHTML = buyBtnIcon + " Lei for " + Intl.NumberFormat('no-NO', { style: 'currency', currency: 'NOK' }).format(hytter[0]["ukepris"]) + buyBtnInner;
        buyBtn[0].style.pointerEvents = "auto";
    }
    // 2
    if (hytter[1]["utleid"]["jul"] === true) {
        buyBtn[1].innerHTML = "Hytten er opptatt";
        buyBtn[1].style.pointerEvents = "none";
    } else {
        buyBtn[1].innerHTML = buyBtnIcon + " Lei for " + Intl.NumberFormat('no-NO', { style: 'currency', currency: 'NOK' }).format(hytter[0]["ukepris"]) + buyBtnInner;
        buyBtn[1].style.pointerEvents = "auto";
    }
    if (hytter[1]["utleid"]["paske"] === true) {
        buyBtn[1].innerHTML = "Hytten er opptatt";
        buyBtn[1].style.pointerEvents = "none";
    } else {
        buyBtn[1].innerHTML = buyBtnIcon + " Lei for " + Intl.NumberFormat('no-NO', { style: 'currency', currency: 'NOK' }).format(hytter[0]["ukepris"]) + buyBtnInner;
        buyBtn[1].style.pointerEvents = "auto";
    }
    if (hytter[1]["utleid"]["vinter"] === true) {
        buyBtn[1].innerHTML = "Hytten er opptatt";
        buyBtn[1].style.pointerEvents = "none";
    } else {
        buyBtn[1].innerHTML = buyBtnIcon + " Lei for " + Intl.NumberFormat('no-NO', { style: 'currency', currency: 'NOK' }).format(hytter[0]["ukepris"]) + buyBtnInner;
        buyBtn[1].style.pointerEvents = "auto";
    }
    // 3
    if (hytter[2]["utleid"]["jul"] === true) {
        buyBtn[2].innerHTML = "Hytten er opptatt";
        buyBtn[2].style.pointerEvents = "none";
    } else {
        buyBtn[2].innerHTML = buyBtnIcon + " Lei for " + Intl.NumberFormat('no-NO', { style: 'currency', currency: 'NOK' }).format(hytter[0]["ukepris"]) + buyBtnInner;
        buyBtn[2].style.pointerEvents = "auto";
    }
    if (hytter[2]["utleid"]["paske"] === true) {
        buyBtn[2].innerHTML = "Hytten er opptatt";
        buyBtn[2].style.pointerEvents = "none";
    } else {
        buyBtn[2].innerHTML = buyBtnIcon + " Lei for " + Intl.NumberFormat('no-NO', { style: 'currency', currency: 'NOK' }).format(hytter[0]["ukepris"]) + buyBtnInner;
        buyBtn[2].style.pointerEvents = "auto";
    }
    if (hytter[2]["utleid"]["vinter"] === true) {
        buyBtn[2].innerHTML = "Hytten er opptatt";
        buyBtn[2].style.pointerEvents = "none";
    } else {
        buyBtn[2].innerHTML = buyBtnIcon + " Lei for " + Intl.NumberFormat('no-NO', { style: 'currency', currency: 'NOK' }).format(hytter[0]["ukepris"]) + buyBtnInner;
        buyBtn[2].style.pointerEvents = "auto";
    }
    // 4
    if (hytter[3]["utleid"]["jul"] === true) {
        buyBtn[3].innerHTML = "Hytten er opptatt";
        buyBtn[3].style.pointerEvents = "none";
    } else {
        buyBtn[3].innerHTML = buyBtnIcon + " Lei for " + Intl.NumberFormat('no-NO', { style: 'currency', currency: 'NOK' }).format(hytter[0]["ukepris"]) + buyBtnInner;
        buyBtn[3].style.pointerEvents = "auto";
    }
    if (hytter[3]["utleid"]["paske"] === true) {
        buyBtn[3].innerHTML = "Hytten er opptatt";
        buyBtn[3].style.pointerEvents = "none";
    } else {
        buyBtn[3].innerHTML = buyBtnIcon + " Lei for " + Intl.NumberFormat('no-NO', { style: 'currency', currency: 'NOK' }).format(hytter[0]["ukepris"]) + buyBtnInner;
        buyBtn[3].style.pointerEvents = "auto";
    }
    if (hytter[3]["utleid"]["vinter"] === true) {
        buyBtn[3].innerHTML = "Hytten er opptatt";
        buyBtn[3].style.pointerEvents = "none";
    } else {
        buyBtn[3].innerHTML = buyBtnIcon + " Lei for " + Intl.NumberFormat('no-NO', { style: 'currency', currency: 'NOK' }).format(hytter[0]["ukepris"]) + buyBtnInner;
        buyBtn[3].style.pointerEvents = "auto";
    }
}