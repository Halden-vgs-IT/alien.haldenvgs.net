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

let navIcon = $('#nav-button');

navIcon.click(function(){
    if(navIcon.hasClass('open')) {
        navIcon.toggleClass('open');
        navIcon.css("transform", "rotate(0deg)");
    } else {
        navIcon.toggleClass('open');
        navIcon.css("transform", "rotate(90deg)");
    }
});

// Disable drag on image
$('img').on('dragstart', function(event) { event.preventDefault(); });

// Adds drag functionality to website
let clicked = false, clickY;
$(document).on({
    'mousemove': function (e) {
        clicked && updateScrollPos(e);
    },
    'mousedown': function (e) {
        clicked = true;
        clickY = e.pageY;
        $('html').addClass('blockSelection').css('cursor', 'grabbing');
    },
    'mouseup': function () {
        clicked = false;
        $('html').removeClass('blockSelection').css('cursor', 'grab');
    }
});

let updateScrollPos = function (e) {
    $(window).scrollTop($(window).scrollTop() + (clickY - e.pageY));
}