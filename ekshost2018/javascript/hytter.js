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
    "hytte1",
    "hytte2",
    "hytte3"
]

// Jul
let jul = [
    "false",
    "false",
    "false"
]

// Påske
let paske = [
    "false",
    "false",
    "false"
]

// Vinterferie
let vinter = [
    "false",
    "false",
    "false"
]

let hyttePrices = [
    12000,
    15000,
    16000,
    30000
]

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
let granboView = document.getElementById("granbo-view");
let granbo = document.getElementById("granbo");
let granhaugView = document.getElementById("granhaug-view");
let granhaug = document.getElementById("granhaug");
let granstuaView = document.getElementById("granstua-view");
let granstua = document.getElementById("granstua");
let grantoppenView = document.getElementById("grantoppen-view");
let grantoppen = document.getElementById("grantoppen");

granboView.addEventListener('click', function(event) {

    event.preventDefault();

    // Scroll to top
    window.scrollTo({
        top: 0,
        behavior: 'auto'
    });

    // Pages
    hytterView.style.display = "none";
    granbo.style.display = "grid";

});
granhaugView.addEventListener('click', function(event) {

    event.preventDefault();

    // Scroll to top
    window.scrollTo({
        top: 0,
        behavior: 'auto'
    });

    // Pages
    hytterView.style.display = "none";
    granhaug.style.display = "grid";

});
granstuaView.addEventListener('click', function(event) {

    event.preventDefault();

    // Scroll to top
    window.scrollTo({
        top: 0,
        behavior: 'auto'
    });

    // Pages
    hytterView.style.display = "none";
    granstua.style.display = "grid";

});
grantoppenView.addEventListener('click', function(event) {

    event.preventDefault();

    // Scroll to top
    window.scrollTo({
        top: 0,
        behavior: 'auto'
    });

    // Pages
    hytterView.style.display = "none";
    grantoppen.style.display = "grid";

});

// Granbo
let hytterLeftImage = document.getElementsByClassName("hytter-left-image");
let granbo1 = document.getElementById("granbo1");
let granbo2 = document.getElementById("granbo2");
let granbo3 = document.getElementById("granbo3");
let granbo4 = document.getElementById("granbo4");

hytterLeftImage[0].addEventListener('click', function(event) {

    event.preventDefault();

    granbo1.style.display = "block";
    granbo2.style.display = "none";
    granbo3.style.display = "none";
    granbo4.style.display = "none";

});
hytterLeftImage[1].addEventListener('click', function(event) {

    event.preventDefault();

    granbo1.style.display = "none";
    granbo2.style.display = "block";
    granbo3.style.display = "none";
    granbo4.style.display = "none";

});
hytterLeftImage[2].addEventListener('click', function(event) {

    event.preventDefault();

    granbo1.style.display = "none";
    granbo2.style.display = "none";
    granbo3.style.display = "block";
    granbo4.style.display = "none";

});
hytterLeftImage[3].addEventListener('click', function(event) {

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