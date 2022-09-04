$(document).ready(function() {

    var menu = $(".menu");

    $(window).resize(function(){
        $(".menu-toggle").removeClass("active");
        if ($(window).innerWidth() > 800) {
            menu.show();
        }
        else{
            menu.hide();
        }
    });

    $(".menu-toggle").click(function() {
        menu.slideToggle();
        $(this).toggleClass("active");
    });

    $(".dropdown").click(function() {
        $(this).toggleClass("active");
        $(this).next("ul").slideToggle();
        $(this).children(".arrow").toggleClass("down up");
    });
});