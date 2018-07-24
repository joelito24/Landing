$(document).ready(function(){

    $('.form-block .close').click(function(){
        $('.whitepaper-popup').fadeOut();
    });
    $("header .mbl-servicios").click(function(){
        $(".mobile-dropdown").slideToggle();
        $("header .mbl-servicios").toggleClass("default-color");
        $("header .mbl-servicios").toggleClass("main-blue");
        $("header .mbl-servicios span").toggleClass("down");
        $("header .mbl-servicios span").toggleClass("rotated");

    });
    $("header .mbl-especializaciones").click(function(){
        $(".esp-mobile-dropdown").slideToggle();
        $("header .mbl-especializaciones").toggleClass("default-color");
        $("header .mbl-especializaciones").toggleClass("main-blue");
        $("header .mbl-especializaciones span").toggleClass("down");
        $("header .mbl-especializaciones span").toggleClass("rotated");
    });
    $("#burger, #mobile-close").click(function(){
        $("#header").toggleClass('pos-abs');
        //$("#burger, #mobile-close").toggle();
        $("#mobile-menu-content").toggle();
        $(this).find('#nav-icon1').toggleClass('open');
    });
});

function createCookie(name, value, days) {
    var expires;

    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toGMTString();
    } else {
        expires = "";
    }
    document.cookie = encodeURIComponent(name) + "=" + encodeURIComponent(value) + expires + "; path=/";
}
function readCookie(name) {
    var nameEQ = encodeURIComponent(name) + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) === ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) === 0) return decodeURIComponent(c.substring(nameEQ.length, c.length));
    }
    return null;
}