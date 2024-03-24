CookieConsent.run({
    categories: {
        necessary: {
            enabled: true,  // this category is enabled by default
            readOnly: true  // this category cannot be disabled
        },
        analytics: {}
    },

    language: {
        default: 'de',
        translations: {
            de: {
                consentModal: {
                    title: 'Wir nutzen Cookies, um die Zugriffe auf unsere Website zu analysieren',
                    acceptAllBtn: 'Alle akzeptieren',
                    acceptNecessaryBtn: 'Alle ablehnen',
                },
            }
        }
    }
});

// make header shrink on scroll
$(document).on("scroll", function () {
    if ($(document).scrollTop() > 100) {
        $(".menu").addClass("menu-shrink");
        $(".logo").addClass("logo-shrink");
        $(".header-phone").addClass("header-phone-shrink")
        $(".header-phone-icon").addClass("header-phone-icon-shrink")
    } else {
        $(".menu").removeClass("menu-shrink");
        $(".logo").removeClass("logo-shrink");
        $(".header-phone").removeClass("header-phone-shrink");
        $(".header-phone-icon").removeClass("header-phone-icon-shrink");
    }
});

/* DOLMETSCHEN SLIDER */

let currentType = 0;
let numItems = 4;

// register handler for interpreting slider
$("#interpretingTypesModalCarousel").on("slide.bs.carousel", (event) => {
    if (event.direction === "right") {
        if (currentType === 0) {
            currentType = numItems - 1;
        } else {
            currentType--;
        }
    } else if (event.direction === "left") {
        if (currentType === numItems - 1) {
            currentType = 0;
        } else {
            currentType++;
        }
    }

    updateModalTitle(currentType);
});

function openInterpretingTypesModal(event, type) {
    currentType = type;

    event.preventDefault();

    updateModalTitle(currentType);

    // update slide body
    $("#interpretingTypesModalCarousel .carousel-item").removeClass("active"); // reset active item
    let bodyElement = $("#interpretingTypesModalCarousel .carousel-item")[type];
    $(bodyElement).addClass("active");

    $("#interpretingTypesModal").modal("show");
}

function updateModalTitle(type) {
    $("#interpretingTypesModal .modal-title h5").hide(); // reset title
    let titleElement = $("#interpretingTypesModal .modal-title h5")[type];
    $(titleElement).show();
}