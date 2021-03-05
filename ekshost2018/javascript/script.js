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
    hytterView.style.display = "flex";
    granbo.style.display = "none";
    granhaug.style.display = "none";
    granstua.style.display = "none";
    grantoppen.style.display = "none";

    // Granstua
    granbo1.style.display = "block";
    granbo2.style.display = "none";
    granbo3.style.display = "none";
    granbo4.style.display = "none";
    // Granstua
    granstua1.style.display = "block";
    granstua2.style.display = "none";
    granstua3.style.display = "none";
    granstua4.style.display = "none";

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
let backLink = document.getElementsByClassName("back-link");
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

    homeLink[1].style.display = "block";
    backLink[0].style.display = "none";

});
backLink[0].addEventListener('click', function(event) {

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

    homeLink[1].style.display = "block";
    backLink[0].style.display = "none";

    hytterView.style.display = "block";
    grantoppen.style.display = "none";
    granstua.style.display = "none";
    granhaug.style.display = "none";
    granbo.style.display = "none";

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
    let pType = document.getElementsByClassName("p-type");
    let ageFinalText = document.getElementById("age-final-text");
    let daysFinalText = document.getElementById("days-final-text");
    let payPriceText = document.getElementById("price-pay-text");
    let dateText = document.getElementsByClassName("date-text");
    let timeText = document.getElementsByClassName("time-text");

    let pAge = document.getElementsByClassName("p-age");
    let pDays = document.getElementsByClassName("p-days");
    let pPrice = document.getElementsByClassName("p-price");

    pType[0].innerHTML = "Heiskort";

    pAge[0].style.display = "block";
    pDays[0].style.display = "block";
    pPrice[0].style.display = "flex";

    let date = new Date();
    let months = ["Jan","Feb","Mar","Apr","Mai","Jun","Jul","Aug","Sep","Okt","Nov","Des"];

    let hour = date.getHours();
    let minute = date.getMinutes();

    if (hour.toString().length === 1) { hour = '0' + hour; }
    if (minute.toString().length === 1) { minute = '0' + minute; }

    ageFinalText.innerHTML = ageFinal.innerHTML;
    daysFinalText.innerHTML = days.innerHTML;
    payPriceText.innerHTML = price.innerHTML;
    dateText[0].innerHTML = date.getDate() + ' ' + months[date.getMonth()] + ', ' + date.getFullYear();
    timeText[0].innerHTML = hour + ':' + minute;

    if (slider.value == 6) {
        discount[2].style.display = "inline-block";
        discount[2].innerHTML =  "16.67%";
    } else if (slider.value == 7) {
        discount[2].style.display = "inline-block";
        discount[2].innerHTML =  "28.57%";
    } else {
        discount[2].innerHTML =  "";
    }

    let loader = document.getElementsByClassName("user-loader");
    let checkmark = document.getElementsByClassName("uil-check");

    loader[0].style.animation = "loader 5s ease-in-out forwards";
    checkmark[0].style.animation = "checkmark 5s ease-in-out forwards";

    setTimeout(function() {
        pageHome.style.display = "block";
        pageHeiskort.style.display = "none";
        pageHytter.style.display = "none";
        pagePurchase.style.display = "none";

        pageBottom[0].style.display = "none";
        barnButton.style.opacity = "1";
        barnButton.style.border = "1px solid var(--bc-gray)";
        voksenButton.style.opacity = "1";
        voksenButton.style.border = "1px solid var(--bc-gray)";

        slider.value = 1;
        price.innerHTML = Intl.NumberFormat('no-NO', { style: 'currency', currency: 'NOK' }).format(prices[0]);
        priceFinal.innerHTML = Intl.NumberFormat('no-NO', { style: 'currency', currency: 'NOK' }).format(prices[0]);
        days.innerHTML = "1";
        daysFinal.innerHTML = "1";
        discount[0].style.display = "none";
        discount[1].style.display = "none";
        discount[2].style.display = "none";
        disc1.style.display = "none";
        disc2.style.display = "none";
        slider.style.background =
            "linear-gradient(to right, #41A0FF 0%, #41A0FF " +
            "0" +
            "%, #eaeefb " +
            "0" +
            "%, #eaeefb 100%)";

        pAge[0].style.display = "none";
        pDays[0].style.display = "none";
        pPrice[0].style.display = "none";

        loader[0].style.animation = "none";
        checkmark[0].style.animation = "none";
    }, 5000);

});
// Purchase Link 1
purchaseLink[1].addEventListener('click', function(event) {

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

    let pPrice = document.getElementsByClassName("p-price");
    let payPriceText = document.getElementById("price-pay-text");
    pPrice[0].style.display = "flex";
    payPriceText.innerHTML = Intl.NumberFormat('no-NO', { style: 'currency', currency: 'NOK' }).format(hytter[0]["ukepris"]);

    let pType = document.getElementsByClassName("p-type");
    pType[0].innerHTML = "Grantoppen Hytte";

    let dateText = document.getElementsByClassName("date-text");
    let timeText = document.getElementsByClassName("time-text");

    let date = new Date();
    let months = ["Jan","Feb","Mar","Apr","Mai","Jun","Jul","Aug","Sep","Okt","Nov","Des"];

    let hour = date.getHours();
    let minute = date.getMinutes();

    if (hour.toString().length === 1) { hour = '0' + hour; }
    if (minute.toString().length === 1) { minute = '0' + minute; }

    dateText[0].innerHTML = date.getDate() + ' ' + months[date.getMonth()] + ', ' + date.getFullYear();
    timeText[0].innerHTML = hour + ':' + minute;

    let loader = document.getElementsByClassName("user-loader");
    let checkmark = document.getElementsByClassName("uil-check");

    loader[0].style.animation = "loader 5s ease-in-out forwards";
    checkmark[0].style.animation = "checkmark 5s ease-in-out forwards";

    if (search.value === arr[0]) {
        hytter[0]["utleid"]["jul"] = true;
    } else if (search.value === arr[1]) {
        hytter[0]["utleid"]["vinter"] = true;
    } else if (search.value === arr[2]) {
        hytter[0]["utleid"]["paske"] = true;
    }

    buyBtn[0].innerHTML = "Hytten er opptatt";
    buyBtn[0].style.pointerEvents = "none";

    setTimeout(function() {
        // Scroll to top
        window.scrollTo({
            top: 0,
            behavior: 'auto'
        });

        // Pages
        pageHome.style.display = "block";
        pageHeiskort.style.display = "none";
        pageHytter.style.display = "none";
        hytterView.style.display = "flex";
        pagePurchase.style.display = "none";
        granbo.style.display = "none";
        granhaug.style.display = "none";
        granstua.style.display = "none";
        grantoppen.style.display = "none";
    }, 5000);

});
// Purchase Link 2
purchaseLink[2].addEventListener('click', function(event) {

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

    let pPrice = document.getElementsByClassName("p-price");
    let payPriceText = document.getElementById("price-pay-text");
    pPrice[0].style.display = "flex";
    payPriceText.innerHTML = Intl.NumberFormat('no-NO', { style: 'currency', currency: 'NOK' }).format(hytter[1]["ukepris"]);

    let pType = document.getElementsByClassName("p-type");
    pType[0].innerHTML = "Granbo Hytte";

    let dateText = document.getElementsByClassName("date-text");
    let timeText = document.getElementsByClassName("time-text");

    let date = new Date();
    let months = ["Jan","Feb","Mar","Apr","Mai","Jun","Jul","Aug","Sep","Okt","Nov","Des"];

    let hour = date.getHours();
    let minute = date.getMinutes();

    if (hour.toString().length === 1) { hour = '0' + hour; }
    if (minute.toString().length === 1) { minute = '0' + minute; }

    dateText[0].innerHTML = date.getDate() + ' ' + months[date.getMonth()] + ', ' + date.getFullYear();
    timeText[0].innerHTML = hour + ':' + minute;

    let loader = document.getElementsByClassName("user-loader");
    let checkmark = document.getElementsByClassName("uil-check");

    loader[0].style.animation = "loader 5s ease-in-out forwards";
    checkmark[0].style.animation = "checkmark 5s ease-in-out forwards";

    if (search.value === arr[0]) {
        hytter[1]["utleid"]["jul"] = true;
    } else if (search.value === arr[1]) {
        hytter[1]["utleid"]["vinter"] = true;
    } else if (search.value === arr[2]) {
        hytter[1]["utleid"]["paske"] = true;
    }

    buyBtn[1].innerHTML = "Hytten er opptatt";
    buyBtn[1].style.pointerEvents = "none";

    setTimeout(function() {
        // Scroll to top
        window.scrollTo({
            top: 0,
            behavior: 'auto'
        });

        // Pages
        pageHome.style.display = "block";
        pageHeiskort.style.display = "none";
        pageHytter.style.display = "none";
        hytterView.style.display = "flex";
        pagePurchase.style.display = "none";
        granbo.style.display = "none";
        granhaug.style.display = "none";
        granstua.style.display = "none";
        grantoppen.style.display = "none";
    }, 5000);

});
// Purchase Link 2
purchaseLink[3].addEventListener('click', function(event) {

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

    let pPrice = document.getElementsByClassName("p-price");
    let payPriceText = document.getElementById("price-pay-text");
    pPrice[0].style.display = "flex";
    payPriceText.innerHTML = Intl.NumberFormat('no-NO', { style: 'currency', currency: 'NOK' }).format(hytter[2]["ukepris"]);

    let pType = document.getElementsByClassName("p-type");
    pType[0].innerHTML = "Granstua Hytte";

    let dateText = document.getElementsByClassName("date-text");
    let timeText = document.getElementsByClassName("time-text");

    let date = new Date();
    let months = ["Jan","Feb","Mar","Apr","Mai","Jun","Jul","Aug","Sep","Okt","Nov","Des"];

    let hour = date.getHours();
    let minute = date.getMinutes();

    if (hour.toString().length === 1) { hour = '0' + hour; }
    if (minute.toString().length === 1) { minute = '0' + minute; }

    dateText[0].innerHTML = date.getDate() + ' ' + months[date.getMonth()] + ', ' + date.getFullYear();
    timeText[0].innerHTML = hour + ':' + minute;

    let loader = document.getElementsByClassName("user-loader");
    let checkmark = document.getElementsByClassName("uil-check");

    loader[0].style.animation = "loader 5s ease-in-out forwards";
    checkmark[0].style.animation = "checkmark 5s ease-in-out forwards";

    if (search.value === arr[0]) {
        hytter[2]["utleid"]["jul"] = true;
    } else if (search.value === arr[1]) {
        hytter[2]["utleid"]["vinter"] = true;
    } else if (search.value === arr[2]) {
        hytter[2]["utleid"]["paske"] = true;
    }

    buyBtn[2].innerHTML = "Hytten er opptatt";
    buyBtn[2].style.pointerEvents = "none";

    setTimeout(function() {
        // Scroll to top
        window.scrollTo({
            top: 0,
            behavior: 'auto'
        });

        // Pages
        pageHome.style.display = "block";
        pageHeiskort.style.display = "none";
        pageHytter.style.display = "none";
        hytterView.style.display = "flex";
        pagePurchase.style.display = "none";
        granbo.style.display = "none";
        granhaug.style.display = "none";
        granstua.style.display = "none";
        grantoppen.style.display = "none";
    }, 5000);

});
// Purchase Link 2
purchaseLink[4].addEventListener('click', function(event) {

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

    let pPrice = document.getElementsByClassName("p-price");
    let payPriceText = document.getElementById("price-pay-text");
    pPrice[0].style.display = "flex";
    payPriceText.innerHTML = Intl.NumberFormat('no-NO', { style: 'currency', currency: 'NOK' }).format(hytter[3]["ukepris"]);

    let pType = document.getElementsByClassName("p-type");
    pType[0].innerHTML = "Granhaug Hytte";

    let dateText = document.getElementsByClassName("date-text");
    let timeText = document.getElementsByClassName("time-text");

    let date = new Date();
    let months = ["Jan","Feb","Mar","Apr","Mai","Jun","Jul","Aug","Sep","Okt","Nov","Des"];

    let hour = date.getHours();
    let minute = date.getMinutes();

    if (hour.toString().length === 1) { hour = '0' + hour; }
    if (minute.toString().length === 1) { minute = '0' + minute; }

    dateText[0].innerHTML = date.getDate() + ' ' + months[date.getMonth()] + ', ' + date.getFullYear();
    timeText[0].innerHTML = hour + ':' + minute;

    let loader = document.getElementsByClassName("user-loader");
    let checkmark = document.getElementsByClassName("uil-check");

    loader[0].style.animation = "loader 5s ease-in-out forwards";
    checkmark[0].style.animation = "checkmark 5s ease-in-out forwards";

    if (search.value === arr[0]) {
        hytter[3]["utleid"]["jul"] = true;
    } else if (search.value === arr[1]) {
        hytter[3]["utleid"]["vinter"] = true;
    } else if (search.value === arr[2]) {
        hytter[3]["utleid"]["paske"] = true;
    }

    buyBtn[3].innerHTML = "Hytten er opptatt";
    buyBtn[3].style.pointerEvents = "none";

    setTimeout(function() {
        // Scroll to top
        window.scrollTo({
            top: 0,
            behavior: 'auto'
        });

        // Pages
        pageHome.style.display = "block";
        pageHeiskort.style.display = "none";
        pageHytter.style.display = "none";
        hytterView.style.display = "flex";
        pagePurchase.style.display = "none";
        granbo.style.display = "none";
        granhaug.style.display = "none";
        granstua.style.display = "none";
        grantoppen.style.display = "none";
    }, 5000);

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