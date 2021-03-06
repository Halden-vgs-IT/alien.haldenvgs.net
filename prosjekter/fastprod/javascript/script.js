//*-~*~-*-*-~*~-*-*-~*~*-*-~*~-*-*-~*~-*
//
//　　　　　　　　Made with ❤ by ~
//　　　　　　 Areal Alien ❥ 雷克斯
//
//　　　　　　　　　　▄▀▄　　　▄▀▄
//　　　　　　　　 ▄█░░▀▀▀▀▀░░█▄
//　　　　　▄▄ 　█░░░░░░░░░░░█　▄▄
//　　　　█▄▄█　█░░▀░░┬░░▀░░█　█▄▄█
//*-~*~-*-*-~*~-*-*-~*~*-*-~*~-*-*-~*~-*

// Loading animation
let wrapperInner = document.querySelector('.loading-page');
let wrapper = document.querySelector('.loading-page svg');

function draw() {
    wrapper.classList.add('active');
    wrapperInner.classList.add('animation-in');
}
setTimeout(draw, 300);



// navbar button
let navBtn = $('#nav-button');

navBtn.click(function() {
    if(navBtn.hasClass('open')) {
        navBtn.toggleClass('open');
        navBtn.css("transform", "rotate(0deg)");
    } else {
        navBtn.toggleClass('open');
        navBtn.css("transform", "rotate(90deg)");
    }
});

let delayInShortMilliseconds = 350;
let menu = $("#menu");
navBtn.click(function(){
    if (menu.css('display') === "none") {
        $('body').css("overflow", "hidden");
        menu.css("display", "flex");
        menu.css("animation", "menushow .3s ease-in-out forwards");
        $('.mii-1').css("animation", "mii-show .35s cubic-bezier(.175,.685,.32,1.175) forwards");
        $('.mii-2').css("animation", "mii-show .35s .04s cubic-bezier(.175,.685,.32,1.175) forwards");
        $('.mii-3').css("animation", "mii-show .35s .08s cubic-bezier(.175,.685,.32,1.175) forwards");
        $('.mii-4').css("animation", "mii-show .35s .12s cubic-bezier(.175,.685,.32,1.175) forwards");
    } else {
        $('body').css("overflow", "auto");
        menu.css("animation", "menuhide .3s ease-in-out forwards");
        $('.mii-1').css("animation", "mii-hide .35s cubic-bezier(.175,.685,.32,1.175) forwards");
        $('.mii-2').css("animation", "mii-hide .35s cubic-bezier(.175,.685,.32,1.175) forwards");
        $('.mii-3').css("animation", "mii-hide .35s cubic-bezier(.175,.685,.32,1.175) forwards");
        $('.mii-4').css("animation", "mii-hide .35s cubic-bezier(.175,.685,.32,1.175) forwards");
        setTimeout(function() {
            menu.css("display", "none");
        }, delayInShortMilliseconds);
    }
});


let note = $("#note");

$("#button").on({
    mouseenter: function () {
        note.css("top", "110%");
        note.css("opacity", "1");
    },
    mouseleave: function () {
        note.css("top", "105%");
        note.css("opacity", "0");
    }
});