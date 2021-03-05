// Header Video
let playerButton = document.getElementsByClassName("player-button-wrapper");
let playerWrapper = document.getElementsByClassName("player-wrapper");
let playerBackground = document.getElementsByClassName("player-background");

let video = document.querySelector("#hytter-video-player");
video.volume = 0;

playerButton[0].addEventListener('click', function(event) {

    event.preventDefault();

    playerWrapper[0].style.opacity = "1";
    playerWrapper[0].style.pointerEvents = "auto";

    // Video playing with timeout
    video.autoplay = true;
    video.load();

});

playerBackground[0].addEventListener('click', function(event) {

    event.preventDefault();

    playerWrapper[0].style.opacity = "0";
    playerWrapper[0].style.pointerEvents = "none";

    video.pause();

});

// Hytter
let hytter = [
    {
        hytte: "grantoppen",
        sengeplasser: 8,
        standard: "Lav",
        badstue: "Nei",
        ukepris: 16000,
        status: "ledig",
        utleid: {
            jul: false,
            vinter: false,
            paske: false
        }
    },
    {
        hytte: "granbo",
        sengeplasser: 6,
        standard: "Middels",
        badstue: "Nei",
        ukepris: 15000,
        utleid: {
            jul: false,
            vinter: false,
            paske: false
        }
    },
    {
        hytte: "granstua",
        sengeplasser: 4,
        standard: "Høy",
        badstue: "Ja",
        ukepris: 12000,
        utleid: {
            jul: false,
            vinter: false,
            paske: false
        }
    },
    {
        hytte: "granhaug",
        sengeplasser: 10,
        standard: "Høy",
        badstue: "Ja",
        ukepris: 30000,
        utleid: {
            jul: false,
            vinter: false,
            paske: false
        }
    }
];

// Below is for testing
console.log(hytter.find(element => element.hytte === "grantoppen"));
console.log(hytter.find(element => element.hytte === "granhaug"));
console.log(hytter.find(element => element.hytte === "granbo"));
console.log(hytter.find(element => element.hytte === "granstua"));
console.log(hytter[0]["hytte"] + " har " + hytter[0]["sengeplasser"] + " sengeplasser");
console.log(hytter[0]["utleid"]["jul"]);
// Above is for testing

// Set title of hytte pages
let hytterTitle = document.getElementsByClassName("hytter-title");

hytterTitle[0].innerHTML = hytter[0]["hytte"];
hytterTitle[1].innerHTML = hytter[1]["hytte"];
hytterTitle[2].innerHTML = hytter[2]["hytte"];
hytterTitle[3].innerHTML = hytter[3]["hytte"];

// Get info about hytte and add icons
let hBedsText = document.getElementsByClassName("h-beds-text");
let hBedsIcon = '<i class="uil uil-bed"></i>';
let hStandardText = document.getElementsByClassName("h-standard-text");
let hStandardIcon = '<i class="uil uil-thumbs-up"></i>';
let hBathText = document.getElementsByClassName("h-bath-text");
let hBathIcon = '<i class="uil uil-bath"></i>';
let hPriceText = document.getElementsByClassName("h-price-text");
let hPriceIcon = '<i class="uil uil-money-bill"></i>';

// Buy button price
let buyBtn = document.getElementsByClassName("buy-btn");
let buyBtnIcon = '<i class="uil uil-estate"></i>';
let buyBtnInner = '<div class="btn-secondary"></div>';

// loops through array and finds right items.
hytter.forEach(function(item, index) {
    // Get info about hytte and add icons
    hBedsText[index].innerHTML = hBedsIcon + ' ' + hytter[index]["sengeplasser"];
    hStandardText[index].innerHTML = hStandardIcon + ' ' + hytter[index]["standard"];
    hBathText[index].innerHTML = hBathIcon + ' ' + hytter[index]["badstue"];
    hPriceText[index].innerHTML = hPriceIcon + ' ' + Intl.NumberFormat('no-NO', { style: 'currency', currency: 'NOK' }).format(hytter[index]["ukepris"]);
    buyBtn[index].innerHTML = buyBtnIcon + " Lei for " + Intl.NumberFormat('no-NO', { style: 'currency', currency: 'NOK' }).format(hytter[index]["ukepris"]) + buyBtnInner;
});

// Hover effect for hytter main header
let dot1 = document.getElementById("dot1");
let dot2 = document.getElementById("dot2");
let dot3 = document.getElementById("dot3");
let dot4 = document.getElementById("dot4");

let himage1 = document.getElementById("himage1");
let himage2 = document.getElementById("himage2");
let himage3 = document.getElementById("himage3");
let himage4 = document.getElementById("himage4");

