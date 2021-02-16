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
let pageLeftImage = document.getElementsByClassName("page-left-image");
let granbo1 = document.getElementById("granbo1");
let granbo2 = document.getElementById("granbo2");
let granbo3 = document.getElementById("granbo3");
let granbo4 = document.getElementById("granbo4");

pageLeftImage[0].addEventListener('click', function(event) {

    event.preventDefault();

    granbo1.style.display = "block";
    granbo2.style.display = "none";
    granbo3.style.display = "none";
    granbo4.style.display = "none";

});
pageLeftImage[1].addEventListener('click', function(event) {

    event.preventDefault();

    granbo1.style.display = "none";
    granbo2.style.display = "block";
    granbo3.style.display = "none";
    granbo4.style.display = "none";

});
pageLeftImage[2].addEventListener('click', function(event) {

    event.preventDefault();

    granbo1.style.display = "none";
    granbo2.style.display = "none";
    granbo3.style.display = "block";
    granbo4.style.display = "none";

});
pageLeftImage[3].addEventListener('click', function(event) {

    event.preventDefault();

    granbo1.style.display = "none";
    granbo2.style.display = "none";
    granbo3.style.display = "none";
    granbo4.style.display = "block";

});