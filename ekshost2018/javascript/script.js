// navbar button
let navBtn = $('#nav-button');
let menu = $('.menu-wrapper');
let menuImage = $('.menu-image-wrapper');

navBtn.click(function() {
    if(navBtn.hasClass('open')) {
        navBtn.toggleClass('open');
        navBtn.css("transform", "rotate(0deg)");
        menu.css("opacity", "0");
        menu.css("pointer-events", "none");
        menu.css("z-index", "50");
        menuImage.css("display", "none");
        $('body').css("overflow", "auto");
        setTimeout(function() {
            menu.css("pointer-events", "none");
            menu.css("z-index", "50");
        }, 275);
    } else {
        navBtn.toggleClass('open');
        navBtn.css("transform", "rotate(180deg)");
        menu.css("opacity", "1");
        menuImage.css("display", "inline-block");
        $('body').css("overflow", "hidden");
        setTimeout(function() {
            menu.css("pointer-events", "auto");
            menu.css("z-index", "auto");
        }, 275);
    }
});