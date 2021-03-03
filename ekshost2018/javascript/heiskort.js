// Heiskort

// Slider
let slider = document.getElementById("slider");
let price = document.getElementById("price");
let priceFinal = document.getElementById("price-final");
let days = document.getElementById("days");
let daysFinal = document.getElementById("days-final");
let discount = document.getElementsByClassName("discount");

let disc1 = document.getElementById("disc1");
let disc2 = document.getElementById("disc2");

let prices = [200, 400, 600, 800, 1000, 1000, 1000];

days.innerHTML = "1";
daysFinal.innerHTML = "1";

let barn = document.getElementById("barn");
let barnButton = document.getElementById("barn-button");
let voksen = document.getElementById("voksen");
let voksenButton = document.getElementById("voksen-button");
let pageBottom = document.getElementsByClassName("page-bottom");
let ageFinal = document.getElementById("age-final")

barn.addEventListener('click', function(event) {

    event.preventDefault();

    price.innerHTML = "100";
    priceFinal.innerHTML = "100";
    prices = [100, 200, 300, 400, 500, 500, 500];

    disc1.innerHTML = "&nbsp600kr&nbsp";
    disc2.innerHTML = "&nbsp700kr&nbsp";

    pageBottom[0].style.display = "block";
    voksenButton.style.opacity = ".5";
    voksenButton.style.border = "1px solid var(--bc-gray)";
    barnButton.style.opacity = "1";
    barnButton.style.border = "1px solid var(--black)";
    barnButton.style.borderRadius = "4px";

    ageFinal.innerHTML = "Barn";

    // Fix Slider
    slider.value = 1;
    price.innerHTML = Number(prices[0]).toFixed(0);
    priceFinal.innerHTML = Number(prices[0]).toFixed(0);
    days.innerHTML = "1";
    daysFinal.innerHTML = "1";
    discount[0].style.display = "none";
    discount[1].style.display = "none";
    disc1.style.display = "none";
    disc2.style.display = "none";
    slider.style.background =
        "linear-gradient(to right, #41A0FF 0%, #41A0FF " +
        "0" +
        "%, #eaeefb " +
        "0" +
        "%, #eaeefb 100%)";

});
voksen.addEventListener('click', function(event) {

    event.preventDefault();

    price.innerHTML = "200";
    priceFinal.innerHTML = "200";
    prices = [200, 400, 600, 800, 1000, 1000, 1000];

    disc1.innerHTML = "&nbsp1200kr&nbsp";
    disc2.innerHTML = "&nbsp1400kr&nbsp";

    pageBottom[0].style.display = "block";
    barnButton.style.opacity = ".5";
    barnButton.style.border = "1px solid var(--bc-gray)";
    voksenButton.style.opacity = "1";
    voksenButton.style.border = "1px solid var(--black)";
    voksenButton.style.borderRadius = "4px";

    ageFinal.innerHTML = "Voksen";

    // Fix Slider
    slider.value = 1;
    price.innerHTML = Number(prices[0]).toFixed(0);
    priceFinal.innerHTML = Number(prices[0]).toFixed(0);
    days.innerHTML = "1";
    daysFinal.innerHTML = "1";
    discount[0].style.display = "none";
    discount[1].style.display = "none";
    disc1.style.display = "none";
    disc2.style.display = "none";
    slider.style.background =
        "linear-gradient(to right, #41A0FF 0%, #41A0FF " +
        "0" +
        "%, #eaeefb " +
        "0" +
        "%, #eaeefb 100%)";

});

let listener = function () {
    window.requestAnimationFrame(function () {
        switch (slider.value) {
            case "1":
                price.innerHTML = Number(prices[0]).toFixed(0);
                priceFinal.innerHTML = Number(prices[0]).toFixed(0);
                days.innerHTML = "1";
                daysFinal.innerHTML = "1";
                discount[0].style.display = "none";
                discount[1].style.display = "none";
                disc1.style.display = "none";
                disc2.style.display = "none";
                break;
            case "2":
                price.innerHTML = Number(prices[1]).toFixed(0);
                priceFinal.innerHTML = Number(prices[1]).toFixed(0);
                days.innerHTML = "2";
                daysFinal.innerHTML = "2";
                discount[0].style.display = "none";
                discount[1].style.display = "none";
                disc1.style.display = "none";
                disc2.style.display = "none";
                break;
            case "3":
                price.innerHTML = Number(prices[2]).toFixed(0);
                priceFinal.innerHTML = Number(prices[2]).toFixed(0);
                days.innerHTML = "3";
                daysFinal.innerHTML = "3";
                discount[0].style.display = "none";
                discount[1].style.display = "none";
                disc1.style.display = "none";
                disc2.style.display = "none";
                break;
            case "4":
                price.innerHTML = Number(prices[3]).toFixed(0);
                priceFinal.innerHTML = Number(prices[3]).toFixed(0);
                days.innerHTML = "4";
                daysFinal.innerHTML = "4";
                discount[0].style.display = "none";
                discount[1].style.display = "none";
                disc1.style.display = "none";
                disc2.style.display = "none";
                break;
            case "5":
                price.innerHTML = Number(prices[4]).toFixed(0);
                priceFinal.innerHTML = Number(prices[4]).toFixed(0);
                days.innerHTML = "5";
                daysFinal.innerHTML = "5";
                discount[0].style.display = "none";
                discount[1].style.display = "none";
                disc1.style.display = "none";
                disc2.style.display = "none";
                break;
            case "6":
                price.innerHTML = Number(prices[5]).toFixed(0);
                priceFinal.innerHTML = Number(prices[5]).toFixed(0);
                days.innerHTML = "6";
                daysFinal.innerHTML = "6";
                discount[0].style.display = "inline-block";
                discount[0].innerHTML =  "16.67% rabatt";
                discount[1].style.display = "inline-block";
                discount[1].innerHTML = "16.67%";
                disc1.style.display = "block";
                disc2.style.display = "none";
                break;
            case "7":
                price.innerHTML = Number(prices[6]).toFixed(0);
                priceFinal.innerHTML = Number(prices[6]).toFixed(0);
                days.innerHTML = "7";
                daysFinal.innerHTML = "7";
                discount[0].style.display = "inline-block";
                discount[0].innerHTML = "28.57% rabatt";
                discount[1].style.display = "inline-block";
                discount[1].innerHTML = "28.57%";
                disc1.style.display = "none";
                disc2.style.display = "block";
        }
    });
};

slider.addEventListener("mousedown", function () {
    listener();
    slider.addEventListener("mousemove", listener);
});
slider.addEventListener("mouseup", function () {
    slider.removeEventListener("mousemove", listener);
});

slider.addEventListener("keydown", listener);

slider.oninput = function () {
    let value = ((this.value - this.min) / (this.max - this.min)) * 100;
    this.style.background =
        "linear-gradient(to right, #41A0FF 0%, #41A0FF " +
        value +
        "%, #eaeefb " +
        value +
        "%, #eaeefb 100%)";
};