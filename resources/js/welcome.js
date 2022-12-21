import "../sass/welcome.scss";

let menu = document.querySelector("#menu");
let header = document.querySelector("header");
let navbar = document.querySelector(".navbar");
let liMenu = document.querySelectorAll(".navbar ul li");

menu.onclick = function () {
    menu.classList.toggle("fa-times");
    navbar.classList.toggle("active");
    liMenu.forEach((li) => {
        li.onclick = function () {
            menu.classList.remove("fa-times");
            navbar.classList.remove("active");
        };
    });
};

window.onscroll = function () {
    if (this.scrollY >= 120) {
        header.style.background = "#4444449c";
    } else {
        header.style.background = "transparent";
    }
};

// Swiper team

var swiper = new Swiper(".slide-content", {
    slidesPerView: 3,
    spaceBetween: 25,
    loop: true,
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
    },
});
