// Pages
const pageHome = document.querySelector("#page-home");
const pageHeiskort = document.querySelector("#page-heiskort");
const pageHytter = document.querySelector("#page-hytter");
const pagePurchase = document.querySelector("#page-purchase");

// Links
// =====
// * These links takes you to the different pages on the website.
// * The click functions are for buttons to "redirect" or rather set the styling for the different pages.
// * "scrollTo" makes sure you always stay in the top of the page when you go to a new page,
//   just like you would when redirecting to an actual page.
// * Every click function changes style of every page in case the button is used on a different page.
let homeLink = document.getElementsByClassName("home-link");
let heiskortLink = document.getElementsByClassName("heiskort-link");
let hytterLink = document.getElementsByClassName("hytter-link");
let purchaseLink = document.getElementsByClassName("purchase-link");

// Home Link 1
homeLink[0].addEventListener('click', function(event) {

    event.preventDefault();

    // Scroll to top
    window.scrollTo({
        top: 0,
        behavior: 'auto'
    });

    // Pages
    pageHome.style.display = "block";
    pageHeiskort.style.display = "none";
    pageHytter.style.display = "none";

    location.reload();

});
// Home Link 1
homeLink[1].addEventListener('click', function(event) {

    event.preventDefault();

    // Scroll to top
    window.scrollTo({
        top: 0,
        behavior: 'auto'
    });

    // Pages
    pageHome.style.display = "block";
    pageHeiskort.style.display = "none";
    pageHytter.style.display = "none";

});
// Heiskort Link 1
heiskortLink[0].addEventListener('click', function(event) {

    event.preventDefault();

    // Scroll to top
    window.scrollTo({
        top: 0,
        behavior: 'auto'
    });

    // Pages
    pageHome.style.display = "none";
    pageHeiskort.style.display = "block";
    pageHytter.style.display = "none";

});
// Heiskort Link 2
heiskortLink[1].addEventListener('click', function(event) {

    event.preventDefault();

    // Scroll to top
    window.scrollTo({
        top: 0,
        behavior: 'auto'
    });

    // Pages
    pageHome.style.display = "none";
    pageHeiskort.style.display = "block";
    pageHytter.style.display = "none";

});
// Hytter Link 1
hytterLink[0].addEventListener('click', function(event) {

    event.preventDefault();

    // Scroll to top
    window.scrollTo({
        top: 0,
        behavior: 'auto'
    });

    // Pages
    pageHome.style.display = "none";
    pageHeiskort.style.display = "none";
    pageHytter.style.display = "block";

});
// Purchase Link 1
purchaseLink[0].addEventListener('click', function(event) {

    event.preventDefault();

    // Scroll to top
    window.scrollTo({
        top: 0,
        behavior: 'auto'
    });

    // Pages
    pageHome.style.display = "none";
    pageHeiskort.style.display = "none";
    pageHytter.style.display = "none";
    pagePurchase.style.display = "block";

    // Output payment details
    let daysFinalText = document.getElementById("days-final-text");
    let payPriceText = document.getElementById("price-pay-text");

    daysFinalText.innerHTML = days.innerHTML;
    payPriceText.innerHTML = price.innerHTML;

    setTimeout(function() {
        location.reload();
    }, 2500);

});


// Cards
// =====
// These cards send you to the different pages on the website.
// Variables are declared at the top, and the hover functions are underneath.
// For the transitions on the hover: They are declared in "style.css".
const card1 = document.querySelector("#card-heiskort");
const card2 = document.querySelector("#card-hytter");

// Card Images
const cardImage1 = document.querySelector("#card-image-heiskort");
const cardImage2 = document.querySelector("#card-image-hytter");

// Card Glow
let glow = document.getElementsByClassName("card-glow");

// Mouse hover over for card 1
// And
// Mouse hover leaving for card 1
card1.addEventListener("mouseenter", function(event) {

    event.preventDefault();

    cardImage1.style.transform = "scale(1.15, 1.15)";
    glow[0].style.transform = "scale(1, 1)";
});
card1.addEventListener("mouseleave", function(event) {

    event.preventDefault();

    cardImage1.style.transform = "scale(1, 1)";
    glow[0].style.transform = "scale(.95, .95)";
});

// Mouse hover over for card 2
// And
// Mouse hover leaving for card 2
card2.addEventListener("mouseenter", function(event) {

    event.preventDefault();

    cardImage2.style.transform = "scale(1.15, 1.15)";
    glow[1].style.transform = "scale(1, 1)";
});
card2.addEventListener("mouseleave", function(event) {

    event.preventDefault();

    cardImage2.style.transform = "scale(1, 1)";
    glow[1].style.transform = "scale(.95, .95)";
});