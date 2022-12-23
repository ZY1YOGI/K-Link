// Swiper Teachers

var swiper = new Swiper(".slide-content", {
    slidesPerView: 4,
    spaceBetween: 35,
    loop: false,
    centerSlide: "true",
    fade: "true",
    grabCursor: "true",
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        dynamicBullets: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    breakpoints: {
        0: {
            slidesPerView: 1.3,
        },
        520: {
            slidesPerView: 2,
        },
        950: {
            slidesPerView: 3,
        },

        1350: {
            slidesPerView: 4,
        },

    },
});
