$(document).ready(function(){

    $('.form-block .close').click(function(){
        $('.whitepaper-popup').fadeOut();
    });
    $("header .mbl-servicios").click(function(){
        $(".mobile-dropdown").slideToggle();
        $("header .mbl-servicios").toggleClass("default-color");
        $("header .mbl-servicios").toggleClass("main-blue");
        $("header .mbl-servicios img").toggleClass("rotated");
    });
    $("header .mbl-especializaciones").click(function(){
        $(".esp-mobile-dropdown").slideToggle();
        $("header .mbl-especializaciones").toggleClass("default-color");
        $("header .mbl-especializaciones").toggleClass("main-blue");
        $("header .mbl-especializaciones img").toggleClass("rotated");
    });
    $("#burger, #mobile-close").click(function(){
        $("#header").toggleClass('pos-abs');
        $("#burger, #mobile-close").toggle();
        $("#mobile-menu-content").toggle();
    });
});
