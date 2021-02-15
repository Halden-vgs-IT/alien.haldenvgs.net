// Heiskort

// Slider
let slider = document.getElementById("slider");
let price = document.getElementById("price");
let priceFinal = document.getElementById("price-final");
let days = document.getElementById("days");
let daysFinal = document.getElementById("days-final");
let discount = document.getElementsByClassName("discount");

let prices = [200, 400, 600, 800, 1000, 1000, 1000];

days.innerHTML = "1";
daysFinal.innerHTML = "1";

// NOT DONE!!
//function discount() {
//    if (slider.value) {
//        for (let i = 0; i < prices.length; i++) {
//            prices[i] = prices[i] - prices[i] * 0.25;
//        }
//        listener();
//    } else {
//        prices = [200, 400, 600, 800, 1000, 1000, 1000];
//        listener();
//    }
//}

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
                break;
            case "2":
                price.innerHTML = Number(prices[1]).toFixed(0);
                priceFinal.innerHTML = Number(prices[1]).toFixed(0);
                days.innerHTML = "2";
                daysFinal.innerHTML = "2";
                discount[0].style.display = "none";
                discount[1].style.display = "none";
                break;
            case "3":
                price.innerHTML = Number(prices[2]).toFixed(0);
                priceFinal.innerHTML = Number(prices[2]).toFixed(0);
                days.innerHTML = "3";
                daysFinal.innerHTML = "3";
                discount[0].style.display = "none";
                discount[1].style.display = "none";
                break;
            case "4":
                price.innerHTML = Number(prices[3]).toFixed(0);
                priceFinal.innerHTML = Number(prices[3]).toFixed(0);
                days.innerHTML = "4";
                daysFinal.innerHTML = "4";
                discount[0].style.display = "none";
                discount[1].style.display = "none";
                break;
            case "5":
                price.innerHTML = Number(prices[4]).toFixed(0);
                priceFinal.innerHTML = Number(prices[4]).toFixed(0);
                days.innerHTML = "5";
                daysFinal.innerHTML = "5";
                discount[0].style.display = "none";
                discount[1].style.display = "none";
                break;
            case "6":
                price.innerHTML = Number(prices[5]).toFixed(0);
                priceFinal.innerHTML = Number(prices[5]).toFixed(0);
                days.innerHTML = "6";
                daysFinal.innerHTML = "6";
                discount[0].style.display = "inline-block";
                discount[0].innerHTML = "16.67% rabatt";
                discount[1].style.display = "inline-block";
                discount[1].innerHTML = "16.67%";
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