let hytterOverlay = document.getElementsByClassName("hytter-overlay");

dot1.addEventListener("mouseover", function() {
    himage1.style.opacity = "1";
    himage1.style.pointerEvents = "auto";
    himage1.style.transform = "translate(-50%, -50%) scale(1, 1)";
    hytterOverlay[0].style.backgroundColor = "rgba(0, 0, 0, .5)";
});
dot1.addEventListener("mouseout", function() {
    himage1.style.opacity = "0";
    himage1.style.pointerEvents = "none";
    himage1.style.transform = "translate(-50%, -50%) scale(0, 0)";
    hytterOverlay[0].style.backgroundColor = "rgba(0, 0, 0, .25)";
});
himage1.addEventListener("mouseover", function() {
    himage1.style.opacity = "1";
    himage1.style.pointerEvents = "auto";
    himage1.style.transform = "translate(-50%, -50%) scale(1, 1)";
    hytterOverlay[0].style.backgroundColor = "rgba(0, 0, 0, .65)";
});
himage1.addEventListener("mouseout", function() {
    himage1.style.opacity = "0";
    himage1.style.pointerEvents = "none";
    himage1.style.transform = "translate(-50%, -50%) scale(0, 0)";
    hytterOverlay[0].style.backgroundColor = "rgba(0, 0, 0, .25)";
});

dot2.addEventListener("mouseover", function() {
    himage2.style.opacity = "1";
    himage2.style.pointerEvents = "auto";
    himage2.style.transform = "translate(-50%, -50%) scale(1, 1)";
    hytterOverlay[0].style.backgroundColor = "rgba(0, 0, 0, .65)";
});
dot2.addEventListener("mouseout", function() {
    himage2.style.opacity = "0";
    himage2.style.pointerEvents = "none";
    himage2.style.transform = "translate(-50%, -50%) scale(0, 0)";
    hytterOverlay[0].style.backgroundColor = "rgba(0, 0, 0, .25)";
});
himage2.addEventListener("mouseover", function() {
    himage2.style.opacity = "1";
    himage2.style.pointerEvents = "auto";
    himage2.style.transform = "translate(-50%, -50%) scale(1, 1)";
    hytterOverlay[0].style.backgroundColor = "rgba(0, 0, 0, .65)";
});
himage2.addEventListener("mouseout", function() {
    himage2.style.opacity = "0";
    himage2.style.pointerEvents = "none";
    himage2.style.transform = "translate(-50%, -50%) scale(0, 0)";
    hytterOverlay[0].style.backgroundColor = "rgba(0, 0, 0, .25)";
});

dot3.addEventListener("mouseover", function() {
    himage3.style.opacity = "1";
    himage3.style.pointerEvents = "auto";
    himage3.style.transform = "translate(-50%, -50%) scale(1, 1)";
    hytterOverlay[0].style.backgroundColor = "rgba(0, 0, 0, .65)";
});
dot3.addEventListener("mouseout", function() {
    himage3.style.opacity = "0";
    himage3.style.pointerEvents = "none";
    himage3.style.transform = "translate(-50%, -50%) scale(0, 0)";
    hytterOverlay[0].style.backgroundColor = "rgba(0, 0, 0, .25)";
});
himage3.addEventListener("mouseover", function() {
    himage3.style.opacity = "1";
    himage3.style.pointerEvents = "auto";
    himage3.style.transform = "translate(-50%, -50%) scale(1, 1)";
    hytterOverlay[0].style.backgroundColor = "rgba(0, 0, 0, .65)";
});
himage3.addEventListener("mouseout", function() {
    himage3.style.opacity = "0";
    himage3.style.pointerEvents = "none";
    himage3.style.transform = "translate(-50%, -50%) scale(0, 0)";
    hytterOverlay[0].style.backgroundColor = "rgba(0, 0, 0, .25)";
});

dot4.addEventListener("mouseover", function() {
    himage4.style.opacity = "1";
    himage4.style.pointerEvents = "auto";
    himage4.style.transform = "translate(-50%, -50%) scale(1, 1)";
    hytterOverlay[0].style.backgroundColor = "rgba(0, 0, 0, .65)";
});
dot4.addEventListener("mouseout", function() {
    himage4.style.opacity = "0";
    himage4.style.pointerEvents = "none";
    himage4.style.transform = "translate(-50%, -50%) scale(0, 0)";
    hytterOverlay[0].style.backgroundColor = "rgba(0, 0, 0, .25)";
});
himage4.addEventListener("mouseover", function() {
    himage4.style.opacity = "1";
    himage4.style.pointerEvents = "auto";
    himage4.style.transform = "translate(-50%, -50%) scale(1, 1)";
    hytterOverlay[0].style.backgroundColor = "rgba(0, 0, 0, .65)";
});
himage4.addEventListener("mouseout", function() {
    himage4.style.opacity = "0";
    himage4.style.pointerEvents = "none";
    himage4.style.transform = "translate(-50%, -50%) scale(0, 0)";
    hytterOverlay[0].style.backgroundColor = "rgba(0, 0, 0, .25)";
});

