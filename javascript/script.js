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


$(document)
    .on("mousemove", ".card", function(event) {
        var halfWidth = (this.clientWidth / 2);
        var halfHeight = (this.clientHeight / 2);
        var mouseX = (halfWidth - (event.pageX - this.offsetLeft));
        var mouseY = (halfHeight - (event.pageY - this.offsetTop));
        var degX  = ((mouseY / halfHeight) * 15) + 'deg'; //max degree = 15
        var degY  = ((mouseX / halfWidth) * -15) + 'deg'; //max degree = 15
        $(this).css('transform', function() {
            return 'perspective(512px) translate3d(-2px, -2px, 0) rotateX('+ degX +') rotateY('+ degY +')';
        })
            .children('.card-info').css('transform', function() {
            return 'perspective(512px) translate3d(4px, 4px, 0) rotateX('+ degX +') rotateY('+ degY +')';
        });
    })
    .on("mouseout", ".card", function() {
        $(this).removeAttr('style')
            .children('.card-info').removeAttr('style');
    });