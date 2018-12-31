$(document).on("scroll", function () {
    if ($(document).scrollTop() > 100) {
        $(".logo").addClass("logo-shrink");
        $(".header-phone").addClass("header-phone-shrink")
    } else {
        $(".logo").removeClass("logo-shrink");
        $(".header-phone").removeClass("header-phone-shrink");
    }
});