// Granbo
let hytterView = document.getElementById("hytter-view");
let grantoppenView = document.getElementById("grantoppen-view");
let grantoppen = document.getElementById("grantoppen");
let granboView = document.getElementById("granbo-view");
let granbo = document.getElementById("granbo");
let granstuaView = document.getElementById("granstua-view");
let granstua = document.getElementById("granstua");
let granhaugView = document.getElementById("granhaug-view");
let granhaug = document.getElementById("granhaug");

grantoppenView.addEventListener('click', function(event) {

    event.preventDefault();

    // Scroll to top
    window.scrollTo({
        top: 0,
        behavior: 'auto'
    });

    homeLink[1].style.display = "none";
    backLink[0].style.display = "block";

    // Pages
    hytterView.style.display = "none";
    grantoppen.style.display = "grid";

});
granboView.addEventListener('click', function(event) {

    event.preventDefault();

    // Scroll to top
    window.scrollTo({
        top: 0,
        behavior: 'auto'
    });

    homeLink[1].style.display = "none";
    backLink[0].style.display = "block";

    // Pages
    hytterView.style.display = "none";
    granbo.style.display = "grid";

});
granstuaView.addEventListener('click', function(event) {

    event.preventDefault();

    // Scroll to top
    window.scrollTo({
        top: 0,
        behavior: 'auto'
    });

    homeLink[1].style.display = "none";
    backLink[0].style.display = "block";

    // Pages
    hytterView.style.display = "none";
    granstua.style.display = "grid";

});
granhaugView.addEventListener('click', function(event) {

    event.preventDefault();

    // Scroll to top
    window.scrollTo({
        top: 0,
        behavior: 'auto'
    });

    homeLink[1].style.display = "none";
    backLink[0].style.display = "block";

    // Pages
    hytterView.style.display = "none";
    granhaug.style.display = "grid";

});

// Granbo
let hytterLeftImage = document.getElementsByClassName("hytter-left-image");
let granbo1 = document.getElementById("granbo1");
let granbo2 = document.getElementById("granbo2");
let granbo3 = document.getElementById("granbo3");
let granbo4 = document.getElementById("granbo4");

hytterLeftImage[5].addEventListener('click', function(event) {

    event.preventDefault();

    granbo1.style.display = "block";
    granbo2.style.display = "none";
    granbo3.style.display = "none";
    granbo4.style.display = "none";

});
hytterLeftImage[6].addEventListener('click', function(event) {

    event.preventDefault();

    granbo1.style.display = "none";
    granbo2.style.display = "block";
    granbo3.style.display = "none";
    granbo4.style.display = "none";

});
hytterLeftImage[7].addEventListener('click', function(event) {

    event.preventDefault();

    granbo1.style.display = "none";
    granbo2.style.display = "none";
    granbo3.style.display = "block";
    granbo4.style.display = "none";

});
hytterLeftImage[8].addEventListener('click', function(event) {

    event.preventDefault();

    granbo1.style.display = "none";
    granbo2.style.display = "none";
    granbo3.style.display = "none";
    granbo4.style.display = "block";

});

// Granstua
let granstua1 = document.getElementById("granstua1");
let granstua2 = document.getElementById("granstua2");
let granstua3 = document.getElementById("granstua3");
let granstua4 = document.getElementById("granstua4");

hytterLeftImage[10].addEventListener('click', function(event) {

    event.preventDefault();

    granstua1.style.display = "block";
    granstua2.style.display = "none";
    granstua3.style.display = "none";
    granstua4.style.display = "none";

});
hytterLeftImage[11].addEventListener('click', function(event) {

    event.preventDefault();

    granstua1.style.display = "none";
    granstua2.style.display = "block";
    granstua3.style.display = "none";
    granstua4.style.display = "none";

});
hytterLeftImage[12].addEventListener('click', function(event) {

    event.preventDefault();

    granstua1.style.display = "none";
    granstua2.style.display = "none";
    granstua3.style.display = "block";
    granstua4.style.display = "none";

});
hytterLeftImage[13].addEventListener('click', function(event) {

    event.preventDefault();

    granstua1.style.display = "none";
    granstua2.style.display = "none";
    granstua3.style.display = "none";
    granstua4.style.display = "block";

});