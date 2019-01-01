// make header shrink on scroll
$(document).on("scroll", function () {
    if ($(document).scrollTop() > 100) {
        $(".menu").addClass("menu-shrink");
        $(".logo").addClass("logo-shrink");
        $(".header-phone").addClass("header-phone-shrink")
    } else {
        $(".menu").removeClass("menu-shrink");
        $(".logo").removeClass("logo-shrink");
        $(".header-phone").removeClass("header-phone-shrink");
    }
});