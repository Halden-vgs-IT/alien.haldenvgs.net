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

    hytterView.style.display = "none";
    granbo.style.display = "grid";

});
granhaugView.addEventListener('click', function(event) {

    event.preventDefault();

    hytterView.style.display = "none";
    granhaug.style.display = "grid";

});
granstuaView.addEventListener('click', function(event) {

    event.preventDefault();

    hytterView.style.display = "none";
    granstua.style.display = "grid";

});
grantoppenView.addEventListener('click', function(event) {

    event.preventDefault();

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